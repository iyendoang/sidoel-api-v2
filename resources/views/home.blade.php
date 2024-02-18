<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href={{ asset('images/logo-doel.png') }} />
    <link rel="stylesheet" href={{  asset('css/style.css') }} />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script defer src={{ asset('js/app.js') }}></script>
    <title>SiDoel - APP</title>
</head>

<body>
    <div class="preloader">
        <span class="preloader__circle"></span>
        <span class="preloader__circle preloader__circle--two"></span>
    </div>

    <a href="#" class="go-top" aria-label="Go back to top"><i class="fa-solid fa-chevron-up"></i></a>

    <nav>
        <a href="." class="nav__logo">
            <img src={{ asset('images/logo2.png') }} height="60px" alt="Logo | SiDoel" class="nav__logo-white" />
            <img src={{ asset('images/logo1.png') }} height="60px" alt="Logo | SiDoel" class="nav__logo-orange" />
        </a>
        <ul class="nav__links">
            <li><a href="#header" class="header-link">Home</a></li>
            <li><a href="#features" class="features-link">Features</a></li>
            <li><a href="#overview" class="overview-link">Overview</a></li>
            <li><a href="#pricing" class="pricing-link">Pricing</a></li>
            <li><a href="#team" class="team-link">Team</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="nav__menu">
            <div class="hamburger"></div>
        </div>
        <a href="http://demo.sidoel.id" target="_blank" class="nav__cta">DEMO-APP</a>
    </nav>

    <header id="header" class="nav-section">
        <section class="header__text">
            <h1 class="fadeFromLeft">Mendukung Digitalisasi Madrasah</h1>
            <p class="fadeFromLeft">
                Aplikasi pendataan siswa (login siswa), eksport excel lengkap, cetak
                8355, akun bendahara, akun petugas tabungan, membuat surat keluar
                dengan mudah sekaligus pengarsipannya, surat masuk, buku induk, kartu
                pelajar, administrasi ujian, dan lain-lain (link demo: demo.sidoel.id
                | user: sidoel | password: sidoel).
            </p>
            <div class="header__text-link fadeFromLeft">
                <a href="https://t.me/+l5qDZHhejw5hNGI9"><i class="fa-brands fa-telegram"></i><span>Telegram</span></a>
                <a href="https://www.youtube.com/channel/UCm90PYUhEj7WO-BmklAJq7A"><i class="fa-brands fa-youtube"></i><span>Youtube</span></a>
            </div>
        </section>
        <div class="header__img">
            <img src={{ asset('images/phone.png') }} alt="SiDoel mobile app's UI" class="fadeFromRight" />
        </div>
    </header>

    <div class="features nav-section" id="features">
        <section class="features__text">
            <h3 class="fadeFromTop">Features</h3>
            <h2 class="fadeFromTop">
                Beragam Akses / Role untuk Stakeholder Madrasah
            </h2>
            <p class="fadeFromTop">
                Akun Admin / Operator, Akun Bendahara, Akun Petugas SPP, Akun Guru,
                dan Akun Siswa.
            </p>
        </section>
        <div class="features__grid">
            <section class="feature fadeFromTop">
                <div class="feature__icon">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </div>
                <h3>Akun Admin</h3>
                <p>
                    Input data - upload kelembagaan, Edit Data Siswa/Guru, Eksport
                    Excel, Cetak 8355, Surat Keterangan Aktif Siswa, Surat Mutasi
                    Masuk/Keluar, Surat Penerimaan Siswa Baru, Buku Induk, Kartu
                    Pelajar, dan lain-lain.
                </p>
            </section>
            <section class="feature fadeFromTop">
                <div class="feature__icon">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <h3>Akun Bendahara</h3>
                <p>
                    Setting dan Input biaya bulanan (SPP) maupun biaya non-bulanan
                    seperti biaya PPDB, daftar ulang, buku LKS dan lainnya sesuai
                    kebutuhan. Input pemasukan lain-lain dan input pengeluaran. Cek
                    saldo harian maupun saldo keseluruhan, rekap keuangan sesuai rentang
                    tanggal yang diinginkan.
                </p>
            </section>
            <section class="feature fadeFromTop">
                <div class="feature__icon">
                    <i class="fa-solid fa-rotate"></i>
                </div>
                <h3>Akun Petugas Tabungan</h3>
                <p>
                    Input tabungan siswa, penarikan tabungan siswa, rekap tabungan
                    siswa, cek saldo harian.
                </p>
            </section>
            <section class="feature fadeFromTop">
                <div class="feature__icon">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <h3>Akun Guru</h3>
                <p>
                    Data Pendidikan, Riawayat Kepegawaian, Sertifikasi, Data Keluarga,
                    Data Tunjangan, Data Mengajar maupun Tugas Tambahan, Upload
                    Dokumen-Dokumen.
                </p>
            </section>
            <section class="feature fadeFromTop">
                <div class="feature__icon">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <h3>Akun Siswa</h3>
                <p>
                    Data Aktivitas Belajar, Imunisasi, Isian Sesuai Akta Lahir, Kartu
                    Keluarga, Ijazah Jenjang Sebelumnya, Domisili, Data Bantuan
                    (KJP-KIP), Upload Dokumen Lengkap.
                </p>
            </section>
            <section class="feature fadeFromTop">
                <div class="feature__icon">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <h3>Dashboard</h3>
                <p>
                    Dashboard admin yang lengkap dengan rincian jumlah siswa dan guru
                    per tahun pelajaran serta grafik jumlah siswa per semester / tahun
                    pelajaran.
                </p>
            </section>
        </div>
    </div>

    <div class="overview nav-section" id="overview">
        <div class="overview-flex fadeFromTop">
            <section class="overview-flex__text">
                <div class="overview-flex__text-icon">
                    <i class="fa-solid fa-download"></i>
                </div>
                <h2>Pengguna Aplikasi Sidoel</h2>
                <p>
                    Sejak launching 7 Juli 2023 sampai saat ini sudah berjumlah 31
                    Madrasah dengan rincian : 10 Madrasah Ibtidaiyyah, 20 Madrasah
                    Tsanawiyah, 1 Madrasah Aliyah
                </p>
                <a href="http://demo.sidoel.id" class="overview-flex__text-link">Get Started</a>
            </section>
            <div class="overview-flex__img">
                <img src={{ asset('images/app-ss1.png') }} alt="" />
            </div>
        </div>
        <div class="overview-flex overview-flex-two fadeFromTop">
            <section class="overview-flex__text">
                <div class="overview-flex__text-icon">
                    <i class="fa-solid fa-table-list"></i>
                </div>
                <h2>Update Terus</h2>
                <p>
                    Aplikasi akan terus diupdate oleh developer untuk mengakomodir saran
                    dari operator madrasah.
                </p>
                <a href="http://demo.sidoel.id" class="overview-flex__text-link">Get Started</a>
            </section>
            <div class="overview-flex__img">
                <img src={{ asset('images/app-ss2.png') }} alt="" />
            </div>
        </div>
        <!-- <section class="overview__facts">
            <h2 class="fadeFromTop">Trusted by developers from over 80 planets</h2>
            <p class="fadeFromTop">There are many variations of passages of Lorem Ipsum available, but the majority.</p>
            <div class="fact-flex fadeFromTop">
                <section class="fact-flex__column">
                    <h3>100%</h3>
                    <p>Satisfaction</p>
                </section>
                <section class="fact-flex__column">
                    <h3>120K</h3>
                    <p>Happy Users</p>
                </section>
                <section class="fact-flex__column">
                    <h3>125k+</h3>
                    <p>Downloads</p>
                </section>
            </div>
        </section> -->
    </div>

    <div class="pricing nav-section" id="pricing">
        <section class="pricing__text">
            <h3 class="fadeFromTop">Pricing</h3>
            <h2 class="fadeFromTop">Pricing Plan</h2>
            <!-- <p class="fadeFromTop">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p> -->
        </section>
        <div class="pricing__grid">
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 1</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>450 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa kurang dari 100.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                    <!-- <li><i class="fa-regular fa-circle-check"></i><span>Morbi leo risus.</span></li>
                    <li><i class="fa-regular fa-circle-check"></i><span>Potenti felis, in cras ligula.</span></li> -->
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 2</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>600 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa 101 s.d 200.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 3</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>750 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa 201 s.d 300.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 4</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>900 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa 301 s.d 400.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 5</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>1.050 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa 401 s.d 500.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 6</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>1.200 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa 501 s.d 600.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">BASIC 7</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>1.350 K</h2>
                    <span>/ semester</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk siswa lebih dari 600.</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free Hosting RDM (Raport Digital Madrasah).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Free App Update.</span>
                    </li>
                </ul>
            </div>
            <div class="price-menu fadeFromTop">
                <h4 class="price-menu__type">Hosting Khusus CBT</h4>
                <!-- <p>All the basics for starting a new business</p> -->
                <div class="price-menu__price">
                    <h2>5 K</h2>
                    <span>/ Siswa</span>
                </div>
                <a href="contact.html">
                    <button class="price-menu__btn" type="button">
                        Buy App
                    </button>
                </a>
                <hr />
                <h4 class="price-menu__included">What's included</h4>
                <ul class="price-menu__list">
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>Untuk pelaksanaan 1 event ujian ( 4 Minggu ).</span>
                    </li>
                    <li>
                        <i class="fa-regular fa-circle-check"></i><span>All Brand.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="team nav-section" id="team">
        <section class="team__text">
            <h3 class="fadeFromTop">Team</h3>
            <h2 class="fadeFromTop">Bergabung Dengan Tim Kami</h2>
            <!-- <p class="fadeFromTop">
          There are many variations of passages of Lorem Ipsum available, but
          the majority have suffered alteration in some form.
        </p> -->
        </section>
        <div class="team__grid">
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/toni.jpg') }} alt="Achmad Fathoni's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Achmad Fathoni</h3>
                        <h5>Admin</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/iyen.jpg') }} alt="Ahmad Junaidi's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Ahmad Junaidi</h3>
                        <h5>Developer</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/doel.jpg') }} alt="Abdullah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Abdullah</h3>
                        <h5>Marketing</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/dirja.jpg') }} alt="Dirza Fatah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Dirza Fatah</h3>
                        <h5>Team Gesit</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/kidaus.jpg') }} alt="Dirza Fatah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Ki Daus</h3>
                        <h5>Kepala Suku</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/fahmi.jpg') }} alt="Dirza Fatah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Ahmad Fahmi</h3>
                        <h5>Data Centre</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/ido.jpg') }} alt="Dirza Fatah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Fathur Ridho</h3>
                        <h5>Penjaga Server</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/imam.jpg') }} alt="Dirza Fatah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Imam Waliyudin</h3>
                        <h5>Coffe Maker</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="stuff fadeFromTop">
                <div class="stuff__img">
                    <img src={{ asset('images/iconic/ibnu.jpg') }} alt="Dirza Fatah's portrait" />
                </div>
                <div class="stuff__info">
                    <section class="stuff__info--name">
                        <h3>Ibnu Ruslan</h3>
                        <h5>Editor</h5>
                    </section>
                    <div class="stuff__info--links">
                        <a href="#" aria-label="twitter"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" aria-label="linkedin"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="testimonial">
      <img
        src={{ asset('images/testi-patern.svg') }} 
        alt=""
        class="testimonial__pattern testimonial__pattern--top"
      />
      <img
        src={{ asset('images/testi-patern.svg') }} 
        alt=""
        class="testimonial__pattern testimonial__pattern--bottom"
      />
      <div class="swiper1">
        <div class="swiper-wrapper">
          <div class="slide swiper-slide">
            <img src={{ asset('images/brand1.svg') }}  alt="" />
            <q
              >It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout. The
              point of using Lorem Ipsum is that it has</q
            >
            <div class="slide__profile">
              <img src={{ asset('images/testi1.jpg') }}  alt="" />
              <h4>Yaman</h4>
              <span>CEO - AF</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src={{ asset('images/brand2.svg') }}  alt="" />
            <q
              >It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout. The
              point of using Lorem Ipsum is that it has</q
            >
            <div class="slide__profile">
              <img src={{ asset('images/comment1.jpg') }}  alt="" />
              <h4>Imam Waliyudin</h4>
              <span>CEO - NH</span>
            </div>
          </div>
          <div class="slide swiper-slide">
            <img src={{ asset('images/brand3.svg') }}  alt="" />
            <q
              >It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout. The
              point of using Lorem Ipsum is that it has</q
            >
            <div class="slide__profile">
              <img src={{ asset('images/testi3.jpg') }}  alt="" />
              <h4>Juni</h4>
              <span>CEO - RJ</span>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div> -->

    <section class="install">
        <h2 class="fadeFromTop">Install SiDoel and Start Using</h2>
        <p class="fadeFromTop">
            Semua pekerjaan Operator dapat anda kerjakan kapanpun dan dimanapun.
        </p>
        <div class="install__link fadeFromTop">
            <a href="https://t.me/+l5qDZHhejw5hNGI9"><i class="fa-brands fa-telegram"></i><span>Telegram</span></a>
            <a href="https://www.youtube.com/channel/UCm90PYUhEj7WO-BmklAJq7A"><i class="fa-brands fa-youtube"></i><span>Youtube</span></a>
        </div>
    </section>

    <!-- <div class="faq">
      <section class="faq__text">
        <h3 class="fadeFromTop">FAQ</h3>
        <h2 class="fadeFromTop">Frequently Asked Questions</h2>
        <p class="fadeFromTop">
          There are many variations of passages of Lorem Ipsum available, but
          the majority have suffered alteration in some form.
        </p>
      </section>
      <div class="faq__accordion">
        <details>
          <summary>
            <div class="question">
              <div class="question__count">01</div>
              <p>How do I contact customer services?</p>
            </div>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </summary>
          <p class="answer">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
            consectetur sit amet ante nec vulputate.Anim pariatur cliche
            reprehenderit, enim eiusmod high life accusamus terry richardson ad
            squid. 3 wolf moon officia aute.<br /><br />
            non cupidatat skateboard dolor brunch. Foosd truck quinoa nesciunt
            laborum eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on
            it squid single-origin coffee nulla assumenda shoreditch et. Nihil
            anim ke ffiyeh helvetica, craft beer labore wes anderson cred
            nesciunt sapiente ea proident.
          </p>
        </details>
        <details>
          <summary>
            <div class="question">
              <div class="question__count">02</div>
              <p>Material types can you work with?</p>
            </div>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </summary>
          <p class="answer">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
            terry richardson ad squid. 3 wolf moon officia aute. non cupidatat
            skateboard dolor brunch. Foosd truck quinoa nesciunt laborum
            eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
            ke ffiyeh helvetica, craft beer labore wes anderson cred nesciunt
            sapiente ea proident.<br /><br />Lorem ipsum dolor sit amet,
            consectetur adipiscing elit. Aliquam consectetur sit amet ante nec
            vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
            erat mattis lorem, lacinia lacinia dui enim at eros. Pellentesque ut
            gravida augue. Duis ac dictum tellus
          </p>
        </details>
        <details>
          <summary>
            <div class="question">
              <div class="question__count">03</div>
              <p>Can I have multiple activities in a single feature?</p>
            </div>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </summary>
          <p class="answer">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
            expedita, repellendus est nemo cum quibusdam optio, voluptate hic a
            tempora facere, nihil non itaque alias similique quas quam odit
            consequatur.
          </p>
        </details>
        <details>
          <summary>
            <div class="question">
              <div class="question__count">04</div>
              <p>How clients can consult through online?</p>
            </div>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </summary>
          <p class="answer">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
            terry richardson ad squid. 3 wolf moon officia aute. non cupidatat
            skateboard dolor brunch. Foosd truck quinoa nesciunt laborum
            eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et.<br /><br />Lorem
            ipsum dolor sit amet, consectetur adipisicing elit. Provident iure
            ab nisi, magnam vitae. Laboriosam laborum suscipit recusandae
            officia laudantium, consectetur adipisci voluptates doloremque
            quisquam. Id rerum iusto reprehenderit assumenda!
          </p>
        </details>
        <details>
          <summary>
            <div class="question">
              <div class="question__count">05</div>
              <p>Can I share resources between features?</p>
            </div>
            <i class="fa-solid fa-plus"></i>
            <i class="fa-solid fa-minus"></i>
          </summary>
          <p class="answer">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
            terry richardson ad squid. 3 wolf moon officia aute. non cupidatat
            skateboard dolor brunch. Foosd truck quinoa nesciunt laborum
            eiusmod. Brunch 3 wolf moon tempor, sunt alqua put a bird on it
            squid single-origin coffee nulla assumenda shoreditch et.
          </p>
        </details>
      </div>
    </div> -->

    <!-- <div class="blogs nav-section" id="blog">
      <section class="blogs__text">
        <h3 class="fadeFromTop">Blogs</h3>
        <h2 class="fadeFromTop">Our Latest News</h2>
        <p class="fadeFromTop">
          There are many variations of passages of Lorem Ipsum available, but
          the majority have suffered alteration in some form.
        </p>
      </section>
      <div class="blogs__grid">
        <a href="blog.html" class="blog fadeFromTop" aria-label="blog | SiDoel">
          <div class="blog__img">
            <img src={{ asset('images/blog-1.jpg') }}  alt="blog" />
          </div>
          <div class="blog__text">
            <h5>Blog</h5>
            <h4>Boost your conversion rate</h4>
            <p>
              Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
              eirmod tempor ividunt dolore magna.
            </p>
            <div class="blog__text-profile">
              <img src={{ asset('images/comment1.jpg') }}  alt="Roel Aufderhar" />
              <div>
                <h5>Roel Aufderhar</h5>
                <p>Mar 15,2023<span>* </span>5 min read</p>
              </div>
            </div>
          </div>
        </a>
        <a href="blog.html" class="blog fadeFromTop" aria-label="blog | SiDoel">
          <div class="blog__img">
            <img src={{ asset('images/blog-2.jpg') }}  alt="blog" />
          </div>
          <div class="blog__text">
            <h5>Video</h5>
            <h4>How to use search engine</h4>
            <p>
              Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
              eirmod tempor ividunt dolore magna.
            </p>
            <div class="blog__text-profile">
              <img src={{ asset('images/comment2.jpg') }}  alt="Jenifer Zuliya" />
              <div>
                <h5>Jenifer Zuliya</h5>
                <p>Feb 10,2023<span>* </span>7 min read</p>
              </div>
            </div>
          </div>
        </a>
        <a href="blog.html" class="blog fadeFromTop" aria-label="blog | SiDoel">
          <div class="blog__img">
            <img src={{ asset('images/blog-3.jpg') }}  alt="blog" />
          </div>
          <div class="blog__text">
            <h5>Marketing</h5>
            <h4>Awesome ways to boost sales</h4>
            <p>
              Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
              eirmod tempor ividunt dolore magna.
            </p>
            <div class="blog__text-profile">
              <img src={{ asset('images/comment3.jpg') }}  alt="Roel Aufderhar" />
              <div>
                <h5>Roel Aufderhar</h5>
                <p>Jan 20,2023<span>* </span>6 min read</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div> -->

    <!-- <div class="clients">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src={{ asset('images/graygrids-logo.svg') }}  alt="Graygrids" />
          </div>
          <div class="swiper-slide">
            <img src={{ asset('images/lineicons-logo.svg') }}  alt="Lineicons" />
          </div>
          <div class="swiper-slide">
            <img src={{ asset('images/pagebulb-logo.svg') }}  alt="Pagebulb" />
          </div>
          <div class="swiper-slide">
            <img src={{ asset('images/graygrids-logo.svg') }}  alt="Graygrids" />
          </div>
          <div class="swiper-slide">
            <img src={{ asset('images/lineicons-logo.svg') }}  alt="Lineicons" />
          </div>
        </div>
      </div>
    </div> -->

    <footer>
        <div class="footer__top">
            <div class="footer__intro">
                <a href="#"><img src={{ asset('images/logo2.png') }} alt="Home | SiDoel" class="footer__intro--logo" /></a>
                <p>
                    Follow Us :
                </p>
                <ul class="footer__intro--media-links">
                    <li>
                        <a href="https://t.me/+l5qDZHhejw5hNGI9" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a>
                    </li>
                    <li>
                        <a href="https://wa.me/6285692030505" aria-label="Whats Up"><i class="fa-brands fa-whatsapp"></i></a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UCm90PYUhEj7WO-BmklAJq7A" aria-label="Youtube"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                </ul>
            </div>

            <div class="footer__grids">
                <section class="footer__grid">
                    <h3>Introduction</h3>
                    <ul class="footer__grid--list">
                        <li>
                            <iframe src="https://www.youtube.com/embed/_A0ci9eDfZg?si=XChDv4DDnQ4wsc7q" allowfullscreen allow="autoplay"></iframe>
                        </li>
                    </ul>
                </section>
                <section class="footer__grid">
                    <h3>Yuk Pake Sidoel</h3>
                    <ul class="footer__grid--list">
                        <li>
                            <iframe src="https://www.youtube.com/embed/r-mhq8Tnx84" allowfullscreen allow="autoplay"></iframe>
                        </li>
                    </ul>
                </section>
                <section class="footer__grid">
                    <h3>Tutorial</h3>
                    <ul class="footer__grid--list">
                        <li>
                            <iframe src="https://www.youtube.com/embed/WyYGfI0xq8E" allowfullscreen allow="autoplay"></iframe>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>

</html>
