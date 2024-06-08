<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use App\Models\raport;
use App\Models\User;
use Illuminate\Http\Request;
use Midtrans\Snap;

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

        // Buat ID transaksi unik
        $orderId = uniqid();

        // Data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => 3000, // Jumlah pembayaran
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
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

        $notification = new \Midtrans\Notification();

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id;

        if ($transactionStatus == 'capture' || $transactionStatus == 'settlement') {
            // Pembayaran berhasil
            $user = User::where('order_id', $orderId)->first();
            if ($user) {
                $user->payment = 'Terbayar';
                $user->save();
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
