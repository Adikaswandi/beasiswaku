<?php
include_once('koneksi.php');
include_once('functions.php');

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $beasiswa = $_POST['beasiswa'];
    $status_ajuan = "belum di verifikasi";
    
    // Menggunakan fungsi uploadFile untuk mengunggah berkas dan mendapatkan path berkas yang baru diunggah
    $berkasPath = uploadFile($_FILES["berkas"]);

    if ($berkasPath !== false) { // Jika berhasil mengunggah berkas
        // Membuat query untuk memasukkan data pendaftar ke database
        $query = "INSERT INTO pendaftar VALUES (null, '$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$status_ajuan', '$berkasPath')";
        $sql = mysqli_query($conn, $query); // Menjalankan query

        if ($sql) {
            echo "<script>alert('Pendaftaran berhasil');window.location='hasil.php'</script>"; // Menampilkan pesan berhasil dan mengarahkan ke halaman hasil.php
        } else {
            echo $query; // Jika query gagal, menampilkan query untuk keperluan debug
        }
    } else {
        echo "Gagal mengunggah berkas."; // Jika gagal mengunggah berkas, tampilkan pesan error
    }
}
?>
