<?php
    // $host = 'localhost';
    // $user = 'root';
    // $pass = '';
    // $db = 'pendaftaran_beasiswa';

    // $conn = mysqli_connect($host, $user, $pass, $db);

    // mysqli_select_db($conn, $db);

    $host = "localhost"; 
    $username = "root";
    $password = ""; 
    $database = "pendaftaran_beasiswa";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }



?>