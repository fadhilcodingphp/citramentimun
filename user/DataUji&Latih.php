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
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>DATA UJI</title>

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

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="../images/Muftim_logo.png" alt="" />
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
                <a class="nav-link" href="PenggunaSistem">Profile Pengguna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="DataUji&Latih.php">Klasifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="RiwayatPenggunaan.php">Riwayat Penggunaan</a>
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
              USER
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
            <a class="nav-link" href="PenggunaSistem.php">Profile Pengguna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DataUji&Latih.php">Klasifikasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="RiwayatPenggunaan.php">Riwayat Penggunaan</a>
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
    </div>
  </div>

  <div class="container mt-4">
    <div class="row mt-4">
      <div class="col-md-12 card mt-4">
        <form>
          <div class="form-group">
            <label for="fileInput">Select a File: </label>
            <input id="fileInput" class="form-control" type="file">
          </div>
          <input class="btn btn-primary m-1" type="button" onclick="submitHandler()" value="Upload">
        </form>
      </div>
    </div>
  </div>

  <script>
    function submitHandler() {
      console.log("click");
      const fileInput = document.getElementById('fileInput');
      console.log(fileInput.files);
      const image = fileInput.files[0];

      // Multipart file
      const formData = new FormData();
      formData.append('image_file', image);
      formData.append('size', 'auto');

      const apiKey = '9MTfhBURecRkiwrzkFkphbH7';

      fetch('https://api.remove.bg/v1.0/removebg', {
          method: 'POST',
          headers: {
            'X-Api-Key': apiKey
          },
          body: formData
        })
        .then(function(reponse) {
          return reponse.blob()
        })
        .then(function(blob) {
          console.log(blob);
          const url = URL.createObjectURL(blob);
          imageURL = url;
          const img = document.createElement('img');
          img.src = url;
          document.body.appendChild(img);
        })
      // .catch();
    }
  </script>
  <!-- custom menu -->
  <section class="do_section layout_padding">
    <div class="container">
      <div class="card-header">
        <div class="custom_heading-container">
          <h2>
            Data Uji & Latih
          </h2>
        </div>

        <!-- INPUT GAMBAR -->
        <section class="portfolio_section layout_padding">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card shadow border-0">
                  <div class="card-body text-center">
                    <form id="myForm" action="" method="POST" enctype="multipart/form-data">
                      <div class="dropzone">
                        <img src="../images/defaultuploadimage.png" class="upload-icon" style="width:50%"><br>
                        <input type="file" id="input" class="upload-input" name="image" accept="image/*" />
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card shadow border-0">
                  <div class="card-body text-center">
                    <img src="../images/defaultoutputimage.png" alt="image" id="img" style="width:50%; height:213px; object-fit: cover; object-position: center;object-position: 50% 50%;">
                    <br>
                    <button class="btn btn-primary" type="submit">Proses</button>
                  </div>
                </div>

                <!-- PERHITUNGAN RGB, HSV, GLCM -->
                <br><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
                  $image = $_FILES['image'];

                  if ($image['error'] === UPLOAD_ERR_OK) {
                    $tmpName = $image['tmp_name'];

                    // Load the image
                    $imageResource = imagecreatefromstring(file_get_contents($tmpName));

                    // Get image dimensions
                    $imageWidth = imagesx($imageResource);
                    $imageHeight = imagesy($imageResource);

                    // Get image type
                    $imageInfo = getimagesize($tmpName);
                    $imageType = $imageInfo[2];

                    // Check if the uploaded file is an image
                    if ($imageType === IMAGETYPE_JPEG || $imageType === IMAGETYPE_PNG || $imageType === IMAGETYPE_GIF) {
                      // Display the uploaded image
                      echo "<img src='data:image/jpeg;base64," . base64_encode(file_get_contents($tmpName)) . "' alt='Uploaded Image'>";
                    } else {
                      echo "Uploaded file is not a valid image.";
                    }

                    // Get RGB value at a specific pixel (e.g., center of the image)
                    $x = $imageWidth / 2;
                    $y = $imageHeight / 2;
                    $rgb = imagecolorat($imageResource, $x, $y);

                    // Extract R, G, B values
                    $red = ($rgb >> 16) & 0xFF;
                    $green = ($rgb >> 8) & 0xFF;
                    $blue = $rgb & 0xFF;



                    // Calculate HSV value at a specific pixel (e.g., center of the image)
                    $x = $imageWidth / 2;
                    $y = $imageHeight / 2;

                    $rgb = imagecolorat($imageResource, $x, $y);
                    $red = ($rgb >> 16) & 0xFF;
                    $green = ($rgb >> 8) & 0xFF;
                    $blue = $rgb & 0xFF;

                    $r = $red / 255.0;
                    $g = $green / 255.0;
                    $b = $blue / 255.0;

                    $max = max($r, $g, $b);
                    $min = min($r, $g, $b);
                    $delta = $max - $min;

                    $value = $max;
                    $saturation = ($max != 0) ? $delta / $max : 0;

                    if ($delta == 0) {
                      $hue = 0;
                    } elseif ($max == $r) {
                      $hue = 60 * fmod((($g - $b) / $delta), 6);
                    } elseif ($max == $g) {
                      $hue = 60 * (($b - $r) / $delta + 2);
                    } else {
                      $hue = 60 * (($r - $g) / $delta + 4);
                    }

                    if ($hue < 0) {
                      $hue += 360;
                    }

                    function hitungEnergi($imagePath)
                    {
                      $image = imagecreatefromjpeg($imagePath); // Ganti dengan format gambar yang sesuai
                      $width = imagesx($image);
                      $height = imagesy($image);
                      $energi = 0;

                      for ($x = 0; $x < $width; $x++) {
                        for ($y = 0; $y < $height; $y++) {
                          $rgb = imagecolorat($image, $x, $y);
                          $colors = imagecolorsforindex($image, $rgb);
                          $gray = ($colors['red'] + $colors['green'] + $colors['blue']) / 3;
                          $energi += $gray * $gray;
                        }
                      }

                      return $energi;
                    }

                    // Fungsi untuk menghitung entropi suatu gambar
                    function hitungEntropi($imagePath)
                    {
                      // Ganti dengan format gambar yang sesuai
                      $image = imagecreatefromjpeg($imagePath);
                      $width = imagesx($image);
                      $height = imagesy($image);
                      $histogram = array_fill(0, 256, 0);
                      $totalPixels = $width * $height;
                      $entropi = 0;

                      for ($x = 0; $x < $width; $x++) {
                        for ($y = 0; $y < $height; $y++) {
                          $rgb = imagecolorat($image, $x, $y);
                          $colors = imagecolorsforindex($image, $rgb);
                          $gray = ($colors['red'] + $colors['green'] + $colors['blue']) / 3;
                          $histogram[$gray]++;
                        }
                      }

                      foreach ($histogram as $value) {
                        if ($value > 0) {
                          $probability = $value / $totalPixels;
                          $entropi -= $probability * log($probability, 2);
                        }
                      }

                      return $entropi;
                    }

                    // Fungsi untuk menghitung kontras suatu gambar
                    function hitungKontras($imagePath)
                    {
                      $image = imagecreatefromjpeg($imagePath); // Ganti dengan format gambar yang sesuai
                      $width = imagesx($image);
                      $height = imagesy($image);
                      $grayValues = array();

                      for ($x = 0; $x < $width; $x++) {
                        for ($y = 0; $y < $height; $y++) {
                          $rgb = imagecolorat($image, $x, $y);
                          $colors = imagecolorsforindex($image, $rgb);
                          $gray = ($colors['red'] + $colors['green'] + $colors['blue']) / 3;
                          $grayValues[] = $gray;
                        }
                      }

                      $maxGray = max($grayValues);
                      $minGray = min($grayValues);

                      return $maxGray - $minGray;
                    }

                    // Fungsi untuk menghitung homogenitas suatu gambar
                    function hitungHomogenitas($imagePath)
                    {
                      $image = imagecreatefromjpeg($imagePath); // Ganti dengan format gambar yang sesuai
                      $width = imagesx($image);
                      $height = imagesy($image);
                      $homogenitas = 0;

                      for ($x = 0; $x < $width; $x++) {
                        for ($y = 0; $y < $height; $y++) {
                          $rgb = imagecolorat($image, $x, $y);
                          $colors = imagecolorsforindex($image, $rgb);
                          $gray = ($colors['red'] + $colors['green'] + $colors['blue']) / 3;

                          if ($x < $width - 1) {
                            $rightPixelRgb = imagecolorat($image, $x + 1, $y);
                            $rightPixelColors = imagecolorsforindex($image, $rightPixelRgb);
                            $rightPixelGray = ($rightPixelColors['red'] + $rightPixelColors['green'] + $rightPixelColors['blue']) / 3;

                            $homogenitas += abs($gray - $rightPixelGray);
                          }

                          if ($y < $height - 1) {
                            $bottomPixelRgb = imagecolorat($image, $x, $y + 1);
                            $bottomPixelColors = imagecolorsforindex($image, $bottomPixelRgb);
                            $bottomPixelGray = ($bottomPixelColors['red'] + $bottomPixelColors['green'] + $bottomPixelColors['blue']) / 3;

                            $homogenitas += abs($gray - $bottomPixelGray);
                          }
                        }
                      }

                      return $homogenitas;
                    }

                    // Free memory
                    imagedestroy($imageResource);
                  } else {
                    echo "<br>Gambar belum diupload";
                  }
                  $imagePath = 'contoh2.jpg'; // Ganti dengan path gambar Anda
                  $energi = hitungEnergi($imagePath);
                  $entropi = hitungEntropi($imagePath);
                  $kontras  = hitungKontras($imagePath);
                  $homogenitas = hitungHomogenitas($imagePath);
                }
                ?>


                <!-- TAMPILAN HASIL PERHITUNGAN -->

                </form>

                <!-- function input data -->
                <?php
                // include "../koneksi.php";

                if (isset($_POST['proses'])) {
                  mysqli_query($conn, "insert into data_uji set gambar = '$_POST[gambar]'");
                }
                ?>

                <!-- HSV -->
              </div>
              <div class="col-md-6" style="margin-top: -50px;">
                <div class="card shadow border-0">
                  <div class="card-body">
                    Nilai HSV
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Red</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($red)) {
                          echo ": $red";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Green</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($green)) {
                          echo ": $green";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Blue</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($blue)) {
                          echo ": $blue";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Hue</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($hue)) {
                          echo ": $hue";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Saturation</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($saturation)) {
                          echo ": $saturation";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Value</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($value)) {
                          echo ": $value";
                        } ?>
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="margin-top: -50px;">
                <div class="card shadow border-0">
                  <div class="card-body">
                    Nilai GLCM
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Energi</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($energi)) {
                          echo ": $energi";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Entropi</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($entropi)) {
                          echo ": $entropi";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0">Kontras</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($kontras)) {
                          echo ": $kontras";
                        } ?>
                      </div>
                      <hr>
                      <div class="col-sm-3">
                        <h6 class="mb-0" style="font-size: 14px;">Homogenitas</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                        <?php if (isset($homogenitas)) {
                          echo ": $homogenitas";
                        } ?>
                      </div>
                      <hr>
                    </div>
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

  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/circles.min.js"></script>
  <script src="../js/custom.js"></script>
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