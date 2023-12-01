<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa UNIKU | Universitas Kuningan</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <style>
      
      main {
        font-family: Arial, Helvetica, sans-serif;
      }

      main .container .content-1 h2.h2 {
        margin: 5rem 0;
      }


      main .content-2  p {
        font-weight: 500;
      }

      main .content-3 {
        margin-top: 3rem;
        margin-bottom: 3rem;
        margin-left: 13rem;
      }
    </style>

</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-warning">
      <div class="container-fluid p-2">
        <div class="collapse navbar-collapse justify-content-between" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" target="_self">Pilihan Beasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" target="_self">Daftar Beasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="hasil.php" target="_self">Hasil</a>
            </li>
          </ul>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>

          <!-- Modal -->
          <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="loginModalLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="proses_login.php" method="post" onsubmit="return validateEmail();">
                    <div class="form-group">
                      <label for="email">Email :</label>
                      <input type="email" name="email" id="email" class="form-control" required> 
                    </div>
                    <div class="form-group pt-2">
                      <label for="password">Password :</label>
                      <input type="password" name="password" id="password" class="form-control" required> 
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" name="btnLogin">Login</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="container">
      <div class="row content-1 ">
        <div class="col">
          <h2 class="h2 text-center text-underline-warning">Beasiswa di <span class="text-warning">Universitas Kuningan</span></h2>
        </div>
      </div>
      <div class="row content-2 m-3">
        <div class="col">
          <div class="card">
            <div class="card-header bg-warning">
              <h3 class="h3">Beasiswa PPA</h3>
            </div>
            <div class="card-body">
              <p>Beasiswa Peningkatan Prestasi Akademik (PPA) merupakan beasiswa yang berasal dari Pemerintah melalui Direktorat Pembelajaran dan Kemahasiswaan, Kemristekdikti, untuk diberikan kepada mahasiswa yang mempunyai prestasi tinggi. Universitas Kuningan termasuk yang diberikan beasiswa yang nantinya disalurkan ke mahasiswa yang berprestasi.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header bg-warning">
              <h3 class="h3">Beasiswa Bidikmisi</h3>
            </div>
            <div class="card-body">
              <p>Beasiswa Bidikmisi merupakan bantuan biaya pendidikan dari pemerintah Republik Indonesia melalui Direktorat Jenderal Pendidikan Tinggi, Kementerian Pendidikan dan Kebudayaan bagi calon mahasiswa yang akan masuk perguruan tinggi yang tidak mampu secara ekonomi dan memiliki potensi akademik, baik untuk menempuh pendidikan di perguruan tinggi pada program studi unggulan sampai lulus tepat waktu.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header bg-warning">
              <h3 class="h3">Beasiswa UNIKU Peduli</h3>
            </div>
            <div class="card-body">
              <p>Beasiswa UNIKU Peduli merupakan beasiswa yang diberikan dari UNIKU dengan harapan dapat bermanfaat dan menghasilkan sinergi yang berguna bagi peningkatan kualitas pendidikan di Universitas Kuningan dan sekaligus menumbuhkan kecintaan terhadap almamater.</p>
            </div>
          </div>
        </div>
      <div class="row content-3">
        <div class="col">
          <article>
              <h3 class="h3">Persyaratan Umum Beasiswa : </h3>
              <ol>
                <li>Surat Keterangan Aktif Kuliah</li>
                <li>FotoCopy KTP</li>
                <li>FotoCopy KTM</li>
                <li>FotoCopy KRS</li>
                <li>Transkrip Nilai (IPK)</li>
                <li>Surat Keterangan Tidak Menerima Beasiswa Lain</li>
                <li>Surat Keterangan Tidak Mampu</li>
                <li>Penghasilan Orangtua dan Forlap Dikti</li>
              </ol>
          </article>
        </div>
      </div>
    </div>
  </main>
  <script src="dist/js/index.js"></script>
<?php
  include 'footer.php';
?>
</body>
</html>