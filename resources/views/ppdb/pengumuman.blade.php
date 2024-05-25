@extends('ppdb.layouts.app')

@section('content')
    <div class="pengumuman container">
        <div class="headpen">
            <p>PENGUMUMAN HASIL SELEKSI PPDB GOTHAM SCHOOL 2024</p>
        </div>
        <div class="countdown">
            <p>MENUJU PENGUMUMAN</p>
            <div class="waktu">
                <div class="wabox">
                    <p id="days">00</p>
                    Hari
                </div>
                <div class="wabox">
                    <p id="hours">00</p>
                    Jam
                </div>
                <div class="wabox">
                    <p id="minutes">00</p>
                    Menit
                </div>
                <div class="wabox">
                    <p id="seconds">00</p>
                    Detik
                </div>
            </div>
        </div>
    </div>
@endsection
