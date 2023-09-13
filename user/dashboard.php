<?php
session_start();
if (!isset($_SESSION['roleuser'])) {
  header("Location: ../login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta nams e="description" content="" />
  <meta name="author" content="" />

  <title>MENTIMUN</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
</head>

<body>

  <!-- logout
  <a href="logout.php"></a> -->


  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="dashboard.php">
            <img src="../images/muftim_logo.png" alt="" />
            <span>
              Mentimun
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-2">
              <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="PenggunaSistem.php">Pengguna Sistem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="portfolio.php">Data Uji & Latih</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Riwayat Penggunaan</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="Laporan.php">Laporan</a>
              </li>
            </ul>
            <div class="user_option">
              <div class="login_btn-container">
                <a href="../index.php">
                  Logout
                </a>
              </div>
              <form class="form-inline my-2 my-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
          <div class="call_btn">
            <a href="">
              USER
            </a>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <section class="slider_section">
      <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3 col-lg-2 offset-md-2">
                  <div class="detail-box">
                    <h1>
                      Hello user
                    </h1>
                    <p>
                      Kematangan Umur Buah Mentimun Berbasis
                      Citra Digital Menggunakan Algoritma GLCM & KNN
                    </p>
                    <div>
                      <a href="DataUji&Latih.php">
                        Mulai Klasifikasi
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-8">
                  <div class="img-box">
                    <img src="../images/herouser.png" alt="" />
                    <div class="userpengguna">
                      <a class="btn-outline-light" href="PenggunaSistem.php" role="button">Profile<br>Pengguna</a>
                    </div>
                    <div class="userriwayatpengguna">
                      <a class="btn-outline-light" href="RiwayatPenggunaan.php" role="button">Riwayat<br>Pengguna</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>

  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2023 By
      <a href="https://html.design/">Mufida Tul Asmi</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/circles.min.js"></script>
  <script src="../js/custom.js"></script>


</body>

</html>