<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil | PP. Ittihadut Tholibin</title>

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
    }

    /* ================= NAVBAR ================= */
    .navbar-custom {
      padding: 15px 0;
      transition: 0.3s;
      background: transparent !important;
      position: fixed;
      width: 100%;
      z-index: 9999;
    }

    .navbar-custom.scrolled {
      background: #fff !important;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .navbar-brand { 
      color: #fff !important; 
      font-weight: 700; 
    }
    .navbar-custom.scrolled .navbar-brand {
      color: #000 !important;
    }

    .nav-link { 
      color: #fff !important; 
      font-weight: 500; 
      margin-left: 20px; 
    }
    .navbar-custom.scrolled .nav-link { 
      color: #000 !important; 
    }

    .navbar-toggler { border-color: #fff !important; }
    .navbar-toggler-icon { filter: invert(1); }

    .navbar-custom.scrolled .navbar-toggler-icon {
      filter: invert(0);
    }

    /* ================= HEADER ================= */
.header-banner {
  height: 60vh;
  margin-top: -90px;
  background: url("Assets/IMG/gpondok.jpg") center 60% / cover no-repeat;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  z-index: 1;
}


.header-banner::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.45);
}

.header-banner h1 {
  position: relative;
  z-index: 2;
  font-size: 3rem;
  font-weight: 700;
}

    /* ================= CONTENT ================= */
    h2.section-title {
      font-weight: 700;
      color: var(--hijau);
    }

    .line {
      width: 80px;
      height: 4px;
      background: var(--emas);
      margin: 10px 0 25px;
      border-radius: 10px;
    }

    .profil-card {
      padding: 25px;
      border-radius: 12px;
      background: #fff;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .profil-card img {
      width: 150px;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
      object-position: center 20px;
    }

    /* ================= FOOTER ================= */
    footer {
      background-color: #001f3f;
      color: white;
    }
    .col-md-4.mb-4 a {
  color: white !important;
}

  </style>
</head>
<body>

<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
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

<div style="height:90px;"></div>

<!-- ================= HEADER BANNER ================= -->
<section class="header-banner">
  <h1>Profil Pondok Pesantren</h1>
</section>

