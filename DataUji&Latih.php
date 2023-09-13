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

  <title>DATA UJI</title>

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
                <a class="nav-link" href="PenggunaSistem">Pengguna Sistem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DataUji&Latih.php">Data Uji & Latih</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="RiwayatPenggunaan.php">Riwayat Penggunaan</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="blabla.php">blabla</a>
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
  </div>
  <!-- end header section -->



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
            <a class="nav-link" href="DataUji&Latih.php">Data Uji & Latih</a>
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
  <section class="do_section layout_padding">
    <div class="container">
      <div class="card-header">
        <div class="custom_heading-container">
          <h2>
            Data Uji & Latih
          </h2>
        </div>
        <section class="portfolio_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card shadow border-0">
                  <div class="card-body text-center">
                    <form id="myForm" action="" method="POST" enctype="multipart/form-data">
                      <div class="dropzone">
                        <img src="images/defaultuploadimage.png" class="upload-icon" / style="width:50%"><br>
                        <input type="file" id="input" class="upload-input" name="image" />
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow border-0">
                  <div class="card-body text-center">
                    <img src="images/defaultoutputimage.png" alt="image" id="img" style="width:50%; height:265px; object-fit: cover; object-position: center;object-position: 50% 50%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </section>

  <!-- end portfolio section -->




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
  <script>
    let input = document.getElementById('input')
    let image = document.getElementById('img')
    input.onchange = (e) => {
      if (input.files[0]) {
        image.src = URL.createObjectURL(input.files[0])
      }
    }
  </script>
  <script>
    const dropArea = document.querySelector(".drag-image"),
      dragText = dropArea.querySelector("h6"),
      button = dropArea.querySelector("button"),
      input = dropArea.querySelector("input");
    let file;

    button.onclick = () => {
      input.click();
    }

    input.addEventListener("change", function() {

      file = this.files[0];
      dropArea.classList.add("active");
      viewfile();
    });

    dropArea.addEventListener("dragover", (event) => {
      event.preventDefault();
      dropArea.classList.add("active");
      dragText.textContent = "Release to Upload File";
    });


    dropArea.addEventListener("dragleave", () => {
      dropArea.classList.remove("active");
      dragText.textContent = "Drag & Drop to Upload File";
    });

    dropArea.addEventListener("drop", (event) => {
      event.preventDefault();

      file = event.dataTransfer.files[0];
      viewfile();
    });

    function viewfile() {
      let fileType = file.type;
      let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
      if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader();
        fileReader.onload = () => {
          let fileURL = fileReader.result;
          let imgTag = `<img src="${fileURL}" alt="image">`;
          dropArea.innerHTML = imgTag;
        }
        fileReader.readAsDataURL(file);
      } else {
        alert("This is not an Image File!");
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
      }
    }
  </script>
</body>

</html>