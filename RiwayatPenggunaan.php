<?php
session_start();
if (!isset($_SESSION['roleadmin'])) {
  header("Location:login.php");
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
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Riwayat Pengguna</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/Muftim_logo.png" alt="" />
            <span>
              MENTIMUN
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
                <a class="nav-link" href="about.php">Pengguna Sistem</a>
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
                <a href="index.php">
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
              ADMIN
            </a>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->


  </div>

  <!-- custom menu -->
  <div class="custom_menu-container">
    <div class="container">
      <div class="custom_menu">
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link pl-0" href="dashboard.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="PenggunaSistem.php">Pengguna Sistem</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DataUji&Latih.php">Data Uji & Latih </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="RiwayatPenggunaan.php">Riwayat Penggunaan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Laporan.php">Laporan</a>
          </li>
        </ul>
        <div class="user_option">
          <div class="login_btn-container">
            <a href="logout.php">
              Logout
            </a>
          </div>
          <form class="form-inline my-2 my-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- custom menu -->

  <!-- do section -->
  <section class="do_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Riwayat Penggunan
        </h2>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-red">
            <div class="img-box">
              <img src="images/idea.png" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                Original Ideas
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-green">
            <div class="img-box">
              <img src="images/controller.png" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                Great apps
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-red">
            <div class="img-box">
              <img src="images/monitor.png" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                High Resolution
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="content-box bg-green">
            <div class="img-box">
              <img src="images/rocket-ship.png" alt="" />
            </div>
            <div class="detail-box">
              <h6>
                Fast Loading
              </h6>
              <p>
                It is a long established fact that a reader will be distracted
                by the readable content
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end do section -->
  <!-- skill section -->

  <section class="skill_section layout_padding2">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Our Skills
        </h2>
      </div>
      <div class="skill_padding">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-1"></div>
              <h6>
                Adobe Photoshop
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-2"></div>
              <h6>
                Adobe Ilustrator
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-3"></div>
              <h6>
                After Effects
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-4"></div>
              <h6>
                Adobe XD
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end skill section -->






  <!-- footer section -->
  <footer class="container-fluid footer_section">
    <p>
      &copy; 2023 By
      <a href="https://html.design/">Mufida Tul Asmi</a>
    </p>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/circles.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>