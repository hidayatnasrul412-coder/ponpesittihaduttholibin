<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Galeri | PP. Ittihadut Tholibin</title>
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
    /* ===== NAVBAR (SAMA PERSIS PROFIL.PHP) ===== */
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
    /* ===== HEADER BANNER ===== */
    .header-banner {
      height: 60vh;
      background: url("Assets/IMG/gpondok.jpg") center 60% / cover no-repeat;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
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
    /* ===== GRID GALERI ===== */
    .gallery-img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      border-radius: 12px;
      transition: 0.3s ease;
    }

    .gallery-item:hover .gallery-img {
      transform: scale(1.1);
    }
    .gallery-item {
  flex: 1 1 calc(33.333% - 16px); /* 3 gambar per baris dengan gap */
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: transform 0.3s ease;
  margin-bottom: 16px; /* <-- ini tambahan jarak vertikal */
}

    /* ===== FOOTER ===== */
    footer {
      background-color: #001f3f;
      color: white;
    }
    /* ===== Filter Button Active Style ===== */
    .filter-btn.active {
      background-color: #e7b022;
      color: #000 !important;
      border-color: #e7b022 !important;
    }
  </style>
</head>
<body>
  <!-- ===== NAVBAR ===== -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="Assets/IMG/logoitb.png" style="height:40px; margin-right:10px" />
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
          <li class="nav-item"><a class="nav-link" href="seputar.php">Seputar MTS</a></li>
          <li class="nav-item"><a class="nav-link" href="galeri.php">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="hubungi.php">Hubungi</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jeda untuk navbar fixed -->
  <div style="height: 0px"></div>

  <!-- ===== HEADER ===== -->
  <section class="header-banner">
    <h1>Galeri Pondok Pesantren</h1>
  </section>

  <!-- ===== CONTENT ===== -->
  <div class="container py-5">
    <h2 class="fw-bold text-success">Dokumentasi Kegiatan</h2>
    <div
      style="
        width: 100px;
        height: 4px;
        background: #e7b022;
        border-radius: 10px;
        margin-bottom: 30px;
      "
    ></div>

    <!-- Filter Kategori -->
    <div class="mb-4">
      <button
        class="btn btn-outline-success me-2 filter-btn active"
        data-filter="all"
      >
        Semua
      </button>
      <button class="btn btn-outline-success me-2 filter-btn" data-filter="hkq">
        Kategori HKQ
      </button>
      <button
        class="btn btn-outline-success me-2 filter-btn"
        data-filter="muhadaroh"
      >
        Muhadaroh Pusat
      </button>
      <button
        class="btn btn-outline-success me-2 filter-btn"
        data-filter="santribaru"
      >
        Santri Baru
      </button>
      <button
        class="btn btn-outline-success me-2 filter-btn"
        data-filter="triwulan"
      >
        Tri Wulan
      </button>
      <button class="btn btn-outline-success me-2 filter-btn" data-filter="dalem">
        Dalem
      </button>
      <button class="btn btn-outline-success me-2 filter-btn" data-filter="hbi">
        Hari Besar Islam (HBI)
      </button>
      <button class="btn btn-outline-success me-2 filter-btn" data-filter="ziarah">
        Ziarah
      </button>
    </div>

    <div class="row g-4 gallery-container">

      <!-- Gambar kategori HKQ -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="hkq">
        <div class="gallery-item">
          <img
            src="Assets/IMG/hkq1.jpg"
            class="gallery-img"
            alt="HKQ"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/hkq2.jpg"
            class="gallery-img"
            alt="HKQ"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/hkq3.jpg"
            class="gallery-img"
            alt="HKQ"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/hkq4.jpg"
            class="gallery-img"
            alt="HKQ"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/hkq5.jpg"
            class="gallery-img"
            alt="HKQ"
          />
        </div>
      </div>

      <!-- Gambar kategori Muhadaroh Pusat -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="muhadaroh">
        <div class="gallery-item">
          <img
            src="Assets/IMG/pusat.jpg"
            class="gallery-img"
            alt="Muhadaroh Pusat"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/pusat1.jpg"
            class="gallery-img"
            alt="Muhadaroh Pusat"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/pusat2.jpg"
            class="gallery-img"
            alt="Muhadaroh Pusat"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/pusat3.jpg"
            class="gallery-img"
            alt="Muhadaroh Pusat"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/pusat5.jpg"
            class="gallery-img"
            alt="Muhadaroh Pusat"
          />
        </div>
      </div>

      <!-- Gambar kategori Santri Baru -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="santribaru">
        <div class="gallery-item">
          <img
            src="Assets/IMG/baru1.jpg"
            class="gallery-img"
            alt="Santri Baru"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/baru2.jpg"
            class="gallery-img"
            alt="Santri Baru"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/baru3.jpg"
            class="gallery-img"
            alt="Santri Baru"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/baru4.jpg"
            class="gallery-img"
            alt="Santri Baru"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/baru5.jpg"
            class="gallery-img"
            alt="Santri Baru"
          />
        </div>
      </div>

      <!-- Gambar kategori Tri Wulan -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="triwulan">
        <div class="gallery-item">
          <img
            src="Assets/IMG/wulan1.jpg"
            class="gallery-img"
            alt="Tri Wulan"
          />
        </div>
                <div class="gallery-item">
          <img
            src="Assets/IMG/wulan2.jpg"
            class="gallery-img"
            alt="Tri Wulan"
          />
        </div>
                <div class="gallery-item">
          <img
            src="Assets/IMG/wulan3.jpg"
            class="gallery-img"
            alt="Tri Wulan"
          />
        </div>
                <div class="gallery-item">
          <img
            src="Assets/IMG/wulan4.jpg"
            class="gallery-img"
            alt="Tri Wulan"
          />
        </div>
                <div class="gallery-item">
          <img
            src="Assets/IMG/wulan5.jpg"
            class="gallery-img"
            alt="Tri Wulan"
          />
        </div>
      </div>

      <!-- Gambar kategori Dalem -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="dalem">
        <div class="gallery-item">
          <img
            src="Assets/IMG/ndalem1.jpg"
            class="gallery-img"
            alt="Dalem"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/ndalem2.jpg"
            class="gallery-img"
            alt="Dalem"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/ndalem3.jpg"
            class="gallery-img"
            alt="Dalem"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/ndalem4.jpg"
            class="gallery-img"
            alt="Dalem"
          />
        </div>
         <div class="gallery-item">
          <img
            src="Assets/IMG/ndalem2.jpg"
            class="gallery-img"
            alt="Dalem"
          />
        </div>
      </div>

      <!-- Gambar kategori Hari Besar Islam (HBI) -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="hbi">
        <div class="gallery-item">
          <img
            src="Assets/IMG/hbi1.jpg"
            class="gallery-img"
            alt="Hari Besar Islam"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/hbi2.jpg"
            class="gallery-img"
            alt="Hari Besar Islam"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/hbi3.jpg"
            class="gallery-img"
            alt="Hari Besar Islam"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/hbi4.jpg"
            class="gallery-img"
            alt="Hari Besar Islam"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/hbi5.jpg"
            class="gallery-img"
            alt="Hari Besar Islam"
          />
        </div>
      </div>

      <!-- Gambar kategori Ziarah -->
      <div class="col-lg-4 col-md-6 gallery-item" data-category="ziarah">
        <div class="gallery-item">
          <img
            src="Assets/IMG/ziaroh1.jpg"
            class="gallery-img"
            alt="Ziarah"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/ziaroh2.jpg"
            class="gallery-img"
            alt="Ziarah"
          />
          <div class="gallery-item">
          <img
            src="Assets/IMG/ziaroh3.jpg"
            class="gallery-img"
            alt="Ziarah"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/ziaroh4.jpg"
            class="gallery-img"
            alt="Ziarah"
          />
        </div>
        <div class="gallery-item">
          <img
            src="Assets/IMG/ziaroh5.jpg"
            class="gallery-img"
            alt="Ziarah"
          />
        </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== FOOTER ===== -->
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

    // Script filter kategori galeri
    const filterButtons = document.querySelectorAll(".filter-btn");
    const galleryItems = document.querySelectorAll(".gallery-item[data-category]");

    filterButtons.forEach((btn) => {
      btn.addEventListener("click", () => {
        // Hilangkan active di semua tombol
        filterButtons.forEach((b) => b.classList.remove("active"));
        // Tambahkan active ke tombol klik
        btn.classList.add("active");

        const filter = btn.getAttribute("data-filter");

        galleryItems.forEach((item) => {
          if (filter === "all") {
            item.style.display = "block";
          } else {
            if (item.getAttribute("data-category") === filter) {
              item.style.display = "block";
            } else {
              item.style.display = "none";
            }
          }
        });
      });
    });
  </script>
</body>
</html>
