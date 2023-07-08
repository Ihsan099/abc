<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_penyewaan = $_GET['id_penyewaan'];
$query = mysqli_query($connection, "SELECT * FROM t_penyewaan WHERE id_penyewaan='$id_penyewaan'");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>Ubah Data Pemesanan</h1>
        <a href="./index.php" class="btn btn-light">Kembali</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- // Form -->
                    <form action="./update.php" method="post">
                        <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                        <input type="hidden" name="id_penyewaan" value="<?= $row['id_penyewaan'] ?>">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>Id Pemesanan</td>
                                <td><input class="form-control" required value="<?= $row['id_penyewaan'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td><input class="form-control" type="text" name="nama_pelanggan" required
                                        value="<?= $row['nama_pelanggan'] ?>"></td>
                            </tr>
                            <tr>
                                <td>no_telp</td>
                                <td><input class="form-control" type="text" name="no_telp" required
                                        value="<?= $row['no_telp'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="form-control" type="text" name="email" required
                                        value="<?= $row['email'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Paket Alat Musik</td>
                                <td>
                                    <select class="form-control" name="paket" id="paket" required>
                                        <option value="" selected>--Pilih--</option>
                                        <option value="Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)"
                                            <?php echo ($row['paket'] == 'Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)') ? 'selected' : ''; ?>>
                                            Paket A (Gitar,
                                            Bass, Drum,
                                            Kabel Jack,
                                            Mixer Audio)</option>
                                        <option value="Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)"
                                            <?php echo ($row['paket'] == 'Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)') ? 'selected' : ''; ?>>
                                            Paket
                                            B (Gitar 1,
                                            Gitar 2, Amply Gitar, Piano, Stand mic)</option>
                                        <option value="Paket C (Cajon, Drum, Piano, Mixer Audio)"
                                            <?php echo ($row['paket'] == 'Paket C (Cajon, Drum, Piano, Mixer Audio)') ? 'selected' : ''; ?>>
                                            Paket C
                                            (Cajon, Drum,
                                            Piano, Mixer
                                            Audio)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Hari</td>
                                <td><input class="form-control" type="number" name="jumlah_hari"
                                        value="<?= $row['jumlah_hari'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Mulai Sewa</td>
                                <td><input class="form-control" type="date" name="tgl_sewa"
                                        value="<?= $row['tgl_sewa'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengembalian</td>
                                <td><input class="form-control" type="date" name="tgl_pengembalian"
                                        value="<?= $row['tgl_pengembalian'] ?>"></td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="btn btn-primary d-inline" type="submit" name="proses" value="Ubah">
                                    <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
                                <td>
                            </tr>
                        </table>

                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>