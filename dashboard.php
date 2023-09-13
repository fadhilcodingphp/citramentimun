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

  <title>MENTIMUN</title>

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

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="dashboard.php">
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

    <section class="slider_section">
      <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-3 col-lg-2 offset-md-2">
                  <div class="detail-box">
                    <h1>
                      mentimun
                    </h1>
                    <p>
                      Kematangan Umur Buah Mentimun Berbasis
                      Citra Digital Menggunakan Algoritma GLCM & KNN
                    </p>
                    <div>
                      <a href="">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 col-lg-8">
                  <div class="img-box">
                    <img src="images/heero.png" alt="" />
                    <div class="pengguna">
                      <a class="btn-outline-light" href="PenggunaSistem.php" role="button">Pengguna<br>Sistem</a>
                    </div>
                    <div class="datauji">
                      <a class="btn-outline-light" href="DataUji&Latih.php" role="button">Data Uji<br>&<br>Latih</a>
                    </div>
                    <div class="riwayatpengguna">
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
  <br><br><br><br><br>
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

  <!-- about section -->

  <!-- <section class="about_section layout_padding mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="img-box">
            <img src="images/about-img.png" alt="" />
          </div>
        </div>
        <div class="col-md-5">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                About Design
              </h2>
            </div>

            <p>
              It is a long established fact that a reader will be distracted
              by the readable content of a page when looking at its layout.
              The point of using Lorem Ipsum is that it has a more-or-less
              normal distribution of letters, as opposed to using 'Content
              here , content here', making it
            </p>
            <div>
              <a href="">
                About More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end about section -->

  <!-- do section -->
  <!-- <section class="do_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          What we do
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
  </section> -->

  <!-- end do section -->
  <!-- skill section -->
  <br>
  <section class="skill_section layout_padding2">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          presentase
        </h2>
      </div>
      <div class="skill_padding">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-1"></div>
              <h6>
                Penguna Sistem
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-2"></div>
              <h6>
                Data Uji & Latih
              </h6>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box">
              <div class="circle" id="circles-3"></div>
              <h6>
                Pengguna Sistem
              </h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end skill section -->

  <!-- portfolio section -->
  <!-- <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Our Portfolio
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="box b-1">
                <img src="images/p-1.png" alt="" />
                <h4>
                  Logo Design
                </h4>
              </div>
              <div class="box b-2">
                <img src="images/p-2.png" alt="" />
                <h4>
                  Coding
                </h4>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box b-3">
                <img src="images/p-3.png" alt="" />
                <h4>
                  Bike Design
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6">
              <div class="box b-4">
                <img src="images/p-4.png" alt="" />
                <h4>
                  Flower Design
                </h4>
              </div>
              <div class="box b-5">
                <img src="images/p-5.png" alt="" />
                <h4>
                  Website Design
                </h4>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box b-6">
                <img src="images/p-6.jpg" alt="" />
                <h4>
                  More Design
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end portfolio section -->
  <br>
  <!-- client section -->
  <!-- <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Testimonial
        </h2>
      </div>
    </div>

    <div class="container">
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-1.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth jon
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-2.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth den
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div> -->
  <!-- <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-1.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth jon
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-2.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth den
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container layout_padding2">
              <div class="client_box b-1">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-1.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth jon
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
              <div class="client_box b-2">
                <div class="client-id">
                  <div class="img-box">
                    <img src="images/client-2.jpg" alt="" />
                  </div>
                  <div class="name">
                    <h5>
                      smirth den
                    </h5>
                    <p>
                      client
                    </p>
                  </div>
                </div>
                <div class="detail">
                  <p>
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
                    The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content
                    here, content here', making it look like readable English. Many
                    desktop publishing packages and web page editors now use Lorem
                    Ipsum as their default model It is a long established fact that
                    a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is
                    that it has a more-or-less normal distribution of letters, as
                    opposed to using 'Content here, content here', making it look
                    like readable English. Many desktop publishing packages and web
                    page editors now use Lorem Ipsum as their default model
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section> -->

  <!-- end client section -->

  <!-- contact section -->

  <!-- <section class="contact_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
          <h2 class="custom_heading">Contact Us</h2>
          <form action="#">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Pone Number" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex  mt-4 ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact.jpg" alt="" class="w-100" />
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- end contact section -->

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