<?php
session_start();
if(isset($_SESSION['username'])) {
    session_destroy();
    echo "<script>alert('LogOut Berhasil');window.location='listtamu.php';</script>";
    
} else {
    echo "<script>alert('LogOut Gagal, login terlebih dahulu');window.location='listtamu.php';</script>";
}
?>