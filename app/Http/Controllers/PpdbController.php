<?php

namespace App\Http\Controllers;

use App\Models\Countdown;
use App\Models\raport;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('ppdb.pembayaran');
    }

    public function listpen(Request $request)
    {
        $selectedJurusan = $request->input('jurusan', 'Software Engineering'); // Default to 'Software Engineering'
        $siswa = User::where('payment', 'Belum Bayar')
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
            $siswa = User::where('status', 'Pending')
                        ->where('jurusan', $jurusan)
                        ->get()
                        ->sortByDesc(function($user) {
                            return $this->getAverageScores($user->id);
                        });

            $sortedSiswa = $siswa->sortByDesc(function ($user) {
                return $this->getAverageScores($user->id); // Urutkan siswa dari nilai tertinggi ke terendah
            });

            // Ambil dua siswa teratas
            $topTwoSiswa = $sortedSiswa->take(2);

            // Ambil siswa sisanya (yang tidak lolos)
            $siswaYangTidakLolos = $sortedSiswa->reject(function ($user) use ($topTwoSiswa) {
                return $topTwoSiswa->contains($user);
            });

            // Update status siswa yang lolos
            $topTwoSiswa->each(function($user) {
                $user->update(['status' => 'LOLOS']);
            });

            // Update status siswa yang tidak lolos
            $siswaYangTidakLolos->each(function($user) {
                $user->update(['status' => 'TIDAK LOLOS']);
            });
        }

        return response()->json(['message' => 'Selection process completed.']);
    }

}
