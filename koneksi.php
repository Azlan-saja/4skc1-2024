<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_4skc1";

// Eksekusi Koneksi
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Cek Koneksi
if ($connection) {
    // echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}
