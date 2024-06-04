<?php
include('koneksi.php');
$tampil_data = [];
$query = mysqli_query($connection, "SELECT * FROM `tbl_mahasiswa` Order By id DESC");
while ($row = mysqli_fetch_array($query)) {
    $tampil_data[] = [
        'id' => $row['id'],
        'nirm' => $row['nirm'],
        'nama' => $row['nama'],
        'whatsapp' => $row['whatsapp'],
    ];
}

?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Data Mahasiswa </h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa Baru</h6>
        </div>
        <div class="card-body">

            <!-- Tampilkan Pesan => START -->
            <?php

            if (isset($_SESSION['pesan'])) {
                echo '
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        ' . $_SESSION['pesan'] . '
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                ';
                // Hapus pesan flash setelah ditampilkan
                unset($_SESSION['pesan']);
            }
            ?>
            <!-- Tampilkan Pesan => END -->

            <form method="POST" action="mahasiswa-create.php">
                <div class="form-group row">
                    <label for="nirm" class="col-sm-2 col-form-label text-right">NIRM :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nirm" placeholder="xx......" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label text-right">Nama :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" placeholder="xx......" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="whatsapp" class="col-sm-2 col-form-label text-right">Whatsapp :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="whatsapp" placeholder="xx......" rerequired>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span>
                    </button>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
            </form>

            <div class="table-responsive">

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th> # </th>
                            <th> NIRM </th>
                            <th> Nama </th>
                            <th> Whatsapp</th>
                            <th> Fitur </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        for ($i = 0; $i < count($tampil_data); $i++) {
                            echo '
                               <tr>
                                <td> ' . $i + 1 . ' </td>
                                <td> ' . $tampil_data[$i]['nirm'] . '     </td>
                                <td> ' . $tampil_data[$i]['nama'] . '     </td>
                                <td> ' . $tampil_data[$i]['whatsapp'] . ' </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=mahasiswa-edit&id=' . $tampil_data[$i]['id'] . '" class="btn btn-info btn-sm">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <a href="mahasiswa-delete.php?id=' . $tampil_data[$i]['id'] . '" type="button"
                                            onclick="return confirm(`Yakin Hapus?`)" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            ';
                        }
                        ?>



                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>