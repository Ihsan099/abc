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


        <h2>Penyewaan Alat Musik</h2>
        <p>Biaya Biaya Penyewaan Alat Musik dihitung per-hari yaitu sebesar 1.500.000.</p>
        <form action="prosestambah_penyewaan.php" method="post">
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
                <label for="paket">Paket Alat Musik</label>
                <select name="paket" id="paket">
                    <option value="" selected>-- Pilih --</option>
                    <option value="Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)">Paket A (Gitar,
                        Bass, Drum,
                        Kabel Jack,
                        Mixer Audio)</option>
                    <option value="Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)">Paket B (Gitar 1,
                        Gitar 2, Amply Gitar, Piano, Stand mic)</option>
                    <option value="Paket C (Cajon, Drum, Piano, Mixer Audio)">Paket C (Cajon, Drum, Piano, Mixer
                        Audio)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_hari">
                    Jumlah Hari <br>
                    (Jumlah Hari x 1.500.000)
                </label>
                <input type="number" id="jumlah_hari" name="jumlah_hari" required />
            </div>
            <div class="form-group">
                <label for="tgl_sewa">Tanggal Mulai Sewa</label>
                <input type="date" id="tgl_sewa" name="tgl_sewa" required />
            </div>
            <div class="form-group">
                <label for="tgl_pengembalian">Tanggal Pengembalian</label>
                <input type="date" id="tgl_pengembalian" name="tgl_pengembalian" required />
            </div>
            <button class="booking-button" type="submit" name="simpan_button">Simpan</button>
        </form>
    </section>
</body>

</html>