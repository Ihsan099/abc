<?php
error_reporting(0);
require "../koneksi.php";
require "../session.php";
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
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.php">Beranda</a></li>
                <li><a href="../index.php#layanan">Layanan</a></li>
                <li><a href="../pesanan.php">Pesanan</a></li>
                <li><a href="../pembayaran.php">Pembayaran</a></li>
                <li><a href="../index.php#contact">Tentang Kami</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <section class="booking">

        <div class="col">
            <a href="../index.php" class="btn btn-primary float-end">
                <i class="fa fa-arrow-circle-left"></i>
                Kembali
            </a>
        </div>
        <!-- Bagian Pesan -->


        <h2>Pemesanan Studio</h2>
        <p>Biaya Pemesanan studio musik dihitung per-jam yaitu sebesar 50.000.</p>
        <form action="prosestambah_pemesanan.php" method="post">
            <div class="form-group">
                <label for="name">Nama Pelanggan</label>
                <input type="text" id="name" name="nama_pelanggan" required />
            </div>
            <div class="form-group">
                <label for="no_telp">Nomor Telepon</label>
                <input type="tel" id="phone" name="no_telp" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                <input type="date" id="tgl_pemesanan" name="tgl_pemesanan" required />
            </div>
            <div class="form-group">
                <label for="studio">Studio</label>
                <select name="studio" id="studio">
                    <option value="" selected>-- Pilih --</option>
                    <option value="Studio 1">Studio 1</option>
                    <option value="Studio 2">Studio 2</option>
                    <option value="Studio 3">Studio 3</option>
                    <option value="Studio 4">Studio 4</option>
                    <option value="Studio 5">Studio 5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_jam">
                    Jumlah Jam <br>
                    (Jumlah Jam x 50.000)
                </label>
                <input type="number" id="jumlah_jam" name="jumlah_jam" required />
            </div>
            <div class="form-group">
                <label for="waktu_mulai">Waktu Mulai</label>
                <input type="time" id="waktu_mulai" name="waktu_mulai" required />
            </div>
            <div class="form-group">
                <label for="waktu_selesai">Waktu Selesai</label>
                <input type="time" id="waktu_selesai" name="waktu_selesai" required />
            </div>
            <button class="booking-button" type="submit" name="simpan_button">Simpan</button>
        </form>
    </section>
</body>

</html>