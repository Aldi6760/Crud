<?php
require('sqlconect.php');
// mengecek apakah from sudah di kirim
if(isset($_POST['submit'])){
// mengambil data dari from input
    $namaMahasiswa = $_POST['nama'];
    $nimMahasiswa = $_POST['nim'];
    $prodiMahasiswa = $_POST['prodi'];
    $alamatMahasiswa = $_POST['alamat'];
    // menjalankan query untuk menambahakan data baru
    $insertData = mysqli_query($conn, "INSERT INTO utspwtm (id, nama, nim, prodi, alamat) VALUES (null, '$namaMahasiswa', '$nimMahasiswa', '$prodiMahasiswa', '$alamatMahasiswa')");
// jika query berhasil maka data di tambahakan di database
    if(mysqli_affected_rows($conn) > 0) {
        header('Location: portfolio.php');
        exit;
    }

}

if(isset($_POST['submit-2'])) {
    $namaMahasiswa = $_POST['nama-2'];
    $nimMahasiswa = $_POST['nim-2'];
    $prodiMahasiswa = $_POST['prodi-2'];
    $alamatMahasiswa = $_POST['alamat-2'];

    $cekData = mysqli_query($conn, "SELECT * FROM utspwtm WHERE nim = '$nimMahasiswa' ");
    $dataArray = mysqli_fetch_assoc($cekData);
// memastikan apakah data dengan Nim di temukan
    if(mysqli_num_rows($cekData) > 0) {
        // jika input nama ada pakai yang baru
        // jika kosong pakai yang ada di db
        if(strlen($namaMahasiswa) > 0) {
            $namaMahasiswa = $namaMahasiswa;
        } else {
            $namaMahasiswa = $dataArray['nama'];
        }

        if(strlen($prodiMahasiswa) > 0) {
            $prodiMahasiswa = $prodiMahasiswa;
        } else {
            $prodiMahasiswa = $dataArray['prodi'];
        }

        if(strlen($alamatMahasiswa) > 0) {
            $alamatMahasiswa = $alamatMahasiswa;
        } else {
            $alamatMahasiswa = $dataArray['alamat'];
        }

        mysqli_query($conn, "UPDATE utspwtm SET nama = '$namaMahasiswa', prodi = '$prodiMahasiswa', alamat = '$alamatMahasiswa' ");

        header('Location: portfolio.php');
        exit;

    }

}

