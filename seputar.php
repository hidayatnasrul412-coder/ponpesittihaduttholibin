<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Seputar MTS | PP. Ittihadut Tholibin</title>
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
      background: url("Assets/IMG/gpondok.jpg") center 60% / cover no-repeat;
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
    /* Konten */
    .seputar-content {
      font-size: 1.1rem;
      color: #333;
      line-height: 1.6;
    }
    /* Tombol info lebih lanjut */
    .btn-info-mts {
      margin-top: 2rem;
      padding: 0.75rem 1.5rem;
      font-weight: 600;
      font-size: 1.1rem;
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
          <li class="nav-item"><a class="nav-link" href="pendaftaran.php">Pendaftaran</a></li>
          <li class="nav-item">
            <a class="nav-link active" href="seputar.php">Seputar MTS</a>
          </li>
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
    <h1>Seputar MTS</h1>
  </section>

  <!-- CONTENT -->
  <div class="container-main">
    <div class="seputar-content">
      <p>
        Madrasah Tsanawiyah (MTS) adalah jenjang pendidikan menengah pertama berbasis agama Islam yang berfokus pada pendidikan keagamaan dan umum. PP. Ittihadut Tholibin memiliki MTS dengan program pendidikan yang lengkap dan berintegrasi antara kurikulum nasional dan nilai-nilai agama.
      </p>
      <p>
        MTS di pondok pesantren kami memberikan pembinaan karakter, peningkatan ilmu agama, serta keterampilan yang mempersiapkan santri menjadi generasi unggul dan berakhlak mulia.
      </p>
      <p>
        Untuk informasi lebih lanjut mengenai MTS, silakan kunjungi website resmi MTS kami dengan klik tombol di bawah ini.
      </p>
      <a
        href="https://mts-sekolah.example.com"
        target="_blank"
        rel="noopener"
        class="btn btn-success btn-info-mts"
        >Info Lebih Lanjut MTS <i class="bi bi-arrow-right"></i
      ></a>
    </div>
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
