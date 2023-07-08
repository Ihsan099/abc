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

        $id_penyewaan = $_GET["id_penyewaan"];
        $selectSQL = "SELECT * FROM t_penyewaan WHERE id_penyewaan = '$id_penyewaan'";
        $result = mysqli_query($con, $selectSQL);
        $hasil = mysqli_fetch_array($result)
        ?>
    <section class="booking">

        <div class="col">
            <a href="../pesanan.php" class="btn btn-primary float-end">
                <i class="fa fa-arhasil-circle-left"></i>
                Kembali
            </a>
        </div>
        <!-- studio Pesan -->

        <h2>Ubah penyewaan Studio</h2>
        <p></p>
        <p>Biaya penyewaan studio musik dihitung per-jam yaitu sebesar 50.000.</p>
        <form action="prosesedit_penyewaan.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <input type="hidden" name="id_penyewaan" value="<?= $hasil['id_penyewaan'] ?>">
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
                    <label for="paket">Paket Alat Musik</label>
                    <select name="paket" id="paket">
                        <option value="" selected>-- Pilih ---</option>
                        <option value="Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)"
                            <?php echo ($hasil['paket'] == 'Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)') ? 'selected' : ''; ?>>
                            Paket A (Gitar, Bass, Drum, Efek Gitar, Kabel jack, Mixer Audio)
                        </option>
                        <option value="Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)"
                            <?php echo ($hasil['paket'] == 'Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)') ? 'selected' : ''; ?>>
                            Paket B (Gitar 1, Gitar 2, Amply Gitar, Piano, Stand mic)
                        </option>
                        <option value="Paket C (Cajon, Drum, Piano, Mixer Audio)"
                            <?php echo ($hasil['paket'] == 'Paket C (Cajon, Drum, Piano, Mixer Audio)') ? 'selected' : ''; ?>>
                            Paket C (Cajon, Drum, Piano, Mixer Audio)
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah_hari">
                        Jumlah Hari <br>
                        (Jumlah Hari x 1.500.000)
                    </label>
                    <input type="number" id="jumlah_hari" name="jumlah_hari" value="<?php echo $hasil['jumlah_hari']?>"
                        required />
                </div>
                <div class="form-group">
                    <label for="tgl_sewa">Tanggal Mulai Sewa</label>
                    <input type="date" id="tgl_sewa" name="tgl_sewa" value="<?php echo $hasil['tgl_sewa']?>" required />
                </div>
                <div class="form-group">
                    <label for="tgl_pengemmbalian">Tanggal Pengembalian</label>
                    <input type="date" id="tgl_pengembalian" name="tgl_pengembalian"
                        value="<?php echo $hasil['tgl_pengembalian']?>" required />
                </div>
                <button class="booking-button" type="submit" name="simpan_button">Simpan</button>
        </form>
    </section>

</body>

</html>