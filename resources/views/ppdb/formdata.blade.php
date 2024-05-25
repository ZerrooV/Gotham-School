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

        <form action="" class="formbox-content">
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
                    <div class="form">
                        <p>Nama Lengkap</p>
                        <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="form">
                        <p>Tanggal Lahir</p>
                        <input type="date" name="tanggal_lahir">
                    </div>
                    <div class="form">
                        <p>Tempat Lahir</p>
                        <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form">
                        <p>Jenis Kelamin</p>
                        <select name="jenis_kelamin">
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form">
                        <p>Alamat</p>
                        <input type="text" name="alamat" placeholder="Masukan Alamat">
                    </div>
                </div>

                <div class="formkanan">
                    <div class="form">
                        <p>NIK</p>
                        <input type="text" name="nik" placeholder="Masukan NIK">
                    </div>
                    <div class="form">
                        <p>Email</p>
                        <input type="text" name="email" placeholder="Masukan Email">
                    </div>
                    <div class="form">
                        <p>No HP / WhatsApp</p>
                        <input type="text" name="nomor_HP" placeholder="Masukan Nomor">
                    </div>
                    <div class="formfoto">
                        <label for="formFile" class="form-label">Foto 3x4</label>
                        <input class="form-control" type="file" id="formFile" name="foto">
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
                <div class="inputNilai">
                    <p>Semester 1</p>
                    <div class="mapel">
                        <div class="input">
                            <label for="indonesia">Bahasa Indonesia</label>
                            <input type="text" name="indonesia" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Bahasa Inggris</label>
                            <input type="text" name="Inggris" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Matematika</label>
                            <input type="text" name="Matematika" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">IPA</label>
                            <input type="text" name="IPA" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">PPKN</label>
                            <input type="text" name="PPKN" id="">
                        </div>
                    </div>
                </div>
                <div class="inputNilai">
                    <p>Semester 2</p>
                    <div class="mapel">
                        <div class="input">
                            <label for="indonesia">Bahasa Indonesia</label>
                            <input type="text" name="indonesia" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Bahasa Inggris</label>
                            <input type="text" name="Inggris" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Matematika</label>
                            <input type="text" name="Matematika" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">IPA</label>
                            <input type="text" name="IPA" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">PPKN</label>
                            <input type="text" name="PPKN" id="">
                        </div>
                    </div>
                </div>
                <div class="inputNilai">
                    <p>Semester 3</p>
                    <div class="mapel">
                        <div class="input">
                            <label for="indonesia">Bahasa Indonesia</label>
                            <input type="text" name="indonesia" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Bahasa Inggris</label>
                            <input type="text" name="Inggris" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Matematika</label>
                            <input type="text" name="Matematika" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">IPA</label>
                            <input type="text" name="IPA" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">PPKN</label>
                            <input type="text" name="PPKN" id="">
                        </div>
                    </div>
                </div>
                <div class="inputNilai">
                    <p>Semester 4</p>
                    <div class="mapel">
                        <div class="input">
                            <label for="indonesia">Bahasa Indonesia</label>
                            <input type="text" name="indonesia" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Bahasa Inggris</label>
                            <input type="text" name="Inggris" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Matematika</label>
                            <input type="text" name="Matematika" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">IPA</label>
                            <input type="text" name="IPA" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">PPKN</label>
                            <input type="text" name="PPKN" id="">
                        </div>
                    </div>
                </div>
                <div class="inputNilai">
                    <p>Semester 5</p>
                    <div class="mapel">
                        <div class="input">
                            <label for="indonesia">Bahasa Indonesia</label>
                            <input type="text" name="indonesia" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Bahasa Inggris</label>
                            <input type="text" name="Inggris" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">Matematika</label>
                            <input type="text" name="Matematika" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">IPA</label>
                            <input type="text" name="IPA" id="">
                        </div>
                        <div class="input">
                            <label for="indonesia">PPKN</label>
                            <input type="text" name="PPKN" id="">
                        </div>
                    </div>
                </div>
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
            <button type="submit" class="btn-daftar">Buat Pendaftaran</button>
        </form>
    </div>
@endsection
