<?php
session_start();

//Panggil koneksi database
include('koneksi.php');

//GET data dari form
$id = $_POST['id'];
$nirm = $_POST['nirm'];
$nama = $_POST['nama'];
$whatsapp = $_POST['whatsapp'];

//query update - ubah data di database
$query = "UPDATE `tbl_mahasiswa` SET `nirm` = '$nirm', `nama` = '$nama', `whatsapp` = '$whatsapp' WHERE `tbl_mahasiswa`.`id` = $id;";

//kondisi pengecekan apakah data berhasil diubah atau tidak
if ($connection->query($query)) {

    //alihkan otomatis ke halaman mahasiswa
    header("location: index.php?page=mahasiswa");

    //pesan berhasil ubah data
    $_SESSION['pesan'] = "Perubahan Data Berhasil Disimpan!";
} else {
    //pesan error gagal ubah data
    $_SESSION['pesan'] = "Perubahan Data Gagal Disimpan!";
}