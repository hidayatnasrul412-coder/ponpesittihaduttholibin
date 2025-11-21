<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hubungi Kami | PP. Ittihadut Tholibin</title>
  
  <link href="Assets/Style/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="Assets/Style/Bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />

  <style>
    :root {
      --hijau: #065f46;
      --emas: #e7b022;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    /* NAVBAR (sama seperti di profil) */
    .navbar-custom {
      padding: 15px 0;
      transition: 0.3s;
      background: transparent !important;
      position: fixed;
      width: 100%;
      z-index: 999;
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
    .navbar-toggler {
      border-color: #fff !important;
    }
    .navbar-toggler-icon {
      filter: invert(1);
    }
    .navbar-custom.scrolled .navbar-toggler-icon {
      filter: invert(0);
    }

    /* JUDUL HALAMAN CONTACT */
    .contact-header {
      height: 60vh;
      background: url("Assets/IMG/gpondok.jpg") center 60% / cover no-repeat;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      z-index: 1;
    }
  
    .contact-header::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
    }
    .contact-header h1 {
      position: relative;
      z-index: 2;
      font-size: 2.8rem;
      font-weight: 700;
    }

    /* FORM KONTAK */
    .contact-form-box {
      background: #f8f9fa;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* MAP */
    .map-container {
      height: 300px;
      border-radius: 12px;
      overflow: hidden;
    }

    /* FOOTER */
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

  <div style="height: 0px;"></div> <!-- spasi agar konten bawah navbar -->

  <!-- HEADER CONTACT -->
  <section class="contact-header">
    <h1>Hubungi Kami</h1>
  </section>

  <div class="container py-5">

    <div class="row g-4">
      <!-- FORM KONTAK -->
      <div class="col-md-6">
        <div class="contact-form-box">
          <h4 class="mb-4">Kirim Pesan</h4>
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Kirim</button>
          </form>
        </div>
      </div>

      <!-- MAP / ALAMAT -->
      <div class="col-md-6">
        <div class="map-container mb-4">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2575727036947!2d109.90010757357219!3d-7.324939672032124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e700b00520484e9%3A0x4ef040a2373772c1!2sPondok%20Pesantren%20Ittihadut%20Tholibin!5e0!3m2!1sid!2sid!4v1763731481011!5m2!1sid!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <p><i class="bi bi-geo-alt-fill"></i> Jl. Kradenan, Kalibeber, Mojotengah, Wonosobo, Jawa Tengah</p>
        <p><i class="bi bi-telephone-fill"></i> Whatsapp: +62-878-4356-3709</p>
        <p><i class="bi bi-envelope-fill"></i> Email: info@ittihaduttholibin.sch.id</p>
      </div>
    </div>

  </div>

  <!-- FOOTER (sama seperti profil) -->
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
