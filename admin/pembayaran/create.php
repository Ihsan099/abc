<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM t_pembayaran");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Tambah Pembayaran</h1>
        <a href="./index.php" class="btn btn-light">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- // Form -->
                    <form action="./store.php" method="POST" enctype="multipart/form-data">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>Pesanan</td>
                                <td>
                                    <select class="form-control" name="pesanan" id="pesanan" required>
                                        <option value="">--Pilih--</option>
                                        <option value="Studio Musik">Studio Musik</option>
                                        <option value="Alat Musik">Alat Musik</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Id Pesanan</td>
                                <td><input class="form-control" type="text" name="id_pesanan"></td>
                            </tr>
                            <tr>
                                <td>Biaya</td>
                                <td><input class="form-control" type="number" name="biaya"></td>
                            </tr>
                            <tr>
                                <td>tgl_pembayaran</td>
                                <td><input class="form-control" type="date" name="tgl_pembayaran"></td>
                            </tr>
                            <tr>
                                <td>Upload Bukti Pembayaran</td>
                                <td><input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required /></td>
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