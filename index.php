<?php
require "session.php";
require "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Studio Musik & Alat Musik</title>
    <link rel="stylesheet" href="css/style.css" />
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

    <section class="banner">
        <div class="banner-image"></div>
        <div class="banner-text">
            <h1>Studio Musik & Alat Musik</h1>
            <p>
                Tersedia studio musik dan alat musik berkualitas dengan harga
                terjangkau
            </p>
        </div>
    </section>

    <section class="services">
        <div class="services-header" id="layanan">
            <h2>Layanan Kami</h2>
            <p>
                Kami menyediakan layanan studio musik dan penyewaan alat musik
                berkualitas untuk kebutuhan musik anda
            </p>
        </div>
        <div class="services-container">
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-microphone-alt"></i></div>
                <h3>Studio Musik</h3>
                <p>
                    Kami menyediakan studio musik dengan peralatan dan sound engineer
                    yang berkualitas
                </p>
                <a href="pemesanan/input_pemesanan.php">
                    <button class="banner-button" class="pulse">Pesan Studio</button>
                </a>
            </div>
            <div class="service-item">
                <div class="service-icon"><i class="fas fa-guitar"></i></div>
                <h3>Penyewaan Alat Musik</h3>
                <p>
                    Kami menyediakan penyewaan alat musik dengan berbagai macam jenis
                    yang dapat dipilih
                </p>
                <a href="penyewaan/input_penyewaan.php">
                    <button class="banner-button">Sewa Alat Musik</button>
                </a>
            </div>
            <!-- <div class="service-item">
          <div class="service-icon"><i class="fas fa-music"></i></div>
          <h3>Kelas Musik</h3>
          <p>
            Kami menyediakan kelas musik dengan guru yang berkualitas untuk
            berbagai macam jenis alat musik
          </p>
        </div> -->
        </div>
    </section>

    <!-- <section class="booking">
        <h2>Pemesanan Studio atau Alat Musik</h2>
        <p>Silakan mengisi formulir pemesanan dibawah ini:</p>
        <form>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone" required />
            </div>
            <div class="form-group">
                <input type="radio" id="studio" name="booking-type" value="studio" required />
                <label for="studio">Studio Musik</label>
                <input type="radio" id="alat-musik" name="booking-type" value="alat-musik" />
                <label for="alat-musik">Alat Musik</label>
            </div>
            <div class="form-group">
                <label for="date">Tanggal Pemesanan</label>
                <input type="date" id="date" name="date" required />
            </div>
            <div class="form-group">
                <label for="time">Waktu Pemesanan</label>
                <input type="time" id="time" name="time" required />
            </div>
            <button class="booking-button" type="submit">Kirim Pemesanan</button>
        </form>
    </section> -->
    <section id="banner">
        <!-- <div class="banner-text">
            <h2>Tentang Kami</h2>
            <p>Selamat datang di <span class="highlight">Nama Website</span>! Kami sangat senang Anda mengunjungi
                halaman "Tentang Kami" kami. Di sini, kami ingin memberikan gambaran tentang siapa kami, nilai-nilai
                yang kami anut, dan visi misi kami.</p>
            <p><span class="highlight">Nama Website</span> adalah sebuah platform yang didedikasikan untuk <span
                    class="highlight">deskripsi tujuan utama atau fokus utama website</span>. Kami berkomitmen untuk
                menyediakan <span class="highlight">deskripsi nilai tambahan yang ditawarkan oleh website</span>.</p>
            <p>Visi kami adalah <span class="highlight">deskripsi visi perusahaan/organisasi</span>. Kami ingin <span
                    class="highlight">tujuan jangka panjang perusahaan/organisasi</span>, dan kami bekerja keras untuk
                mewujudkannya setiap hari.</p>
            <p>Misi kami adalah <span class="highlight">deskripsi misi perusahaan/organisasi</span>. Kami bertujuan
                untuk <span class="highlight">tujuan-tujuan spesifik yang ingin dicapai dalam rangka mencapai
                    visi</span>. Kami melakukannya dengan menyediakan <span class="highlight">deskripsi produk atau
                    layanan yang ditawarkan oleh website</span>.</p>
            <p>Di <span class="highlight">Nama Website</span>, kami mengutamakan kualitas, inovasi, dan kepuasan
                pelanggan. Kami percaya bahwa <span class="highlight">deskripsi filosofi perusahaan/organisasi</span>.
                Oleh karena itu, kami terus berusaha meningkatkan dan memberikan yang terbaik kepada pengguna kami.</p>
            <p>Tim kami terdiri dari <span class="highlight">deskripsi tim, termasuk keterampilan, pengalaman, dan
                    antusiasme mereka</span>. Kami adalah kelompok yang bersemangat dan kompeten yang berbagi visi dan
                nilai-nilai yang sama.</p>
            <p>Kami sangat menghargai umpan balik dan saran dari pengguna kami. Jika Anda memiliki pertanyaan, komentar,
                atau masukan, jangan ragu untuk menghubungi kami melalui <span class="highlight">informasi
                    kontak</span>. Kami siap mendengarkan dan membantu Anda.</p>
            <p>Terima kasih telah mengunjungi <span class="highlight">Nama Website</span>. Kami berharap Anda menikmati
                pengalaman menjelajahi situs kami dan menemukan nilai tambahan yang bermanfaat. Kami berkomitmen untuk
                terus meningkatkan dan memberikan layanan terbaik kepada Anda.</p>
            <p>Salam,</p>
            <p>Tim <span class="highlight">Nama Website</span></p>
        </div> -->
        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-selection">
                        <h3>Bali Music Studio</h3>
                        <p>Kami menyediakan studio musik berkualitas tinggi dan layanan penyewaan alat
                            musik. Kami menyediakan ruang studio musik dengan peralatan modern dan kualitas suara yang
                            baik. Selain
                            itu, kami juga memiliki koleksi alat musik yang dapat disewa untuk keperluan latihan,
                            pertunjukan, atau
                            rekaman.</p>
                    </div>
                    <div class="footer-selection">
                        <h3>Alamat</h3>
                        <p>Jl. Bali, RT.10/RW.NO.1, Antasan Besar, Kec. Banjarmasin Tengah<br>
                            Kota Banjarmasin <br>
                            Kalimantan Selatan <br>
                            Kode Pos : 70114</p>
                    </div>
                    <div class="footer-selection">
                        <h3>Telepon</h3>
                        <p>Silahkan Hubungi kami jika anda tertarik 0851-0025-5205</p>
                    </div>
                    <div class="footer-selection">
                        <h3 style="margin-left: 37px;">Media Sosial</h3>
                        <a href="https://www.instagram.com/balimusicstudio/?igshid=MmJiY2I4NDBkZg%3D%3D"
                            target="_blank"><img src="image/medsos/instagram.svg" width="30px" alt=""></a>
                        <a href="#" target="_blank"><img src="image/medsos/facebook.svg" width="30px" alt=""></a>
                        <a href="#" target="_blank"><img src="image/medsos/twitter.svg" width="30px" alt=""></a>
                        <a href="#" target="_blank"><img src="image/medsos/linkedin.svg" width="30px" alt=""></a>
                        <a href="#" target="_blank"><img src="image/medsos/wa1.png" width="30px" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2023 Bali Music Studio</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>