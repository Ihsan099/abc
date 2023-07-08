<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$pelanggan = mysqli_query($connection, "SELECT COUNT(*) FROM t_pelanggan");
$pemesanan = mysqli_query($connection, "SELECT COUNT(*) FROM t_pemesanan");
$penyewaan = mysqli_query($connection, "SELECT COUNT(*) FROM t_penyewaan");
$pembayaran = mysqli_query($connection, "SELECT COUNT(*) FROM t_pembayaran");

$total_pelanggan = mysqli_fetch_array($pelanggan)[0];
$total_pemesanan = mysqli_fetch_array($pemesanan)[0];
$total_penyewaan = mysqli_fetch_array($penyewaan)[0];
$total_pembayaran = mysqli_fetch_array($pembayaran)[0];
?>

<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="column">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total pemesanan</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_pemesanan ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total pelanggan</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_pelanggan ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Penyewaan</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_penyewaan ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total pembayaran Masuk</h4>
                        </div>
                        <div class="card-body">
                            <?= $total_pembayaran ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>