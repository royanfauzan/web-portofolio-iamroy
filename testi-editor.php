<?php
include("config.php");

$id = $_POST['id'];

$nama       = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['nama'])));
$profesi    = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['profesi'])));
$email      = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['email'])));
$testimoni  = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['testimoni'])));

$query  = "UPDATE guestbook SET nama = '$nama', profesi = '$profesi', email = '$email', testimoni = '$testimoni'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($db, $query);
                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($db).
                        " - ".mysqli_error($db));
                } else {
                    echo "<script>alert('Data berhasil diubah.');window.location='listadmin.php';</script>";
                }
?>