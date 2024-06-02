@extends('ppdb.layouts.app')
@section('content')
    <div class="hasil container">

        @if (Auth::check() && Auth::user()->status == 'LOLOS')
            <div class="headsilos">
                <p>PENGUMUMAN HASIL SELEKSI PPDB GOTHAM SCHOOL 2024</p>
            </div>
            <div class="card-wrap">
                <div class="congrats">
                    <p>SELAMAT ANDA DITERIMA</p>
                </div>
                <div class="data-diri">
                    <img src="{{Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/sidebar/Ellipse 6.svg')}}" alt="profil">
                    <div class="data">
                        <p><span>NISG       </span> : {{Auth::user()->nisn}}</p>
                        <p><span>Nama       </span> : {{Auth::user()->name}}</p>
                        <p><span>Jurusan    </span> : {{Auth::user()->jurusan}}</p>
                    </div>
                </div>
            </div>
        @endif

        @if (Auth::check() && Auth::user()->status == 'TIDAK LOLOS')
            <div class="headsiltalos">
                <p>PENGUMUMAN HASIL SELEKSI PPDB GOTHAM SCHOOL 2024</p>
            </div>
            <div class="card-wraptalos">
                <div class="congratstalos">
                    <p>MAAF ANDA BELUM DITERIMA</p>
                </div>
                <div class="data-diritalos">
                    <img src="{{Auth::user()->foto ? asset('storage/' . Auth::user()->foto) : asset('assets/sidebar/Ellipse 6.svg')}}" alt="profil">
                    <div class="datatalos">
                        <p><span>NISG       </span> : {{Auth::user()->nisn}}</p>
                        <p><span>Nama       </span> : {{Auth::user()->name}}</p>
                        <p id="ucapansemangat">
                            “Tetap semangat dan jangan putus asa, masih
                            ada kesempatan di lain waktu”
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
