<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pendaftaran Santri Baru | PP. Ittihadut Tholibin</title>
  <link href="Assets/Style/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="Assets/Style/Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
  />
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #fff;
    }
    /* Navbar seperti galeri.php */
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
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
    .navbar-toggler {
      border-color: #fff !important;
    }
    .navbar-toggler-icon {
      filter: invert(1);
    }
    .navbar-custom.scrolled .navbar-toggler-icon {
      filter: invert(0);
    }
    /* Header Banner */
    .header-banner {
      height: 60vh;
      background: url("Assets/IMG/benerpsb.jpg") center 60% / cover no-repeat;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      text-align: center;
      padding: 0 1rem;
    }
    .header-banner::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.55);
    }
    .header-banner h1 {
      position: relative;
      z-index: 2;
      font-size: 3rem;
      font-weight: 700;
    }
    /* Container */
    .container-main {
      max-width: 900px;
      margin: 2rem auto 5rem auto;
      padding: 0 15px;
    }
    /* Info Pendaftaran */
    .info-pendaftaran img {
      max-width: 100%;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .btn-download {
      margin-top: 10px;
    }
    /* Alur Pendaftaran Cards */
    .alur-container {
      margin-top: 3rem;
      margin-bottom: 3rem;
    }
    .card-alur {
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .card-alur:hover {
      transform: translateY(-5px);
    }
    /* Formulir */
    .form-container {
      background: #f8f9fa;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      margin-bottom: 4rem;
      text-align: center;
    }
    footer {
      background-color: #001f3f;
      color: white;
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img
          src="Assets/IMG/logoitb.png"
          style="height: 40px; margin-right: 10px"
          alt="Logo PP Ittihadut Tholibin"
        />
        PONPES ITTIHADUT THOLIBIN
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navBar"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navBar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="profil.php">Profil</a></li>
          <li class="nav-item">
            <a class="nav-link active" href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="seputar.php">Seputar MTS</a></li>
          <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="hubungi.php">Hubungi</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jeda navbar fixed -->
  <div style="height: 0px"></div>

  <!-- HEADER -->
  <section class="header-banner">
    <h1>Pendaftaran Santri Baru</h1>
  </section>

  <div class="container-main">
    <!-- Informasi Pendaftaran -->
    <section class="info-pendaftaran">
      <h2 class="text-success fw-bold mb-3">Informasi Pendaftaran</h2>
      <img
        src="Assets/IMG/brosur1.jpg"
        alt="Brosur Pendaftaran"
        class="mb-3"
      />
      <img
        src="Assets/IMG/brosur2.jpg"
        alt="Brosur Pendaftaran"
        class="mb-3"
      />
      <div>
        <a
          href="Assets/PDF/brosuritb.pdf"
          class="btn btn-warning me-2 btn-download"
          download
          ><i class="bi bi-download"></i> Download Brosur PDF</a
        >
        <a
          href="Assets/PDF/formulir pendaftaran 2026.pdf"
          class="btn btn-success btn-download"
          download
          ><i class="bi bi-download"></i> Download Formulir PDF</a
        >
      </div>
    </section>

    <!-- Alur Pendaftaran -->
    <section class="alur-container">
      <h2 class="text-success fw-bold mb-4">Alur Pendaftaran</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card card-alur p-3">
            <h5>1. Isi Formulir Pendaftaran</h5>
            <p>Lengkapi semua data pada formulir dengan jujur dan benar.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-alur p-3">
            <h5>2. Upload Dokumen Pendukung</h5>
            <p>
              Upload pas foto 3x4, akte kelahiran, dan kartu keluarga pada form.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-alur p-3">
            <h5>3. Submit dan Tunggu Konfirmasi</h5>
            <p>
              Setelah submit, tunggu konfirmasi dari panitia melalui nomor HP/WhatsApp.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Formulir Pendaftaran dengan Google Form -->
    <section class="form-container">
      <h2 class="text-success fw-bold mb-4">Formulir Pendaftaran Online</h2>
      <p class="mb-4" style="font-size:1.1rem; max-width:600px; margin:auto;">
        Untuk memudahkan proses pendaftaran dan pengumpulan data, kami menggunakan Google Form.
        Silakan klik tombol di bawah untuk membuka formulir pendaftaran online.  
        Pastikan data yang Anda isi sudah benar sebelum mengirimkan.
      </p>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSdZ70a6-948L8pw3ZJKDVr-BUN_Ud-DvSB5Adbo7wg_okpGSw/viewform?usp=header" target="_blank" 
         class="btn btn-primary btn-lg px-5">
        <i class="bi bi-pencil-square"></i> Buka Formulir Pendaftaran
      </a>
    </section>
  </div>

  <!-- FOOTER -->
  <footer>
    <div class="container py-4">
      <div class="row">
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold text-light">PP. Ittihadut Tholibin</h5>
          <p class="text-light">
            RT.2/RW.5, Kradenan, Kalibeber, Mojotengah,<br />
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
          <h5 class="fw-bold text-light">Media Sosial</h5>
          <a href="https://wa.me/6282241186388" class="d-block mb-2 text-light"
            ><i class="bi bi-whatsapp"></i> WhatsApp</a
          >
          <a href="https://www.instagram.com/ponpes_ittihadut_tholibin?igsh=d3llbTBxdzZzdWNm" class="d-block mb-2 text-light"
            ><i class="bi bi-instagram"></i> Instagram</a
          >
          <a href="mailto:info@ponpesittihaduttholibin.com" class="d-block mb-2 text-light"
            ><i class="bi bi-envelope-fill"></i> Email</a
          >
          <a href="https://youtube.com/@ittihaduttholibin7931?si=sqPslEjSlKg5Lk9j" class="d-block text-light"><i class="bi bi-youtube"></i> YouTube</a>
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
      if (window.scrollY > 10) navbar.classList.add("scrolled");
      else navbar.classList.remove("scrolled");
    });
  </script>
</body>
</html>
