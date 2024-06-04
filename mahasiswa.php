<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Kelola Data Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa Baru</h6>
        </div>
        <div class="card-body">
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
                    <hr class="sidebar-divider d-none d-md-block">
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

                <table class="table table-bordered">
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

                        <tr>
                            <td>1</td>
                            <td>121323</td>
                            <td>Azlan</td>
                            <td>0853563636</td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=mahasiswa-edit&id=1" class="btn btn-info btn-sm">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="mahasiswa-delete.php?id=1" type="button" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                        Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>