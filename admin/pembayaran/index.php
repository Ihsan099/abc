<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$result = mysqli_query($connection, "SELECT * FROM t_pembayaran");
?>

<section class="section">
    <div class="section-header d-flex justify-content-between">
        <h1>List Pembayaran</h1>
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
                                    <th>Id Pembayaran</th>
                                    <th>Pesanan</th>
                                    <th>Id Pesanan</th>
                                    <th>Biaya</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Bukti Pembayaran</th>
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
                                    <td><?= $data['id_pembayaran'] ?></td>
                                    <td><?= $data['pesanan'] ?></td>
                                    <td><?= $data['id_pesanan'] ?></td>
                                    <td><?= $data['biaya'] ?></td>
                                    <td><?= $data['tgl_pembayaran'] ?></td>
                                    <td><img src="../../image/<?= $data['bukti_pembayaran']; ?>" width="100"></td>
                                    <td>
                                        <a class="btn btn-sm btn-danger mb-md-0 mb-1"
                                            href="delete.php?id_pembayaran=<?= $data['id_pembayaran'] ?>">
                                            <i class="fas fa-trash fa-fw"></i>
                                        </a>
                                        <a class="btn btn-sm btn-info"
                                            href="edit.php?id_pembayaran=<?= $data['id_pembayaran'] ?>">
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