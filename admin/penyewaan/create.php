<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$studio = mysqli_query($connection, "SELECT * FROM t_penyewaan");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Tambah Penyewaan Alat Musik</h1>
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
                                <td>Paket Alat Musik</td>
                                <td>
                                    <select class="form-control" name="paket" id="paket" required>
                                        <option value="">--Pilih--</option>
                                        <option
                                            value="Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)">
                                            Paket A (Gitar,
                                            Bass, Drum,
                                            Kabel Jack,
                                            Mixer Audio)</option>
                                        <option value="Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)">Paket
                                            B (Gitar 1,
                                            Gitar 2, Amply Gitar, Piano, Stand mic)</option>
                                        <option value="Paket C (Cajon, Drum, Piano, Mixer Audio)">Paket C (Cajon, Drum,
                                            Piano, Mixer
                                            Audio)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Hari</td>
                                <td><input class="form-control" type="number" name="jumlah_hari"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Mulai Sewa</td>
                                <td><input class="form-control" type="date" name="tgl_sewa"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengembalian</td>
                                <td><input class="form-control" type="date" name="tgl_pengembalian"></td>
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