<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use App\Models\raport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;

class PpdbController extends Controller
{
    public function daftar()
    {
        $usersWithLolos = User::where('status', 'LOLOS')->exists();
        return view('ppdb.daftar' ,['usersWithLolos' => $usersWithLolos]);
    }

    public function formdata(){
        return view('ppdb.formdata');
    }
    public function pembayaran()
    {
        // Set konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        \Midtrans\Config::$isProduction = config('services.midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('services.midtrans.is_sanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is_3ds');

        // Ambil pengguna yang sedang login
        $userID = Auth::id();
        $user = User::find($userID);

        // Pastikan pengguna tidak null
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Buat ID transaksi unik
        $orderId = uniqid();

        // Simpan order_id ke pengguna
        $user->order_id = $orderId;
        $user->save();

        // Data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => 3000, // Jumlah pembayaran
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email' => $user->email,
            ],
        ];

        try {
            // Buat transaksi Midtrans
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('ppdb.pembayaran', compact('snapToken'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function handleNotification(Request $request)
    {
        // Set konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');
        \Midtrans\Config::$isProduction = config('services.midtrans.is_production');
        \Midtrans\Config::$isSanitized = config('services.midtrans.is_sanitized');
        \Midtrans\Config::$is3ds = config('services.midtrans.is_3ds');

        // Tambahkan log untuk memeriksa bahwa metode ini dipanggil
        \Illuminate\Support\Facades\Log::info('handleNotification method is called.');

        $payload = $request->all();
        Log::info(message:'incoming-midtrans');

        $orderId = $payload['order_id'];
        $statuscode = $payload['status_code'];
        $grossAmount = $payload['gross_amount'];
        $reqSignature = $payload['signature_key'];

        $signature = hash(algo:'sha512', data:$orderId.$statuscode.$grossAmount.config(key:'services.midtrans.server_key'));

        if($signature != $reqSignature) {
            return response()->json(['message' => 'invalid signature'],status:401);
        }

        $transactionStatus = $payload['transaction_status'];

        if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
            // Pembayaran berhasil
            $user = User::where('order_id', $orderId)->first();
            if ($user) {
                $user->payment = 'Terbayar';
                $user->save();
                \Illuminate\Support\Facades\Log::info('Payment status updated for user: ' . $user->id);
            } else {
                \Illuminate\Support\Facades\Log::error('User not found for Order ID: ' . $orderId);
            }
        }
        return response()->json(['status' => 'ok']);
    }


    public function listpen(Request $request)
    {
        $selectedJurusan = $request->input('jurusan', 'Software Engineering'); // Default to 'Software Engineering'
        $siswa = User::where('payment', 'Terbayar')
                    ->where('jurusan', $selectedJurusan)
                    ->get();

        foreach ($siswa as $user) {
            $user->average_score = $this->getAverageScores($user->id);
        }

        return view('ppdb.listpen', compact('siswa', 'selectedJurusan'));
    }

    public function pengumuman()
    {
        $latestCountdown = Countdown::latest()->first();
        $countdownTime = $latestCountdown ? $latestCountdown->countdown_time : date('Y-m-d H:i:s');
        return view('ppdb.pengumuman', compact('countdownTime'));
    }

    public function hasil()
    {
        return view('ppdb.hasil');
    }

    public function getAverageScores($userId)
    {
        $raports = raport::where('user_id', $userId)->get();
        if ($raports->isEmpty()) {
            return 0;
        }
        $totalScores = 0;
        $count = 0;
        foreach ($raports as $raport) {
            $totalScores += ($raport->bahasa_indonesia + $raport->bahasa_inggris + $raport->matematika + $raport->ipa + $raport->ppkn) / 5;
            $count++;
        }
        return $totalScores / $count;
    }

    public function selectStudents()
    {
        $jurusanList = ['Software Engineering', 'Cyber Security', 'Network System'];

        foreach ($jurusanList as $jurusan) {
            $siswa = User::where('payment', 'Terbayar')
                        ->where('jurusan', $jurusan)
                        ->get()
                        ->sortByDesc(function($user) {
                            return $this->getAverageScores($user->id);
                        });

            $sortedSiswa = $siswa->sortByDesc(function ($user) {
                return $this->getAverageScores($user->id);
            });

            $topTwoSiswa = $sortedSiswa->take(2);

            $siswaYangTidakLolos = $sortedSiswa->reject(function ($user) use ($topTwoSiswa) {
                return $topTwoSiswa->contains($user);
            });

            $topTwoSiswa->each(function($user) {
                $user->update(['status' => 'LOLOS']);
            });

            $siswaYangTidakLolos->each(function($user) {
                $user->update(['status' => 'TIDAK LOLOS']);
            });
        }

        return response()->json(['message' => 'Selection process completed.']);
    }

}
