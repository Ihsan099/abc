<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$id_pembayaran = $_GET['id_pembayaran'];
$query = mysqli_query($connection, "SELECT * FROM t_pembayaran WHERE id_pembayaran='$id_pembayaran'");
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
                        <input type="hidden" name="id_pembayaran" value="<?= $row['id_pembayaran'] ?>">
                        <table cellpadding="8" class="w-100">
                            <tr>
                                <td>Id Pembayaran</td>
                                <td><input class="form-control" required value="<?= $row['id_pembayaran'] ?>" disabled>
                                </td>
                            </tr>
                            <tr>
                                <td>Pesanan</td>
                                <td>
                                    <select class="form-control" name="pesanan" id="pesanan">
                                        <option value="" selected>-- Pilih ---</option>
                                        <option value="Studio Musik"
                                            <?php echo ($row['pesanan'] == 'Studio Musik') ? 'selected' : ''; ?>>
                                            Studio Musik
                                        </option>
                                        <option value="Alat Musik"
                                            <?php echo ($row['pesanan'] == 'Alat Musik') ? 'selected' : ''; ?>>
                                            Alat Musik
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Id Pesanan</td>
                                <td><input class="form-control" name="id_pesanan" required
                                        value="<?= $row['id_pesanan'] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Biaya</td>
                                <td><input class="form-control" type="text" name="biaya" required
                                        value="<?= $row['biaya'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pembayaran</td>
                                <td><input class="form-control" type="date" name="tgl_pembayaran"
                                        value="<?= $row['tgl_pembayaran'] ?>"></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required
                                        value="<?= $row['bukti_pembayaran'] ?>"></td>
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