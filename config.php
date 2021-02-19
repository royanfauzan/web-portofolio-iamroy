<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "webroyski";

// $server = "sql305.byethost17.com";
// $user = "b17_26804144";
// $password = "Stupid125";
// $nama_database = "b17_26804144_webroyski";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
