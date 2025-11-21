<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PP. ITTIHADUT THOLIBIN | Beranda</title>

  <!-- BOOTSTRAP -->
  <link href="Assets/Style/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="Assets/Style/Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
    :root {
      --hijau: #065f46;
      --emas: #e7b022;
      --gelap: #0f172a;
      --abu: #f8fafc;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
      scroll-behavior: smooth;
    }

    /* NAVBAR */
    .navbar-custom {
      padding: 15px 0;
      transition: 0.3s;
      background: transparent;
    }
    /* NOTE: tambahkan !important agar tidak tertimpa aturan lain */
    .navbar-custom.scrolled {
      background: #fff !important;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .navbar-custom.scrolled .navbar-brand {
      color: #000 !important;
    }
    .nav-link { color: #fff !important; font-weight: 500; margin-left: 20px; }
    .navbar-custom.scrolled .nav-link { color: #000 !important; }

    /* HERO SLIDER */
    .hero {
      height: 100vh;
      background-size: cover;
      background-position: center;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: #fff;
      transition: background-image 1.2s ease-in-out;
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.55);
    }
    .hero-content { position: relative; z-index: 2; }
    .hero h1 { font-size: 3.6rem; font-weight: 700; }
    .hero p { font-size: 1.2rem; }
    .btn-emas {
      background: var(--emas);
      border-radius: 30px;
      font-weight: 600;
      padding: 12px 28px;
    }

    /* SECTION TITLE */
    section h2 {
      font-weight: 700;
      color: var(--hijau);
    }
    section hr {
      width: 80px;
      height: 3px;
      margin: 10px auto 30px;
      background: var(--emas);
      border: none;
    }

    /* INFO SECTION */
    .info-card {
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      transition: 0.3s;
    }
    .info-card:hover {
      transform: translateY(-5px);
    }

    /* FOOTER */
    footer {
      background: var(--gelap);
      color: #ddd;
      padding: 50px 0;
    }
    footer h5 { color: #fff; font-weight: 600; }
    footer a { color: #ccc; text-decoration: none; }
    footer a:hover { color: var(--emas); }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="#">
      <img src="Assets/IMG/logoitb.png" alt="Logo" style="height:40px; margin-right:10px;">
      PONPES ITTIHADUT THOLIBIN
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navBar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
        <li class="nav-item"><a class="nav-link" href="pendaftaran.php">Pendaftaran</a></li>
        <li class="nav-item"><a class="nav-link" href="seputar.php">Seputar MTS</a></li>
        <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="hubungi.php">Hubungi</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO SLIDER -->
<section class="hero" id="beranda">
  <div class="hero-content">
    <h1>PP. ITTIHADUT THOLIBIN</h1>
    <p>Mencetak Generasi Islami, Berilmu dan Berkarakter</p>
    <a href="#pendaftaran" class="btn btn-emas mt-3">Daftar Sekarang</a>
  </div>
</section>

<script>
  const hero = document.querySelector('.hero');
  const slider = [
    'Assets/IMG/banner1.jpg',
    'Assets/IMG/benner2.jpg',
    'Assets/IMG/benner3.jpg'
  ];
  let idx = 0;
  function slide() {
    hero.style.backgroundImage = `url('${slider[idx]}')`;
    idx = (idx + 1) % slider.length;
  }
  slide();
  setInterval(slide, 4000);

  // NAVBAR SCROLL - gunakan add/remove class 'scrolled' agar sesuai CSS
  window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar-custom');
    if (!navbar) return;
    if (window.scrollY > 50) {
      if (!navbar.classList.contains('scrolled')) navbar.classList.add('scrolled');
    } else {
      if (navbar.classList.contains('scrolled')) navbar.classList.remove('scrolled');
    }
  });

  // juga jalankan sekali saat halaman load (jika posisi awal sudah di bawah)
  window.addEventListener('load', function () {
    const navbar = document.querySelector('.navbar-custom');
    if (!navbar) return;
    if (window.scrollY > 50) navbar.classList.add('scrolled');
  });
</script>

<!-- PROFIL -->
<section id="profil" class="py-5">
  <div class="container text-center">
    <h2>Profil Pesantren</h2>
    <hr>
    <div class="row mt-4 align-items-center">
      <div class="col-md-6"><img src="Assets/IMG/gpondok.jpg" class="img-fluid rounded" alt="Sekolah"></div>
      <div class="col-md-6 text-start">
    <p style="text-align: justify;">
        Pondok Pesantren Ittihadut Tholibin merupakan lembaga pendidikan Islam yang didirikan oleh 
        Dr. KH. Ikhwan Qomary M.Ag dan Nyai Hj. Umi Fatma S.H., Alhdz pada tahun 1988. Pada awal berdirinya,
        pondok ini hanya digunakan sebagai tempat mengaji dan belum memiliki bangunan asrama santri. 
        Karena belum ada tempat tinggal khusus, kegiatan mengaji masih bergabung dengan Pondok Pesantren 
        Tahfidzul Qur’an Al-Asya’ariyah. Pondok ini juga turut mendampingi proses berdirinya IIQ (UNSIQ).
    </p>

    <p style="text-align: justify;">
        Pada tahun 1990, Pondok Pesantren Ittihadut Tholibin membangun gedung pertamanya yang terdiri 
        dari tiga kamar dan satu mushola, yang kini digunakan sebagai asrama putri dan mushola putri. 
        Pada tahun 1995 dibangun dua kamar di bawah ndalem serta perpustakaan di bagian atasnya. 
        Selanjutnya, dibangun satu gedung dua lantai dengan tiga kamar. 
        Pada tahun 2004–2005 dibangun gedung empat lantai untuk asrama putra. 
        Tahun 2013–2014 dibangun gedung tiga lantai, dan pada tahun 2017–2018 dibangun gedung empat lantai 
        tambahan sehingga kini terdapat tiga gedung asrama putra. 
        Pembangunan terakhir dilakukan pada tahun 2021 berupa gedung dua lantai untuk asrama putri.
    </p>

    <p style="text-align: justify;">
        Nama “Ittihadut Tholibin” memiliki arti “Persatuan para pencari ilmu”. 
        Nama tersebut dipilih karena pondok ini menjadi wadah bagi santri dari berbagai tingkatan pendidikan 
        untuk bersama-sama menuntut ilmu dalam suasana persatuan dan kebersamaan.
    </p>
</div>

    </div>
  </div>
</section>

<!-- PENDAFTARAN -->
<section id="pendaftaran" class="py-5 bg-light">
  <div class="container text-center">
    <h2>Pendaftaran Santri Baru</h2>
    <hr>

    <p class="mb-4" style="max-width: 700px; margin: auto; text-align: justify;">
      Penerimaan Santri Baru Pondok Pesantren Ittihadut Tholibin dibuka untuk jenjang Madrasah Tsanawiyah (MTs). 
      Pendaftaran dilakukan secara online maupun datang langsung ke kantor panitia. 
      Informasi lengkap mengenai syarat, alur pendaftaran, biaya pendidikan, serta jadwal seleksi dapat diakses melalui halaman khusus pendaftaran.
    </p>

    <div class="row mt-4 justify-content-center">
      <div class="col-md-4">
        <div class="info-card">
          <i class="bi bi-file-earmark-text fs-1 text-success"></i>
          <h5 class="fw-bold mt-2">Syarat Pendaftaran</h5>
          <p>Fotokopi KK, Akta, serta pas foto.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="info-card">
          <i class="bi bi-clipboard-check fs-1 text-primary"></i>
          <h5 class="fw-bold mt-2">Alur Pendaftaran</h5>
          <p>Isi formulir, verifikasi data, pembayaran, dan Pemberangkatan Santri.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="info-card">
          <i class="bi bi-calendar-event fs-1 text-warning"></i>
          <h5 class="fw-bold mt-2">Jadwal Pendaftaran</h5>
          <p>Pendaftaran dibuka setiap tahun menjelang tahun ajaran baru.</p>
        </div>
      </div>
    </div>

    <a href="pendaftaran.php" class="btn btn-emas mt-4">Lihat Informasi Lengkap</a>
  </div>
</section>


<!-- SEPUTAR MTS -->
<section id="seputar" class="py-5">
  <div class="container text-center">
    <h2>Seputar MTS</h2>
    <hr>

    <p style="max-width: 750px; margin: auto; text-align: justify;">
      Madrasah Tsanawiyah (MTS) di bawah Pondok Pesantren Ittihadut Tholibin mengintegrasikan pendidikan umum 
      dan keislaman secara seimbang. Pembelajaran dirancang agar santri tidak hanya unggul secara akademik, 
      tetapi juga memiliki karakter islami, kedisiplinan, serta keterampilan hidup yang kuat.
    </p>

    <div class="row mt-5 g-4">
      <div class="col-md-4">
        <div class="info-card">
          <i class="bi bi-moon-stars fs-1 text-primary"></i>
          <h5 class="fw-bold mt-3">Kegiatan Harian</h5>
          <p>
            Kegiatan santri dimulai sejak dini, mulai dari sholat berjamaah, pembelajaran, hingga program 
            penguatan karakter. Semua berjalan terjadwal dan terarah.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="info-card">
          <i class="bi bi-award fs-1 text-success"></i>
          <h5 class="fw-bold mt-3">Program Unggulan</h5>
          <p>
            Program Tahfidz, pembinaan akademik, serta kegiatan ekstrakurikuler untuk 
            mengembangkan potensi dan bakat santri.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="info-card">
          <i class="bi bi-trophy fs-1 text-warning"></i>
          <h5 class="mt-3 fw-bold">Prestasi Santri</h5>
          <p>
            Santri berhasil meraih prestasi dalam bidang akademik, tahfidz, keagamaan, dan berbagai lomba 
            tingkat daerah hingga nasional.
          </p>
        </div>
      </div>
    </div>

    <a href="seputar.php" class="btn btn-emas mt-4">Lihat Selengkapnya</a>
  </div>
</section>


<!-- GALERI -->
<section id="galeri" class="py-5 bg-light">
  <div class="container text-center">
    <h2>Galeri Kegiatan</h2>
    <hr>

    <div class="row g-4 mt-4" id="galeriContainer"></div>
  </div>
</section>

<style>
  .galeri-card {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
  }

  .galeri-card img {
    width: 100%;
    height: 230px;
    object-fit: cover;
    transition: transform .4s ease;
  }

  .galeri-card:hover img {
    transform: scale(1.1);
  }

  .galeri-title {
    position: absolute;
    bottom: 0;
    width: 100%;
    padding: 8px 10px;
    background: rgba(0,0,0,0.55);
    color: #fff;
    font-size: 1rem;
    font-weight: 600;
    text-align: center;
    backdrop-filter: blur(4px);
  }
</style>

<script>
  // Daftar gambar + judul (bisa Anda tambah sendiri)
  const galeriData = [
    { img: "Assets/IMG/galeri1.jpg", title: "Kegiatan Ziaroh Akbar" },
    { img: "Assets/IMG/galeri2.jpg", title: "Kegiatan HKQ Ke-16" },
    { img: "Assets/IMG/galeri3.jpg", title: "Kegiatan Acara Santri Baru" },
    { img: "Assets/IMG/galeri4.jpg", title: "Kegiatan Sima'an" },
  ];

  const galeriContainer = document.getElementById("galeriContainer");

  galeriData.forEach(data => {
    galeriContainer.innerHTML += `
      <div class="col-md-3 col-sm-6">
        <div class="galeri-card">
          <img src="${data.img}" alt="${data.title}">
          <div class="galeri-title">${data.title}</div>
        </div>
      </div>
    `;
  });
</script>


<!-- HUBUNGI -->
<section id="hubungi" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center">Hubungi Kami</h2>
    <hr>

    <div class="row mt-4">
      <!-- FORM KONTAK -->
      <div class="col-md-6">
        <div class="p-4 shadow-sm rounded bg-white">
          <h5 class="mb-3 fw-bold text-success">Formulir Kontak</h5>

          <form>
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="Masukkan nama Anda">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Masukkan email Anda">
            </div>

            <div class="mb-3">
              <label class="form-label">Pesan</label>
              <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda"></textarea>
            </div>

            <button class="btn btn-emas w-100">Kirim Pesan</button>
          </form>
        </div>
      </div>

      <!-- GOOGLE MAPS -->
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="rounded shadow-sm overflow-hidden">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2575727036947!2d109.90010757357219!3d-7.324939672032124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b00520484e9%3A0x4ef040a2373772c1!2sPondok%20Pesantren%20Ittihadut%20Tholibin!5e0!3m2!1sid!2sid!4v1763731481011!5m2!1sid!2sid" 
            width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- FOOTER -->
<footer>
<div class="container py-4">
<div class="row">


<!-- Identitas -->
<div class="col-md-4 mb-4">
<h5 class="fw-bold">PP. Ittihadut Tholibin</h5>
<p>RT.2/RW.5, kradenan, Kalibeber, Kec. Mojotengah,<br>Kabupaten Wonosobo, Jawa Tengah 56351</p>
</div>


<!-- Link Cepat -->
<div class="col-md-4 mb-4">
<h5 class="fw-bold">Link Cepat</h5>
<ul class="list-unstyled">
<li><a href="pendaftaran.php">Pendaftaran</a></li>
<li><a href="seputar.php">Seputar MTS</a></li>
<li><a href="hubungi.php">Hubungi Kami</a></li>
</ul>
</div>


<!-- Sosial Media -->
<div class="col-md-4 mb-4">
<h5 class="fw-bold">Media Sosial</h5>
<a href="https://wa.me/6282241186388" class="d-block mb-2"><i class="bi bi-whatsapp"></i> WhatsApp</a>
<a href="https://www.instagram.com/ponpes_ittihadut_tholibin?igsh=d3llbTBxdzZzdWNm" class="d-block mb-2"><i class="bi bi-instagram"></i> Instagram</a>
<a href="mailto:info@ponpesittihaduttholibin.com" class="d-block mb-2"><i class="bi bi-envelope-fill"></i> Email</a>
<a href="https://youtube.com/@ittihaduttholibin7931?si=sqPslEjSlKg5Lk9j" class="d-block"><i class="bi bi-youtube"></i> YouTube</a>
</div>


</div>


<div class="text-center mt-3 pt-3 border-top">
<p class="mb-0">© 2025 PP. Ittihadut Tholibin | Tim IT Markas Media</p>
</div>
</div>
</footer>
