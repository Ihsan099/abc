<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM t_pelanggan");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Tambah Pelanggan</h1>
        <a href="./index.php" class="btn btn-light">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- // Form -->
                    <form action="./store.php" method="POST">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>Nama pelanggan</td>
                                <td><input class="form-control" type="text" name="nama_pelanggan"></td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td><input class="form-control" type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><input class="form-control" type="number" name="no_telp"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="form-control" type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                                    <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>