<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$studio = mysqli_query($connection, "SELECT * FROM t_pemesanan");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Tambah Pemesanan</h1>
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
                                <td>No Telepon</td>
                                <td><input class="form-control" type="text" name="no_telp"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="form-control" type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td><input class="form-control" type="date" name="tgl_pemesanan"></td>
                            </tr>
                            <tr>
                                <td>Studio</td>
                                <td>
                                    <select class="form-control" name="studio" id="studio" required>
                                        <option value="">--Pilih--</option>
                                        <option value="Studio 1">Studio 1</option>
                                        <option value="Studio 2">Studio 2</option>
                                        <option value="Studio 3">Studio 3</option>
                                        <option value="Studio 4">Studio 4</option>
                                        <option value="Studio 5">Studio 5</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Jam</td>
                                <td><input class="form-control" type="number" name="jumlah_jam"></td>
                            </tr>
                            <tr>
                                <td>Waktu Mulai</td>
                                <td><input class="form-control" type="time" name="waktu_mulai"></td>
                            </tr>
                            <tr>
                                <td>Waktu selesai</td>
                                <td><input class="form-control" type="time" name="waktu_selesai"></td>
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