<?php
    include 'koneksi.php';

    $query = "SELECT * FROM pendaftar;";

    $sql = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bg-light-blue {
            background-color: lightblue;
            border-radius: 20px;
        }
    </style>
    <title>Pilihan Beasiswa</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Beasiswa Ku</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active bg-light-blue'; ?> px-4" href="index.php">Pilihan Beasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'tambah.php') echo 'active bg-light-blue'; ?> px-4" href="tambah.php">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'hasil.php') echo 'active bg-light-blue'; ?> px-4" href="hasil.php">Hasil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- content -->
    <div class="container pt-5 bg-light">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <h3>Selamat datang di Halaman Pendaftaran Beasiswa</h3><br>
                <p>Terdapat <b>2 pilihan beasiswa</b> yang akan di berikan kepada mahasiswa yang mempunyai prestasi akademik maupun nonakademik yakni Beasiswa Akademik dan Beasiswa Non Akademik.</p><br>                
                
                <ul>
                    <li><b>Beasiswa Akademik</b></li>
                        <p>Beasiswa Akademik diberikan berdasarkan prestasi akademik, seperti IPK dan nilai ujian. Tujuannya adalah untuk mendukung siswa berprestasi.</p>
                        <p>Berikut ini merupakan syarat pendaftaran :</p>  
                        <ol type="1">
                            <li>Mahasiswa aktif STMIK IKMI Cirebon</li>
                            <li>Mengupload berkas-berkas di bawah dalam satu file pdf</li>
                            <ol type="a">
                                <li>Melampirkan scan KTP</li>
                                <li>Melampirkan scan KTM</li>
                                <li>Melampirkan scan Kartu Hasil Studi</li>
                                <li>Melampirkan scan Sertifikat prestasi akademik</li>
                            </ol>
                        </ol>
                    </p><br>
                   
                    <li><b>Beasiswa Non Akademik</b></li>
                        <p>Beasiswa Non Akademik diberikan berdasarkan bakat, minat, prestasi olahraga, seni, kepemimpinan, atau kontribusi sosial. Fokus pada aspek selain prestasi akademik.</p>
                        <p>Berikut ini merupakan syarat pendaftaran :</p>
                        <ol type="1">
                            <li>Mahasiswa aktif STMIK IKMI Cirebon</li>
                            <li>Mengupload berkas-berkas di bawah dalam satu file pdf</li>
                            <ol type="a">
                                <li>Melampirkan scan KTP</li>
                                <li>Melampirkan scan KTM</li>
                                <li>Melampirkan scan Kartu Hasil Studi</li>
                                <li>Melampirkan scan Sertifikat prestasi non akademik</li>
                            </ol>
                        </ol>
                    </p>
                </ul>
                <a href="tambah.php" class="btn btn-primary my-5">Daftar Sekarang</a>
            </div>
        </div>
    </div>
    <!-- end content -->

    <footer>
        <div class="row text-center p-4 bg-light">
            <span>Copyright &copy; Kampusku.ac.id</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
