<?php
include("config.php");

$nama       = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['nama'])));
$profesi    = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['profesi'])));
$email      = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['email'])));
$testimoni  = htmlentities(mysqli_real_escape_string($db,strip_tags($_POST['testimoni'])));

$query = "INSERT INTO guestbook (nama, profesi, email, testimoni) VALUES ('$nama', '$profesi', '$email', '$testimoni')";
$result = mysqli_query($db, $query);
                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($db).
                        " - ".mysqli_error($db));
                } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='listtamu.php';</script>";
                }

?>