<?php


session_start();


include 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];


$data = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");


$report = mysqli_num_rows($data);


if($report > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:blank.php");
}else{
    header("location:login.php?pesan=gagal");
}


?>