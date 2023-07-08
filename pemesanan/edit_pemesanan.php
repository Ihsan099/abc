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

    <?php
        include "../koneksi.php";

        $id_pemesanan = $_GET["id_pemesanan"];
        $selectSQL = "SELECT * FROM t_pemesanan WHERE id_pemesanan = '$id_pemesanan'";
        $result = mysqli_query($con, $selectSQL);
        ?>
    <section class="booking">

        <div class="col">
            <a href="../pesanan.php" class="btn btn-primary float-end">
                <i class="fa fa-arhasil-circle-left"></i>
                Kembali
            </a>
        </div>
        <!-- studio Pesan -->

        <h2>Ubah Pemesanan Studio</h2>
        <p></p>
        <p>Biaya Pemesanan studio musik dihitung per-jam yaitu sebesar 50.000.</p>
        <form action="prosesedit_pemesanan.php" method="post">
            <?php
            while ($hasil = mysqli_fetch_array($result)) {
            ?>
            <div class="form-group">
                <div class="form-group">
                    <input type="hidden" name="id_pemesanan" value="<?= $hasil['id_pemesanan'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Nama Pelanggan</label>
                    <input type="text" id="name" name="nama_pelanggan" value="<?php echo $hasil['nama_pelanggan']?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="no_telp">Nomor Telepon</label>
                    <input type="tel" id="phone" name="no_telp" value="<?php echo $hasil['no_telp']?>" required />
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $hasil['email']?>" required />
                </div>
                <div class="form-group">
                    <label for="tgl_pemesanan">Tanggal Pemesanan</label>
                    <input type="date" id="tgl_pemesanan" name="tgl_pemesanan"
                        value="<?php echo $hasil['tgl_pemesanan']?>" required />
                </div>
                <div class="form-group">
                    <label for="studio">Studio</label>
                    <select name="studio" id="studio">
                        <option value="" selected>-- Pilih ---</option>
                        <option value="Studio 1" <?php echo ($hasil['studio'] == 'Studio 1') ? 'selected' : ''; ?>>
                            Studio 1
                        </option>
                        <option value="Studio 2" <?php echo ($hasil['studio'] == 'Studio 2') ? 'selected' : ''; ?>>
                            Studio 2
                        </option>
                        <option value="Studio 3" <?php echo ($hasil['studio'] == 'Studio 3') ? 'selected' : ''; ?>>
                            Studio 3
                        </option>
                        <option value="Studio 4" <?php echo ($hasil['studio'] == 'Studio 4') ? 'selected' : ''; ?>>
                            Studio 4
                        </option>
                        <option value="Studio 5" <?php echo ($hasil['studio'] == 'Studio 5') ? 'selected' : ''; ?>>
                            Studio 5
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_jam">
                        Jumlah Jam <br>
                        (Jumlah Jam x 50.000)
                    </label>
                    <input type="number" id="jumlah_jam" name="jumlah_jam" value="<?php echo $hasil['jumlah_jam']?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai</label>
                    <input type="time" id="waktu_mulai" name="waktu_mulai" value="<?php echo $hasil['waktu_mulai']?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai</label>
                    <input type="time" id="waktu_selesai" name="waktu_selesai"
                        value="<?php echo $hasil['waktu_selesai']?>" required />
                </div>
                <button class="booking-button" type="submit" name="simpan_button">Simpan</button>
                <?php } ?>
        </form>
    </section>

</body>

</html>