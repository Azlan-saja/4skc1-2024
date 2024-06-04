<!-- A. START ============================================= -->
<!-- Koneksi.php -->
<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "#";
$db_name = "#";

// Eksekusi Koneksi
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Cek Koneksi
if ($connection) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : " . mysqli_connect_error();
}

?>
<!-- A. END ============================================= -->










<!-- B. START ============================================= -->
<!-- Konsep Create - Simpan -->

<?php

//Panggil koneksi database
include('koneksi.php');

//GET data dari form
$nirm       = $_POST['nirm'];

//query create - simpan data ke dalam database
$query = "#";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if ($connection->query($query)) {

    //alihkan otomatis ke halaman mahasiswa
    header("location: index.php?page=mahasiswa");

    //pesan berhasil simpan data
    echo "
        <script>
            alert('Data Berhasil Disimpan!');
        </script>
    ";
} else {
    //pesan error gagal simpan data
    echo "
        <script>
            alert('Data Gagal Disimpan!');
        </script>
    ";
}

?>
<!-- B. END ============================================= -->








<!-- C. START ============================================= -->
<!-- Konsep Read - Tampil Data -->
<?php
include('koneksi.php');
$tampil_data = [];
$query = mysqli_query($connection, "SELECT * FROM tbl_siswa");
while ($row = mysqli_fetch_array($query)) {
    $tampil_data = [
        'nirm' => $row['nirm'],
        'nama' => $row['nama'],
        'whatsapp' => $row['whatsapp'],
    ];
}
?>

<!-- tampilkan data di tabel menggunakan perulangan -->
<?php
for ($i = 0; $i < count($tampil_data); $i++) {
    echo "Nirm $tampil_data[$i]['nirm']";
}
?>
<!-- C. END ============================================= -->









<!-- D. START ============================================= -->
<!-- Konsep Update - Ubah -->
<!-- 1. Konsep Read - Ubah -->
<?php
include('koneksi.php');
$id = $_GET['id'];

$query = "#";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);
?>

<!-- Tampilkan data di form ubah data -->
<?php echo $row['nirm'] ?>



<!-- 2. Konsep Update - Ubah -->
<?php
//Panggil koneksi database
include('koneksi.php');

//GET data dari form
$nirm       = $_POST['nirm'];

//query update - ubah data di database
$query = "#";

//kondisi pengecekan apakah data berhasil diubah atau tidak
if ($connection->query($query)) {

    //alihkan otomatis ke halaman mahasiswa
    header("location: index.php?page=mahasiswa");

    //pesan berhasil ubah data
    echo "
        <script>
            alert('Perubahan Data Berhasil Disimpan!');
        </script>
    ";
} else {
    //pesan error gagal ubah data
    echo "
        <script>
            alert('Perubahan Data Gagal Disimpan!');
        </script>
    ";
}
?>
<!-- D. END ============================================= -->









<!-- E. START ============================================= -->
<!-- Konsep Deleta - Hapus -->

<?php

include('koneksi.php');
$id = $_GET['id'];
$query = "#";

//kondisi pengecekan apakah data berhasil dihapus atau tidak
if ($connection->query($query)) {

    //alihkan otomatis ke halaman mahasiswa
    header("location: index.php?page=mahasiswa");

    //pesan berhasil hapus data
    echo "
        <script>
            alert('Data Berhasil Dihapus!');
        </script>
    ";
} else {
    //pesan error gagal hapus data
    echo "
        <script>
            alert('Perubahan Data Gagal Dihapus!');
        </script>
    ";
}

?>
<!-- E. END ============================================= -->