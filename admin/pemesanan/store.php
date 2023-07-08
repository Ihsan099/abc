<?php
session_start();
require_once '../helper/connection.php';

$nama_pelanggan = $_POST['nama_pelanggan'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$tgl_pemesanan = $_POST['tgl_pemesanan'];
$studio = $_POST['studio'];
$jumlah_jam = $_POST['jumlah_jam'];
$waktu_mulai = $_POST['waktu_mulai'];
$waktu_selesai = $_POST['waktu_selesai'];

$query = mysqli_query($connection, "INSERT INTO t_pemesanan SET nama_pelanggan='$nama_pelanggan', no_telp='$no_telp', email='$email', 
tgl_pemesanan='$tgl_pemesanan', studio='$studio', jumlah_jam='$jumlah_jam', waktu_mulai='$waktu_mulai', waktu_selesai='$waktu_selesai', biaya=('$jumlah_jam'*50000) ");

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