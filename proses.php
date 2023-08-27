<?php
include_once('koneksi.php');
include_once('functions.php');

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk']; // asumsi ipk dari sistem
    $beasiswa = $_POST['beasiswa'];
    $status_ajuan = "belum di verifikasi";
    
    $berkasPath = uploadFile($_FILES["berkas"]);

    if ($berkasPath !== false) {
        $query = "INSERT INTO pendaftar VALUES (null, '$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$status_ajuan', '$berkasPath')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            echo "<script>alert('Pendaftaran berhasil');window.location='hasil.php'</script>";
        } else {
            echo $query;
        }
    } else {
        echo "Gagal mengunggah berkas.";
    }
}
?>
