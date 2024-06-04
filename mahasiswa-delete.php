<?php
session_start();

include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM tbl_mahasiswa WHERE `tbl_mahasiswa`.`id` = $id";

//kondisi pengecekan apakah data berhasil dihapus atau tidak
if ($connection->query($query)) {

    //alihkan otomatis ke halaman mahasiswa
    header("location: index.php?page=mahasiswa");

    //pesan berhasil hapus data
    $_SESSION['pesan'] = "Data Berhasil Dihapus!";
} else {
    //pesan error gagal hapus data
    $_SESSION['pesan'] = "Data Gagal Dihapus!";
}
