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

        footer {
            margin-top: 300px;
        }
    </style>
    <title>Hasil</title>
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

    <!-- Data table mahasisa -->
    <div class="container">
        <h2 class="mt-4">Tabel Hasi Pendaftaran</h2>
        <table class="table table-bordered align-middle table-hover">
            <thead class="text-center">
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Hp</th>
                <th>Semester</th>
                <th>IPK</th>
                <th>Beasiswa</th>
                <th>Statuh ajuan</th>
                <th>Berkas</th>
            </thead>
            <tbody>
                <?php
                    $id = 1;
                    while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <td class="text-center"><?= $id++; ?>.</td>
                    <td><?= $result['nama']; ?></td>
                    <td><?= $result['email']; ?></td>
                    <td><?= $result['no_hp']; ?></td>
                    <td><?= $result['semester']; ?></td>
                    <td><?= $result['ipk']; ?></td>
                    <td><?= $result['beasiswa']; ?></td>
                    <td><?= $result['status_ajuan']; ?></td>                    
                    <td><?= $result['berkas']; ?></td>                    
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <!-- end table -->

    <footer>
        <div class="row text-center p-4 bg-light">
            <span>Copyright &copy; Kampusku.ac.id</span>
        </div>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
