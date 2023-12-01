<?php
include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $query = mysqli_query($conn, "SELECT * FROM tbl_login WHERE email = '$email' && password = '$password'");
    if($hasil = mysqli_fetch_assoc($query)) {
        header('location: form-page.php');
    } else {
        header('location: index.php');
    }
}
?>