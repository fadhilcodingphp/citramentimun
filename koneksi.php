<?php
$servername = "localhost";
$database = "mentimunfira";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

session_start();
function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
             alert('username sudah terdaftar!')
             </script>";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$password2','2')");
    return mysqli_affected_rows($conn);
}


// role Login  
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and password= '$password'");
    $hitung = mysqli_num_rows($cekuser);

    if ($hitung > 0) {

        //kalau data ditemukan
        $ambildatarole = mysqli_fetch_array($cekuser);
        $role = $ambildatarole['role'];

        if ($role == '1') {
            //kalau dia admin
            $_SESSION['log'] = 'logged';
            $_SESSION['roleadmin'] = $username;
            header('location:dashboard.php');
        } else {
            //kalau bukan admin 
            $_SESSION['log'] = 'logged';
            $_SESSION['roleuser'] = $username;
            header('location:user/dashboard.php');
        }
    } else {
        $error = true;
    }
}
 
            // //set session
            // $_SESSION["login"] = true;

            // // cek remember me
            // if (isset($_POST['remember'])) {
            //     // buat cookie
            //     setcookie('id', $row['id'], time() + 60);
            //     setcookie('key', hash('sha256', $row['username']));

            //     //     setcookie ('login,'true',time() + 60);
            // }
            // header("Location : dashbord.php");
            // exit;
            
// session_start();

// // cek cookie
// if (isset($_COOKIE['login'])) {
//     if ($_COOKIE['login'] == 'true') {
//         $_SESSION['login'] = true;
//         //
//     }
// }

// if (isset($_SESSION['login'])) {
//     header("Location: dashboard.php");
//     exit;
// }
