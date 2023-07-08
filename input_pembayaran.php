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

        <div class="col">
            <a href="index.php" class="btn btn-primary float-end">
                <i class="fa fa-arrow-circle-left"></i>
                Kembali
            </a>
        </div>
        <!-- Bagian Pesan -->


        <h2>Pemesanan Studio</h2>
        <p></p>
        <form action="proses_pembayaran.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pesanan">Pesanan</label>
                <select name="pesanan" id="pesanan">
                    <option value="" selected>-- Pilih </option>
                    <option value="Studio Musik">Studio Musik</option>
                    <option value="Alat Musik">Alat Musik</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Id Pesanan</label>
                <input type="text" id="name" name="id_pesanan" required />
            </div>
            <div class="form-group">
                <label for="no_telp">Biaya</label>
                <input type="number" id="number" name="biaya" required />
            </div>
            <div class="form-group">
                <label for="tgl_pembayaran">Tanggal Pembayaran</label>
                <input type="date" id="tgl_pembayaran" name="tgl_pembayaran" required />
            </div>
            <div class="form-group">
                <label for="name">Bukti Pembayaran</label>
                <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required />
            </div>
            <button class="booking-button" type="submit" name="simpan_button">Simpan</button>
        </form>
    </section>
</body>

</html>