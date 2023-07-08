<?php
error_reporting(0);
require "koneksi.php";
require "session.php";
// // Update
// if (isset($_POST['simpan_btn'])) {
//     $update_value = $_POST['quantity'];
//     $update_id = $_POST['id'];
//     $update_quantity_query = mysqli_query($con, "UPDATE `keranjang` SET quantity = '$update_value' WHERE id = '$update_id'");
//     if ($update_quantity_query) {
//         header('location:keranjang.php');
//     };
// };
// ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Studio Musik & Alat Musik</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="index.php#layanan">Layanan</a></li>
                <li><a href="pesanan.php">Pesanan</a></li>
                <li><a href="pembayaran.php">Pembayaran</a></li>
                <li><a href="index.php#contact">Tentang Kami</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section class="booking">
        <div id="top" class="row mb-3">
        </div>
        <h2>Pembayaran</h2>
        <div class="col">
            <a href="input_pembayaran.php" class="btn btn-success float-end">
                <i class="fa fa-plus-circle"></i>
                Tambah
            </a>
            <div class="col m-3">
                <a href="javascript:history.back()" class="btn btn-primary float-end">
                    <i class="fa fa-arrow-circle-left"></i>
                    Kembali
                </a>
            </div>
        </div>
        <div>
            <table id="studio-table" class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Pembayaran</th>
                        <th>Pesanan</th>
                        <th>Id Pesanan</th>
                        <th>Biaya</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Bukti Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
        //memanggil file koneksi_0752
        include 'koneksi.php';

        $no = 1;
        //menjalankan kueri mysql
        $select = mysqli_query($con, "SELECT * FROM t_pembayaran");
        // $ket = mysqli_query($con, "SELECT coba FROM t_pemesanan");

        //memeriksa jumlah baris dari hasil kueri
        if (mysqli_num_rows($select) > 0) {

            //mengambil data hasil dari kueri
            while ($hasil = mysqli_fetch_array($select)) {
        ?>
                    <tr>
                        <td style="text-align: center;"><?= $no++; ?></td>
                        <td><?= $hasil['id_pembayaran']; ?></td>
                        <td><?= $hasil['pesanan']; ?></td>
                        <td><?= $hasil['id_pesanan']; ?></td>
                        <td><?= $hasil['biaya']; ?></td>
                        <td><?= $hasil['tgl_pembayaran']; ?></td>
                        <td><img src="image/<?= $hasil['bukti_pembayaran']; ?>" width="100"></td>
                    </tr>
                    <?php
                }
                    } else {
                    echo '<tr>
                        <td colspan="8" style="text-align: center;">Data tidak ada</td>
                    </tr>';
                    };
                    ?>
                </tbody>
            </table>
        </div>