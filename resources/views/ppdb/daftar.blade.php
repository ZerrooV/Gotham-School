@extends('ppdb.layouts.app')

@section('content')
    <div class="jalur container">
        <div class="banner">
            <p>Selamat Datang di Laman PPDB Gotham School</p>
        </div>
        <div class="jalur_text">
            <p>Sebelum melakukan pengisian data, silahkan pilih jalur pendaftaran yang tersedia</p>
        </div>
        <div class="pilihan">
            <p>Pilih jalur PPDB</p>
        </div>
        <table class="jabel">
            <thead>
                <tr>
                    <th>Jalur</th>
                    <th>Biaya</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jalur Reguler</td>
                    <td>Rp. 300.000</td>
                    <td>
                        <a href="{{ route('ppdb.formdata') }}">
                            <div class="jaton">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 4.001H5v14a2 2 0 0 0 2 2h8m1-5l3-3m0 0l-3-3m3 3H9"/></svg>
                                Pilih
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Jalur Prestasi</td>
                    <td>Rp. 100.000</td>
                    <td>
                        <a href="#">
                            <div class="jatontup">
                                TUTUP
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Jalur Ketua Osis</td>
                    <td>Rp. 100.000</td>
                    <td>
                        <a href="#">
                            <div class="jatontup">
                                TUTUP
                            </div>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
