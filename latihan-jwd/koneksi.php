<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_beasiswa';

$conn = mysqli_connect($server, $user, $pass, $dbname);

if(mysqli_connect_errno()) {
    echo 'Koneksi Gagal ...';
}


?>