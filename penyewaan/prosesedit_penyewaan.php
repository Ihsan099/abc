<?php

include '../koneksi.php';

$id_penyewaan = $_POST["id_penyewaan"];
$nama_pelanggan = $_POST["nama_pelanggan"];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$paket = $_POST['paket'];
$jumlah_hari = $_POST['jumlah_hari'];
$tgl_sewa = $_POST['tgl_sewa'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];

// $updateSQL = "UPDATE karyawan SET 
// nama_pelanggan='$nama_pelanggan',
// no_telp='$no_telp',
// email='$email',
// paket='$paket',
// jumlah_hari='$jumlah_hari',
// tgl_sewa=$tgl_sewa
// WHERE nama_pelanggan='$nama_pelanggan'";

$update = mysqli_query($con, "UPDATE t_penyewaan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp', email='$email', 
paket='$paket', jumlah_hari='$jumlah_hari', tgl_sewa='$tgl_sewa', tgl_pengembalian='$tgl_pengembalian', biaya=('$jumlah_hari'*1500000) WHERE id_penyewaan='$id_penyewaan' ");

header("Location:../pesanan.php");