<div class="container py-5">

  <!-- ================= SEJARAH ================= -->
  <h2 class="section-title">Sejarah Singkat</h2>
  <div class="line"></div>

  <div class="profil-card mb-5">
    <p style="text-align: justify;">
      Pondok Pesantren Ittihadut Tholibin didirikan oleh Dr. KH. Ikhwan Qomary M.Ag 
      dan Nyai Hj. Umi Fatma S.H., Alhdz pada tahun 1988. Pada awal berdirinya, 
      pondok ini hanya menjadi tempat mengaji dan belum memiliki bangunan asrama. 
      Kegiatan mengaji saat itu bergabung dengan Pondok Pesantren Tahfidzul Qur’an Al-Asya’ariyah.
    </p>

    <p style="text-align: justify;">
      Pembangunan gedung pertama dimulai tahun 1990 dan terus berkembang hingga 
      menjadi beberapa gedung asrama putra-putri, ruang pembelajaran, mushola, 
      dan fasilitas pendidikan lainnya. Hingga kini, PP. Ittihadut Tholibin 
      terus berkembang menjadi lembaga pendidikan Islam yang kokoh dan maju.
    </p>
  </div>

  <!-- ================= VISI MISI ================= -->
  <h2 class="section-title">Visi & Misi</h2>
  <div class="line"></div>

  <div class="profil-card mb-5">
    <h5 class="fw-bold text-success">Visi</h5>
    <p>Membentuk generasi Islam yang berakhlak mulia, berilmu, dan berkarakter.</p>

    <h5 class="fw-bold mt-4 text-success">Misi</h5>
    <ul>
      <li>Menanamkan nilai-nilai keislaman secara komprehensif.</li>
      <li>Mengembangkan kemampuan akademik dan non-akademik santri.</li>
      <li>Mewujudkan lingkungan belajar yang disiplin, nyaman, dan islami.</li>
      <li>Menguatkan program tahfidz, kitab kuning, dan pendidikan formal.</li>
    </ul>
  </div>

  <!-- ================= STRUKTUR ================= -->
  <h2 class="section-title">Struktur Pengasuh</h2>
  <div class="line"></div>

  <div class="row g-4 mb-5">

    <div class="col-md-4">
      <div class="profil-card text-center">
        <img src="Assets/IMG/abah.png">
        <h5 class="fw-bold">Dr. KH. Ikhwan Qomary M.Ag</h5>
        <p>Pengasuh Pondok</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="profil-card text-center">
        <img src="Assets/IMG/ibu.png">
        <h5 class="fw-bold">Nyai Hj. Umi Fatma S.H., Alhdz</h5>
        <p>Pengasuh Pondok</p>
      </div>
    </div>

  </div>

  <!-- ================= FASILITAS ================= -->
  <h2 class="section-title">Fasilitas Pondok</h2>
  <div class="line"></div>

  <div class="row g-4 mb-5">

    <div class="col-md-4">
      <div class="profil-card text-center">
        <i class="bi bi-building fs-1 text-primary"></i>
        <h5 class="mt-3 fw-bold">Asrama Santri Putra & Putri</h5>
      </div>
    </div>

    <div class="col-md-4">
      <div class="profil-card text-center">
        <i class="bi bi-journal-bookmark fs-1 text-success"></i>
        <h5 class="mt-3 fw-bold">Ruang Belajar & Madrasah</h5>
      </div>
    </div>

    <div class="col-md-4">
      <div class="profil-card text-center">
        <i class="bi bi-mosque fs-1 text-warning"></i>
        <h5 class="mt-3 fw-bold">Mushola / Mushola</h5>
      </div>
    </div>

  </div>

</div>

<!-- ================= FOOTER ================= -->
<footer>
  <div class="container py-4">
    <div class="row">

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold text-light">PP. Ittihadut Tholibin</h5>
        <p class="text-light">
          RT.2/RW.5, Kradenan, Kalibeber, Mojotengah,<br>
          Wonosobo, Jawa Tengah 56351
        </p>
      </div>

      <div class="col-md-4 mb-4">
        <h5 class="fw-bold text-light">Link Cepat</h5>
        <ul class="list-unstyled">
          <li><a href="pendaftaran.php" class="text-light">Pendaftaran</a></li>
            <li><a href="seputar.php" class="text-light">Seputar MTS</a></li>
            <li><a href="hubungi.php" class="text-light">Hubungi Kami</a></li>
        </ul>
      </div>

      <div class="col-md-4 mb-4">
       <h5 class="fw-bold">Media Sosial</h5>
        <a href="https://wa.me/6282241186388" class="d-block mb-2"><i class="bi bi-whatsapp"></i> WhatsApp</a>
        <a href="https://www.instagram.com/ponpes_ittihadut_tholibin?igsh=d3llbTBxdzZzdWNm" class="d-block mb-2"><i class="bi bi-instagram"></i> Instagram</a>
        <a href="mailto:info@ponpesittihaduttholibin.com" class="d-block mb-2"><i class="bi bi-envelope-fill"></i> Email</a>
        <a href="https://youtube.com/@ittihaduttholibin7931?si=sqPslEjSlKg5Lk9j" class="d-block"><i class="bi bi-youtube"></i> YouTube</a>
      </div>

    </div>

    <div class="text-center mt-3 pt-3 border-top border-light">
      <p class="mb-0">© 2025 PP. Ittihadut Tholibin | Tim IT Markas Media</p>
    </div>
  </div>
</footer>

<script>
  window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar-custom");
    if (window.scrollY > 50) navbar.classList.add("scrolled");
    else navbar.classList.remove("scrolled");
  });
</script>

</body>
</html>
