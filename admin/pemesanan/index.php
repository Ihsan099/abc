<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM t_pemesanan");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>List Pemesanan Studio Musik</h1>
        <a href="./create.php" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped w-100" id="table-1">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Id Pemesanan</th>
                                    <th>Nama Pelanggan</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Studio</th>
                                    <th>Jumlah Jam</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Biaya</th>
                                    <th style="width: 150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                while ($data = mysqli_fetch_array($result)) :
                ?>

                                <tr>
                                    <td style="text-align: center;"><?= $no++; ?></td>
                                    <td><?= $data['id_pemesanan'] ?></td>
                                    <td><?= $data['nama_pelanggan'] ?></td>
                                    <td><?= $data['no_telp'] ?></td>
                                    <td><?= $data['email'] ?></td>
                                    <td><?= $data['tgl_pemesanan'] ?></td>
                                    <td><?= $data['studio'] ?></td>
                                    <td><?= $data['jumlah_jam'] ?></td>
                                    <td><?= $data['waktu_mulai'] ?></td>
                                    <td><?= $data['waktu_selesai'] ?></td>
                                    <td><?= $data['biaya'] ?></td>
                                    <td>
                                        <a class="btn btn-sm btn-danger mb-md-0 mb-1"
                                            href="delete.php?id_pemesanan=<?= $data['id_pemesanan'] ?>">
                                            <i class="fas fa-trash fa-fw"></i>
                                        </a>
                                        <a class="btn btn-sm btn-info"
                                            href="edit.php?id_pemesanan=<?= $data['id_pemesanan'] ?>">
                                            <i class="fas fa-edit fa-fw"></i>
                                        </a>
                                    </td>
                                </tr>

                                <?php
                endwhile;
                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <a href="cetak.php"
                style="background-color: #347aeb; color: #fff; padding: 0.4% 0.8%; border-radius: 2px; text-decoration: none;">
                <i class="fa fa-print">
                    Cetak
                </i>
            </a>
        </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>
<!-- Page Specific JS File -->
<?php
if (isset($_SESSION['info'])) :
  if ($_SESSION['info']['status'] == 'success') {
?>
<script>
iziToast.success({
    title: 'Sukses',
    message: `<?= $_SESSION['info']['message'] ?>`,
    position: 'topCenter',
    timeout: 5000
});
</script>
<?php
  } else {
  ?>
<script>
iziToast.error({
    title: 'Gagal',
    message: `<?= $_SESSION['info']['message'] ?>`,
    timeout: 5000,
    position: 'topCenter'
});
</script>
<?php
  }

  unset($_SESSION['info']);
  $_SESSION['info'] = null;
endif;
?>
<script src="../assets/js/page/modules-datatables.js"></script>