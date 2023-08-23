<?php
    include_once ('koneksi.php');
    if(isset($_POST['daftar'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $semester = $_POST['semester'];
        $ipk = $_POST['ipk']; //asumsi ipk dari sistem
        $beasiswa = $_POST['beasiswa'];
        $status_ajuan = "belum di verifikasi";
        $berkas = $_POST['berkas'];
        
        $query = "INSERT INTO pendaftar VALUE(null, '$nama', '$email', '$no_hp', '$semester', '$ipk', '$beasiswa', '$status_ajuan', '$berkas')";
        $sql = mysqli_query($conn, $query);

        if($sql){
            //header("location: index.php");
            echo "<script>alert('Pendaftaran berhasil');window.location='hasil.php'</script>";
        } else {
            echo $query;
        }
    } 

?>
