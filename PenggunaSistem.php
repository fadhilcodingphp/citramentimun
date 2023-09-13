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

  <title>PENGGUNA SISTEM</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
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
            <img src="images/muftim_logo.png" alt="" />
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
                <a class="nav-link" href="dashboard.php">Beranda <span class="sr-only">(current)</span></a>
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
                <a href="">
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
            <a class="nav-link pl-0" href="dashboard.php">Beranda <span class="sr-only">(current)</span></a>
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



  <section class="do_section layout_padding">
    <div class="container">
      <!-- <div class="card-header"> -->
      <div class="custom_heading-container">
        <h2>
          Pengguna Sistem
        </h2>
      </div>
      <div class="heading">
        <div class="input-group mb-2">
          <input type="text" class="form-control" placeholder="Pencarian" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn mt-2 nav_search-btn" type="button" id="button-addon2"></button>
          </div>
        </div>
        <a class="btn btn-primary" href="#" role="button">+Tambah Folder</a>
        <input type="text" class="form-control col-5 mt-2" value="50 Pengguna" aria-label="Recipient's username" aria-describedby="button-addon2">
      </div>

      <!-- custom menu -->

      <!-- <div class="card-inti">
    <div class="card-header">
      PENGGUNA SISTEM
    </div> -->
      <br><br>
      <div class="card-header">
        <div class="card mt-2" style="width: 10rem;">
          <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
            <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
          </svg>
          <div class="card-body">
            <p class="card-text">Fira(10)</p>
            <a href="#" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

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