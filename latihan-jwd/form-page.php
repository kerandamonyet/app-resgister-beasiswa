<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa UNIKU | Universitas Kuningan</title>
    <!-- Script Booststrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <style>
      
      button {
        width: 100%;
        margin: 0;
    }

    tr,td {
        padding: 1rem;
    }
    input, select{
        width: 100%;
        padding: 0.5rem;
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
          <a class="nav-link active" href="#" target="_self">Daftar Beasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="hasil.php" target="_self">Hasil</a>
        </li>
      </ul>
      <span class="navbar-text">
        Universitas Kuningan
      </span>
    </div>
  </div>
</nav>
<div class="container mb-3">
    <h3 class="h3 text-center mt-5 mb-5">Daftar Beasiswa</h3>
    <form action="hasil.php" class="form" method="POST" name="formBeasiswa" enctype="multipart/form-data" onsubmit="return validateEmail();">
        <table class="table text-center" align="center" border="1">
            <tr>
                <div class="form-group">
                    <td colspan="3">        
                        <p class="text-start"><strong>Registrasi Beasiswa</strong></p>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="nama">Masukkan Nama</label></td>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="nama" placeholder="ex: Robert Darwin" required></td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="email">Masukkan Email</label></td>
                    <td>:</td>
                    <td><input type="email" name="email" id="email" class="form-control" placeholder="example@uniku.ac.id"  required></td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="nohp">nomor HP</label></td>
                    <td>:</td>
                    <td><input type="number" name="nohp" id="nohp" class="form-control" placeholder="ex: 08123456789" required></td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="semester">Semester saat ini </label></td>
                    <td>:</td>
                    <td><select name="semester" id="semester" onchange="tampil()" required>
                            <option value="-" selected disabled>--Pilih Salah Satu--</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            <option value="6"> 6</option>
                            <option value="7"> 7</option>
                            <option value="8"> 8</option>
                        </select>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group">
                    <td><label for="ipk">IPK terakhir</label></td>
                    <td>:</td>
                    <td><input type="text" name="nilai_ipk" readonly></td>
                </div>
            </tr>
            <tr id="rowBeasiswa" style="display: none;">
                <div class="form-group " >
                    <td><label for="beasiswa">Pilihan Beasiswa</label></td>
                    <td>:</td>
                    <td><select name="beasiswa" id="beasiswa">
                            <option value="-" disabled>--Pilih Salah Satu--</option>
                            <option value="Bidikmisi">Beasiswa Bidikmisi</option>
                            <option value="PPA">Beasiswa PPA</option>
                            <option value="UNIKU Peduli">Beasiswa UNIKU Peduli</option>
                    </select></td>
                </div>
            </tr>
            <tr id="rowBerkas" style="display: none;">
                <div class="form-group " >
                    <td><label for="berkas">Uploud Berkas Syarat</label></td>
                    <td>:</td>
                    <td><input type="file" name="berkas" id="berkas" class="form-control" accept=".zip, .rar, .pdf" required></td>
                </div>
            </tr>
        </table>
        <div class="row mt-4" >
            <div class="col text-center" >
                <p class="text-danger" id="errorMessage" style="display: none;">Maaf, anda tidak memenuhi syarat ketentuan</p>
            </div>
        </div>
        <div class="form-group">
        <div class="row m-3">
                <div class="col">
                    <button type="reset" value="Batal" name="btnReset" id="btnReset" class="btn btn-danger" disabled> Batal </button>
                </div>
                <div class="col">
                    <button type="submit" value="Daftar" name="btnSubmit" id="btnSubmit" class="btn btn-primary" disabled> Daftar </button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="dist/js/form-page.js"></script>
<?php 
    include 'footer.php';
?>
</body>
</html>