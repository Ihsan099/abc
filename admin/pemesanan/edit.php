<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_pemesanan = $_GET['id_pemesanan'];
$query = mysqli_query($connection, "SELECT * FROM t_pemesanan WHERE id_pemesanan='$id_pemesanan'");
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
                    <form action="./update.php" method="post" enctype="multipart/form-data">
                        <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                        <input type="hidden" name="id_pemesanan" value="<?= $row['id_pemesanan'] ?>">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>Id Pemesanan</td>
                                <td><input class="form-control" required value="<?= $row['id_pemesanan'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td><input class="form-control" type="text" name="nama_pelanggan" required
                                        value="<?= $row['nama_pelanggan'] ?>"></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><input class="form-control" type="text" name="no_telp" required
                                        value="<?= $row['no_telp'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input class="form-control" type="text" name="email" required
                                        value="<?= $row['email'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td><input class="form-control" type="date" name="tgl_pemesanan"
                                        value="<?= $row['tgl_pemesanan'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Studio</td>
                                <td>
                                    <select class="form-control" name="studio" id="studio">
                                        <option value="" selected>-- Pilih ---</option>
                                        <option value="Studio 1"
                                            <?php echo ($row['studio'] == 'Studio 1') ? 'selected' : ''; ?>>
                                            Studio 1
                                        </option>
                                        <option value="Studio 2"
                                            <?php echo ($row['studio'] == 'Studio 2') ? 'selected' : ''; ?>>
                                            Studio 2
                                        </option>
                                        <option value="Studio 3"
                                            <?php echo ($row['studio'] == 'Studio 3') ? 'selected' : ''; ?>>
                                            Studio 3
                                        </option>
                                        <option value="Studio 4"
                                            <?php echo ($row['studio'] == 'Studio 4') ? 'selected' : ''; ?>>
                                            Studio 4
                                        </option>
                                        <option value="Studio 5"
                                            <?php echo ($row['studio'] == 'Studio 5') ? 'selected' : ''; ?>>
                                            Studio 5
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah Jam</td>
                                <td><input class="form-control" type="number" name="jumlah_jam"
                                        value="<?= $row['jumlah_jam'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Waktu Mulai</td>
                                <td><input class="form-control" type="time" name="waktu_mulai"
                                        value="<?= $row['waktu_mulai'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Waktu selesai</td>
                                <td><input class="form-control" type="time" name="waktu_selesai"
                                        value="<?= $row['waktu_selesai'] ?>"></td>
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