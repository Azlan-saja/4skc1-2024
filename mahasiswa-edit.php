<?php

include('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM `tbl_mahasiswa` WHERE `tbl_mahasiswa`.`id` = $id";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_array($result);

?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Data Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Mahasiswa </h6>
        </div>
        <div class="card-body">
            <form method="POST" action="mahasiswa-update.php">
                <div class="form-group row">
                    <label for="nirm" class="col-sm-2 col-form-label text-right">NIRM :</label>
                    <div class="col-sm-10">
                        <input type="hidden" value="<?php echo $row['id'] ?>" class="form-control" name="id" required>
                        <input type="text" value="<?php echo $row['nirm'] ?>" class="form-control" name="nirm"
                            placeholder="xx......" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label text-right">Nama :</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['nama'] ?>" class="form-control" name="nama"
                            placeholder="xx......" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="whatsapp" class="col-sm-2 col-form-label text-right">Whatsapp :</label>
                    <div class="col-sm-10">
                        <input type="text" value="<?php echo $row['whatsapp'] ?>" class="form-control" name="whatsapp"
                            placeholder="xx......" required>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-info btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan Perubahan</span>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>