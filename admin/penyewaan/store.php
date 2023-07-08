<?php
session_start();
require_once '../helper/connection.php';

$nama_pelanggan     = $_POST['nama_pelanggan'];
$no_telp            = $_POST['no_telp'];
$email              = $_POST['email'];
$paket              = $_POST['paket'];
$jumlah_hari        = $_POST['jumlah_hari'];
$tgl_sewa           = $_POST['tgl_sewa'];
$tgl_pengembalian   = $_POST['tgl_pengembalian'];

$query = mysqli_query($connection, "INSERT INTO t_penyewaan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp', email='$email', paket='$paket', jumlah_hari='$jumlah_hari', tgl_sewa='$tgl_sewa', tgl_pengembalian='$tgl_pengembalian', biaya=('$jumlah_hari'*1500000) ");

if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}