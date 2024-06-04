<?php
session_start();

//Panggil koneksi database
include('koneksi.php');

//GET data dari form
$nirm = $_POST['nirm'];
$nama = $_POST['nama'];
$whatsapp = $_POST['whatsapp'];


//query create - simpan data ke dalam database
$query = "INSERT INTO `tbl_mahasiswa` (`id`, `nirm`, `nama`, `whatsapp`) VALUES (NULL, '$nirm', '$nama', '$whatsapp')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //alihkan otomatis ke halaman mahasiswa
    header("location: index.php?page=mahasiswa");

    //pesan berhasil simpan data
    $_SESSION['pesan'] = "Data Berhasil Disimpan!";
} else {

    //pesan error gagal simpan data
    $_SESSION['pesan'] = "Data Gagal Disimpan!";
}
