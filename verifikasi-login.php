<?php
session_start();
include('config.php');
if(isset($_SESSION['username'])) {
    echo '<script>window.location.replace("./listadmin.php");</script>';
} else {



if(isset($_POST['username']) && isset($_POST['passw'])) {

    $username=mysqli_real_escape_string($db,$_POST['username']);
    $passw=mysqli_real_escape_string($db,$_POST['passw']);

    $query .= "SELECT*FROM verifikasi WHERE username = '$username' AND passw = '$passw'";
    $result = mysqli_query($db, $query);
    $ceker = mysqli_num_rows($result);

	if($ceker) {
		session_start();
		$_SESSION['username'] = $username;
		echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
		echo "<script>alert('Login Berhasil.');window.location='listadmin.php';</script>";
	} else{
        echo "<script>alert('Login Gagal, Username atau password salah!');window.location='listtamu.php';</script>";
    }
} else {
	echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
}
}
?>