<?php

include '../koneksi.php';

$id_pemesanan= $_POST['id_pemesanan'];
$nama_pelanggan = $_POST["nama_pelanggan"];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$tgl_pemesanan = $_POST['tgl_pemesanan'];
$studio = $_POST['studio'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];
$jumlah_jam = $_POST['jumlah_jam'];

// $updateSQL = "UPDATE karyawan SET 
// nama_pelanggan='$nama_pelanggan',
// no_telp='$no_telp',
// email='$email',
// tgl_pemesanan='$tgl_pemesanan',
// studio='$studio',
// waktu_mulai=$waktu_mulai
// WHERE nama_pelanggan='$nama_pelanggan'";

$update = mysqli_query($con, "UPDATE t_pemesanan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp', email='$email', 
tgl_pemesanan='$tgl_pemesanan', studio='$studio', jumlah_jam='$jumlah_jam', waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai',
 biaya=('$jumlah_jam'*50000)  WHERE id_pemesanan='$id_pemesanan' ");

header("Location:../pesanan.php");