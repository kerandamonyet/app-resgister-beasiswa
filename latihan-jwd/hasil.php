<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa UNIKU | Universitas Kuningan</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <style>
      * {
        font-family: Arial, Helvetica, sans-serif;
      }
      .card {
        margin: 5rem auto;
      }

    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-warning">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php" target="_self">Pilihan Beasiswa</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link" href="#" target="_self">Daftar Beasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#" target="_self">Hasil</a>
        </li>
      </ul>
      <span class="navbar-text">
        Universitas Kuningan
      </span>
    </div>
  </div>
</nav>
<div class="container mb-3 ">
    <div class="card p-2">
        <div class="card-header p-2">
            <h4 class="h4">Hasil Beasiswa</h4>
        </div>
        <div class="card-body p-4">
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $nohp = $_POST['nohp'];
                $semester = $_POST['semester'];
                $ipk = $_POST['nilai_ipk'];
                $beasiswa = $_POST['beasiswa'];
                $file = $_FILES['berkas']['name'];  

                // var_dump($file);
                // die();

                // dir untuk menyimpan file
                $dir = 'files/';

                // variable untuk menampung tmp dari file 
                $tmpFile = $_FILES['berkas']['tmp_name'];

                // memindahkan dari temp file ke dir yang diinginkan
                move_uploaded_file($tmpFile, $dir.$file);

                echo '<p><b>Nama Lengkap: </b>' . $nama . '</p>';
                echo '<p><b>Email : </b>' . $email . '</p>';
                echo '<p><b>Nomor HP : </b>' . $nohp . '</p>';
                echo '<p><b>Semester : </b>' . $semester . '</p>';
                echo '<p><b>IPK Terakhir : </b>' . $ipk . '</p>';
                echo '<p><b>Beasiswa : </b>' . $beasiswa . '</p>';
                echo '<p><b>Berkas Syarat : </b>' . $file . '</p>';
                echo '<p><b>Status Ajuan : </b> Belum di verifikasi </p>';
                echo '
                    <a href="index.php" class="btn btn-primary"> 
                        <i class="fa-solid fa-house"></i> 
                        Back to Home
                    </a>
                     ';
            };
        ?>  

        </div>
        <div class="card-footer">
            <p class="">Apapun Hasilnya tetap semangat ya :)</p>
        </div>
    </div>
    
</div>
<?php 
    include 'footer.php';
?>
</body>
</html>