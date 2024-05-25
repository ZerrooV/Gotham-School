<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/landing.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="icon" href="assets/images/Logo Only 1.svg" type="image/svg+xml">
    <title>Gotham School</title>
</head>

<body>

    <nav class="navigation">
        <div class="header">
            <a class="logo" href="#">
                <img src="assets/images/logo-secondary.svg" alt="logo">
            </a>
            <div class="navlink">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#fasilitas">Fasilitas</a></li>
                    <li><a href="#alur">Alur Pendaftaran</a></li>
                    <li><a href="#jurusan">Jurusan</a></li>
                    <li><a href="#jalur">Jalur Pendaftaran</a></li>
                    <li><a href="#timeline">Timeline</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <a class="login" href="{{ route('login') }}">Login</a>
            <i class="bx bx-menu" aria-label="menu" id="menu"></i>
        </div>
    </nav>

    <div class="wave">
        <section class="home container" id="home">
            <div class="home-text">
                <h1>PPDB Online<br>
                    <span>Gotham</span> School<br>
                    2024/2025
                </h1>
                <p>
                    Daftarkan dirimu sekarang melalui website ini<br>
                    dan menjadi bagian Gotham School
                </p>
                <div class="btn">
                    <a href="{{ route('login') }}">Daftar Sekarang</a>
                    <i class='bx bx-chevron-right'></i>
                </div>
            </div>
            <img src="assets/images/asset1.svg" alt="nerd" class="home-img">
        </section>
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
            </g>
        </svg>
    </div>

    <section class="about container" id="about">
        <img src="assets/images/asset 2.svg" alt="aset2" id="about-img">
        <div class="about-text">
            <h1>Visi dan Misi Gotham School</h1>
            <p id="headcapt">Menjadi sekolah teknologi yang unggul dan berkualitas<br />
                dalam menanamkan karakter yang berjiwa keadilan.
            </p>
            <p>
                <img src="assets/images/target.svg" alt="target">
                Menyediakan sarana pendidikan di bidang teknologi informasi
            </p>
            <p>
                <img src="assets/images/target.svg" alt="target">
                Menumbuhkan nilai nilai keadilan, kreatifitas dan ketangguhan
            </p>
            <p>
                <img src="assets/images/target.svg" alt="target">
                Memberikan sarana untuk mengembangkan keterampilan dalam bidang teknologi informasi
            </p>
            <p>
                <img src="assets/images/target.svg" alt="target">
                Melatih kemampuan dan kecerdasan dalam memenuhi prinsip keadilan
            </p>
        </div>
    </section>

    <section class="fasilitas container" id="fasilitas">
        <div class="fasilitas-text">
            <p>FASILITAS UNGGUL DI <span>GOTHAM SCHOOL</span></p>
            <h1>ADA FASILITAS APA SAJA?</h1>
        </div>
        <div class="fas-container">
            <div class="fasbox">
                <img src="assets/images/Frame 2.svg" alt="frame">
                <p>Gedung sekolah modern</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/Frame 18.svg" alt="frame">
                <p>Wifi up to 100Gb/s</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/Frame 19.svg" alt="frame">
                <p>Lisensi Microsoft Professional</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/Frame 20.svg" alt="frame">
                <p>Lab Komputer dengan VGA RTX 4090 dan Intel i9</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/Frame 21.svg" alt="frame">
                <p>Cloud Storage gratis untuk siswa</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/Frame 22.svg" alt="frame">
                <p>Lisensi Adobe Student untuk siswa</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/tv-fill 1.svg" alt="frame">
                <p>Smart TV dengan resolusi 4K di setiap kelas</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/bxs-book 1.svg" alt="frame">
                <p>Perpustakaan dengan AI Librarian Tech</p>
            </div>
            <div class="fasbox">
                <img src="assets/images/bx-dumbbell 1.svg" alt="frame">
                <p>Fasilitas Olahraga Lengkap</p>
            </div>
        </div>
    </section>

    <div class="wrappelur">
        <section class="Alur container" id="alur">
            <div class="alur-text">
                <p>ALUR PENDAFTARAN SISWA BARU</p>
                <h1>BAGAIMANA ALUR <span>PENDAFTARANYA?</span></h1>
            </div>
            <div class="list-container">
                <div class="list-box">
                    <i class='bx bxs-down-arrow'></i>
                    <p>Mengisi Formulir Pendaftaran</p>
                </div>
                <div class="list-box">
                    <i class='bx bxs-down-arrow'></i>
                    <p>Mengisi Nilai Raport</p>
                </div>
                <div class="list-box">
                    <i class='bx bxs-down-arrow'></i>
                    <p>Memilih Jurusan</p>
                </div>
                <div class="list-box">
                    <i class='bx bxs-down-arrow'></i>
                    <p>Mendapatkan Akun</p>
                </div>
                <div class="list-box">
                    <i class='bx bxs-down-arrow'></i>
                    <p>Menunggu Pengumuman</p>
                </div>
                <div class="list-box">
                    <i class='bx bxs-down-arrow'></i>
                    <p>Daftar Ulang</p>
                </div>
            </div>
        </section>
    </div>

    <section class="jurusan" id="jurusan">
        <div class="Jurusan container">
            <div class="jurhead">
                <p>KOMPETENSI KEAHLIAN</p>
                <h1>JURUSAN DI <span>GOTHAM SCHOOL</span></h1>
            </div>
            <div class="jurcontent">
                <Img src="assets/images/Frame 14.svg" alt="frame14">
                <div class="jurtext">
                    <h2>Software <span>Engineering</span></h2>
                    <p>
                        Jurusan yang akan mempelajari tentang rekayasa perangkat<br>
                        lunak dekstop ataupun mobile, mulai dari perancangan<br>
                        hingga pengembangan sebuah perangkat lunak yang siap digunakan.
                    </p>
                </div>
            </div>
            <div class="jurcontent">
                <div class="jurtext">
                    <h2>Cyber <span>Security</span></h2>
                    <p>
                        Jurusan yang akan mempelajari tentang rekayasa perangkat<br>
                        lunak dekstop ataupun mobile, mulai dari perancangan hingga<br>
                        pengembangan sebuah perangkat lunak yang siap digunakan
                    </p>
                </div>
                <Img src="assets/images/Frame 15.svg" alt="frame15">
            </div>
            <div class="jurcontent">
                <Img src="assets/images/Frame 16.svg" alt="frame16">
                <div class="jurtext">
                    <h2>Network <span>System</span></h2>
                    <p>
                        Jurusan yang akan mempelajari tentang rekayasa perangkat<br>
                        lunak dekstop ataupun mobile, mulai dari perancangan<br>
                        hingga pengembangan sebuah perangkat lunak yang siap digunakan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="jalur container" id="jalur">
        <div class="jahead">
            <p>JALUR MASUK GOTHAM SCHOOL</p>
            <h1>JALUR <span>PENDAFTARAN</span></h1>
        </div>
        <div class="boxcon">
            <div class="jabox">
                <div class="tenthead">
                    <h3>JALUR <br>
                        REGULER
                    </h3>
                </div>
                <div class="tent">
                    <h2>DIBUKA</h2>
                    <h5>Syarat Pendaftaran :</h5>

                    <div class="tenttext">
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Nilai raport semester 1 s.d 5 <br>
                                <span>(Matematika, B.inggris, B.indo, IPA, PPKN)</span>
                            </p>
                        </div>
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Membayar biaya pendaftaran <br>
                                sebesar <strong id="rp">RP.100.000</strong>
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="daflink">
                        <div class="dafbutt">
                            <p>Daftar</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="jabox">
                <div class="tenthead">
                    <h3>JALUR <br>
                        PRESTASI
                    </h3>
                </div>
                <div class="tent">
                    <h2>DIBUKA</h2>
                    <h5>Syarat Pendaftaran :</h5>

                    <div class="tenttext">
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Piagam atau Sertifikat Juara
                                Lomba (Internasional, Nasional, Kota/Kabupaten)
                            </p>
                        </div>
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Membayar biaya pendaftaran <br>
                                sebesar <strong id="rp">RP.100.000</strong>
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="daflink">
                        <div class="dafbuttop">
                            <p>TUTUP</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="jabox">
                <div class="tenthead">
                    <h3>JALUR <br>
                        KETUA OSIS
                    </h3>
                </div>
                <div class="tent">
                    <h2>DIBUKA</h2>
                    <h5>Syarat Pendaftaran :</h5>

                    <div class="tenttext">
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Lulusan Tahun 2024</p>
                        </div>
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Memiliki Rataan Nilai Matematika, IPA, B.Indo, B.Inggris Selama 5 Semester Sekurangnya 80</p>
                        </div>
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Melampirkan Surat Kepala Sekolah Sebagai Bukti Jabatan Ketua OSIS selama 1 periode</p>
                        </div>
                        <div class="listtext">
                            <i class='bx bx-chevron-right'></i>
                            <p>Membayar biaya pendaftaran <br>
                                sebesar <strong id="rp">RP.100.000</strong>
                            </p>
                        </div>
                    </div>

                    <a href="{{ route('login') }}" class="daflink">
                        <div class="dafbuttop">
                            <p>TUTUP</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="wrappelur">
        <section class="timeline container" id="timeline">
            <div class="timehead">
                <p>JADWAL PENDAFTARAN SISWA BARU</p>
                <h1>TIMELINE <span>PENDAFTARAN</span></h1>
            </div>

            <div class="kontener">
                <div class="kontenkiri1">
                    <div class="kontenkutimeline">
                        <div class="kontenhead1">
                            <h2>Buat Akun</h2>
                        </div>
                        <p>Pembuatan akun akan dimulai dari <strong>1 januari</strong> sampai dengan <strong>30 Mei 2024.</strong></p>
                    </div>
                </div>
                <div class="kontenkanan1">
                    <div class="kontenkutimeline">
                        <div class="kontenhead2">
                            <h2>Pendaftaran</h2>
                        </div>
                        <p>Pendaftaran Gelombang 1 dibuka mulai <strong>1 September</strong> sampai dengan <strong>30 November 2023.</strong></p>
                    </div>
                </div>
                <div class="kontenkiri2">
                    <div class="kontenkutimeline">
                        <div class="kontenhead3">
                            <h2>Seleksi</h2>
                        </div>
                        <p>Pendaftaran Gelombang 1 dibuka mulai <strong>1 September</strong> sampai dengan <strong>30 November 2023.</strong></p>
                    </div>
                </div>
                <div class="kontenkanan2">
                    <div class="kontenkutimeline">
                        <div class="kontenhead4">
                            <h2>Pengumuman</h2>
                        </div>
                        <p>Pendaftaran Gelombang 1 dibuka mulai <strong>1 September</strong> sampai dengan <strong>30 November 2023.</strong></p>
                    </div>
                </div>
                <div class="kontenkiri3">
                    <div class="kontenkutimeline">
                        <div class="kontenhead5">
                            <h2>Sekolah Perdana</h2>
                        </div>
                        <p>Pendaftaran Gelombang 1 dibuka mulai <strong>1 September</strong> sampai dengan <strong>30 November 2023.</strong></p>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <section class="contact container" id="contact">
        <div class="tacthead">
            <p>HUBINGI KAMI</p>
            <h1>CONTACT <span>US</span></h1>
        </div>
        <div class="tacttent">
            <div class="tactwrap">
                <div class="tactlist">
                    <div class="tactgo">
                        <i class='bx bxs-map'></i>
                    </div>
                    <div class="tacttext">
                        <h3>Alamat</h3>
                        <p>Country Road, Arkham Asylum, Gotham City, Metropollis 69699</p>
                    </div>
                </div>
                <div class="tactlist">
                    <div class="tactgo">
                        <i class='bx bxs-envelope'></i>
                    </div>
                    <div class="tacttext">
                        <h3>Email</h3>
                        <p>ppdb@gothamshcool.sch.usa</p>
                    </div>
                </div>
                <div class="tactlist">
                    <div class="tactgo">
                        <i class='bx bxl-whatsapp'></i>
                    </div>
                    <div class="tacttext">
                        <h3>WhatsApp</h3>
                        <p>0852-7689-9767</p>
                    </div>
                </div>
                <div class="tactlist">
                    <div class="tactgo">
                        <i class='bx bxl-instagram-alt'></i>
                    </div>
                    <div class="tacttext">
                        <h3>Instagram</h3>
                        <p>@gothamshcool</p>
                    </div>
                </div>
                <div class="tactlist">
                    <div class="tactgo">
                        <i class='bx bxl-facebook-circle'></i>
                    </div>
                    <div class="tacttext">
                        <h3>facebook</h3>
                        <p>Gotham school</p>
                    </div>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126683.82243214095!2d109.19966959881602!3d-7.141091499999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fef9bf8a033b9%3A0x69654c60fadd4f8b!2sGotham%20city!5e0!3m2!1sen!2sid!4v1711116673520!5m2!1sen!2sid" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade" title="Gotham City Map"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <div class="footext">
            <p><span>#Website ini dibuat oleh kelompok 8 RPL#</span><br>
                This website just an assignment for College no commercial purpose<br>
                Joker is Banned here!</p>
        </div>
        <div class="developer">
            <div class="person">
                <img src="assets/DevImages/dev3.jpg" alt="person">
                <p>FrontEnd</p>
                <h5>RAIHAN MUHAMMAD RISKI RAHMAN</h5>
            </div>
            <div class="person">
                <img src="assets/DevImages/dev2.jpeg" alt="person">
                <p>FrontEnd</p>
                <h5>ZAMACHSYAFI SHIDQI ATHALLAH</h5>
            </div>
            <div class="person">
                <img src="assets/DevImages/dev1.jpeg" alt="person">
                <p>Project Manajer</p>
                <h5>FAUZAN DWI ERYAWAN</h5>
            </div>
            <div class="person">
                <img src="assets/DevImages/dev5.jpeg" alt="person">
                <p>FullStack</p>
                <h5>MUHAMMAD VEKA SYAHPUTRA</h5>
            </div>
            <div class="person">
                <img src="assets/DevImages/dev4.jpeg" alt="person">
                <p>BackEnd</p>
                <h5>AGUS SUTIYANTO</h5>
            </div>
        </div>
    </footer>

    <script src="js/landing.js"></script>
</body>

</html>
