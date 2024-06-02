@extends('ppdb.layouts.app')

@section('content')
    <div class="dataform container">
        <div class="formbox">
            <div class="formbox-nav">

                <a href="#dataDiri">
                    <div class="formnav active">
                        Data Diri
                    </div>
                </a>
                <a href="#inputRaport">
                    <div class="formnav">
                        Nilai Raport
                    </div>
                </a>
                <a href="#inputJurusan">
                    <div class="formnav">
                        Jurusan
                    </div>
                </a>
            </div>
        </div>

        <form action="{{ route('ppdb.form.store') }}" method="POST" class="formbox-content"  enctype="multipart/form-data">
            @csrf
            <div class="headform" id="dataDiri">
                <p class="judhal">Data Diri Calon Siswa</p>
                <p class="deshal">Silakan lengkapi formulir data diri di bawah ini dengan benar</p>
                <hr>
            </div>
            <div class="formIsian">
                <div class="formkiri">
                    <div class="form">
                        <p>NISN</p>
                        <input type="text" name="nisn" placeholder="Masukan NISN">

                    </div>
                    @error('nisn')
                            <small>{{ $message }}</small>
                    @enderror

                    <div class="form">
                        <p>Nama Lengkap</p>
                        {{Auth::user()->name}}
                    </div>

                    <div class="form">
                        <p>Tanggal Lahir</p>
                        <input type="date" name="tanggal_lahir">
                    </div>
                    @error('tanggal_lahir')
                            <small>{{ $message }}</small>
                    @enderror

                    <div class="form">
                        <p>Tempat Lahir</p>
                        <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    </div>
                    @error('tempat_lahir')
                            <small>{{ $message }}</small>
                    @enderror

                    <div class="form">
                        <p>Jenis Kelamin</p>
                        <select name="jenis_kelamin">
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    @error('jenis_kelamin')
                            <small>{{ $message }}</small>
                    @enderror

                    <div class="form">
                        <p>Alamat</p>
                        <input type="text" name="alamat" placeholder="Masukan Alamat">
                    </div>
                    @error('alamat')
                            <small>{{ $message }}</small>
                    @enderror
                </div>

                <div class="formkanan">
                    <div class="form">
                        <p>NIK</p>
                        <input type="text" name="nik" placeholder="Masukan NIK">
                    </div>
                    @error('nik')
                            <small>{{ $message }}</small>
                    @enderror

                    <div class="form">
                        <p>Email</p>
                        {{Auth::user()->email}}
                    </div>

                    <div class="form">
                        <p>No HP / WhatsApp</p>
                        <input type="text" name="nomor_HP" placeholder="Masukan Nomor">
                    </div>
                    @error('nomor_HP')
                            <small>{{ $message }}</small>
                    @enderror

                    <div class="formfoto">
                        <label for="formFile" class="form-label">Foto 3x4</label>
                        <input class="form-control" type="file" id="formFile" name="foto">
                        @error('foto')
                            <small>{{ $message }}</small>
                        @enderror
                        <p>Ketentuan : Mohon untuk mengupload foto <br> formal anda dengan background merah ukuran 3x4</p>
                    </div>
                </div>
            </div>

            <div class="headform" id="inputRaport">
                <p class="judhal">Input Nilai Raport</p>
                <p class="deshal">Nilai yang Dimasukkan Adalah Nilai Pengetahuan dengan Skala 0-100</p>
                <hr>
            </div>
            <div class="formnilai">
                @foreach (range(1, 5) as $semester)
                <div class="inputNilai">
                    <p>Semester {{ $semester }}</p>
                    <div class="mapel">
                        <div class="input">
                            <label for="indonesia_semester_{{ $semester }}">Bahasa Indonesia</label>
                            <input type="text" name="indonesia_semester_{{ $semester }}" id="indonesia_semester_{{ $semester }}">
                        </div>
                        @error("indonesia_semester_{{ $semester }}")
                            <small>{{ $message }}</small>
                        @enderror

                        <div class="input">
                            <label for="inggris_semester_{{ $semester }}">Bahasa Inggris</label>
                            <input type="text" name="inggris_semester_{{ $semester }}" id="inggris_semester_{{ $semester }}">
                        </div>
                        @error("inggris_semester_{{ $semester }}")
                            <small>{{ $message }}</small>
                        @enderror

                        <div class="input">
                            <label for="matematika_semester_{{ $semester }}">Matematika</label>
                            <input type="text" name="matematika_semester_{{ $semester }}" id="matematika_semester_{{ $semester }}">
                        </div>
                        @error("matematika_semester_{{ $semester }}")
                            <small>{{ $message }}</small>
                        @enderror

                        <div class="input">
                            <label for="ipa_semester_{{ $semester }}">IPA</label>
                            <input type="text" name="ipa_semester_{{ $semester }}" id="ipa_semester_{{ $semester }}">
                        </div>
                        @error("ipa_semester_{{ $semester }}")
                            <small>{{ $message }}</small>
                        @enderror

                        <div class="input">
                            <label for="ppkn_semester_{{ $semester }}">PPKN</label>
                            <input type="text" name="ppkn_semester_{{ $semester }}" id="ppkn_semester_{{ $semester }}">
                        </div>
                        @error("ppkn_semester_{{ $semester }}")
                            <small>{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                @endforeach
            </div>

            <div class="headform" id="inputJurusan">
                <p class="judhal">Memilih Jurusan</p>
                <p class="deshal">Pilih jurusan yang tersedia</p>
                <hr>

                <div class="warning">
                    <p>
                        Ketentuan : <br>
                        Anda hanya bisa memilih maksimal 1 jurusan yang ada di gotham school, mohon perhatikan jurusan yang anda pilih karena tidak ada pergantian jurusan setelah anda menekan tombol “simpan”.
                    </p>
                </div>

                <p id="jurdul">Pilih Jurusaan</p>
                <select name="jurusan" id="piljur">
                    <option value="Software Engineering">Software Engineering</option>
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Network System">Network System</option>
                </select>
            </div>
            @if($errors->any())
            <div class="alert-login">
                <ul>
                    @foreach($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
                <script>
                    alert("{{ $errors->first() }}");
                </script>
            @endif
            <button type="submit" class="btn-daftar">Buat Pendaftaran</button>
        </form>
    </div>
@endsection
