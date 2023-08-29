<?php

include 'functions.php';


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
    <title>Pendaftaran</title>
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
    
    <!-- form pendaftaran -->
    <div class="container justify-content-center my-4">
        <div class="row text-center mb-4">
            <h2>DAFTAR BEASISWA</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 border">
                <span><b>Registrasi beasiswa</b></span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-8 border p-5">
                <form action="proses.php" method="post" enctype="multipart/form-data">    
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" required oninput="" oninvalid="setCustomValidity('Nama tidak boleh kosong!!')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required oninvalid="setCustomValidity('Email tidak boleh kosong!!')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-2 col-form-label">Nomor Hp</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="no_hp" name="no_hp" required oninvalid="setCustomValidity('Nomor hp tidak boleh kosong!!')" oninput="setCustomValidity('')">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-2 col-form-label">Semester</label>
                        <div class="col-sm-10">
                        <select name="semester" id="semester" class="form-select" aria-label="Default select example">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        </div>
                    </div>

                    <?php
                        $ipk = '';
                    ?>

                    <div class="mb-3 row">
                        <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="ipk" name="ipk" readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="no_hp" class="col-sm-2 col-form-label">Beasiswa</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="beasiswa" id="inputBeasiswa" <?= setDisable($ipk); ?>>
                            <option value="Akademik">Akademik</option>
                            <option value="Non-Akademik">Non-Akademik</option>
                        </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="berkas" class="col-sm-2 form-label">Berkas</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="berkas" id="inputBerkas" required oninvalid="setCustomValidity('Berkas tidak boleh kosong!!')" oninput="setCustomValidity('')" <?= setDisable($ipk); ?>>
                        </div>
                    </div>
                   
        
                    <div class="mb-3 row mt-5">
                        <div class="col">
                            <button type="submit" id="tombolDaftar" name="daftar" class="btn btn-primary" <?= setDisable($ipk); ?>>Daftar</button>
                            <a href="index.php" type="button" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </form>
            </div>

        <!-- pop up email tidak diketahui -->
        <div class="modal fade" id="warningModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Maaf Email anda tidak teridentifikasi</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
        <!-- end pop up -->


        </div>
    </div>
    <!-- end form pendaftaran -->

    <footer>
        <div class="row text-center p-4 bg-light">
            <span>Copyright &copy; Kampusku.ac.id</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            //respon saat isi elemen dengan id email
            $("#email").change(function() {
                var email = $("#email").val(); // Mengambil nilai email dari elemen input dengan id "email"

                if (email == "adi@gmail.com") {
                    // Mengatur nilai dan perilaku elemen-elemen lain berdasarkan email
                    $("#ipk").val("3.4");  // Mengatur nilai IPK pada input dengan id "ipk"
                    $("#tombolDaftar").prop("disabled", false);  // Mengaktifkan tombol "Daftar"
                    $("#inputBerkas").prop("disabled", false);   // Mengaktifkan input berkas
                    $("#inputBeasiswa").prop("disabled", false);  // Mengaktifkan input beasiswa

                } else if (email == "asep@gmail.com") {
                    $("#ipk").val("2.4"); 
                    $("#tombolDaftar").prop("disabled", true);
                    $("#inputBerkas").prop("disabled", true);
                    $("#inputBeasiswa").prop("disabled", true);

                } else {
                    // Jika email tidak cocok dengan kondisi di atas
                    $("#warningModal").modal("show");  // Menampilkan modal peringatan
                    $("#tombolDaftar").prop("disabled", true);  // Menonaktifkan tombol "Daftar"
                }
            });
        });
    </script>

    

  </body>
</html>
