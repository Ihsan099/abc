<?php
session_start();
require_once '../helper/connection.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$username = $_POST['username'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

$query = mysqli_query($connection, "insert into t_pelanggan (id_pelanggan, nama_pelanggan, username, no_telp, email) value('$id_pelanggan', '$nama_pelanggan', '$username', '$no_telp', '$email')");
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