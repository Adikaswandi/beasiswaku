<?php

// fungsi disable ipk
function setDisable($ipk){
    $result = "";
    if ($ipk < 3){
        $result = "disabled";
    }
    return $result;
}


//fungsi upload file
function uploadFile($file) {
    $targetDir = "uploads/"; // Folder penyimpanan berkas
    $targetPath = $targetDir . basename($file["name"]); // Path lengkap berkas yang akan diunggah

    // Move berkas dari temporary directory ke lokasi yang ditentukan
    if (move_uploaded_file($file["tmp_name"], $targetPath)) {
        return $targetPath; // Mengembalikan path berkas yang berhasil diunggah
    } else {
        return false; // Mengembalikan false jika terjadi kesalahan pengunggahan
    }
}
?>