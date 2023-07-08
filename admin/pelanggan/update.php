<?php
session_start();
require_once '../helper/connection.php';

$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$username = $_POST['username'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];

$query = mysqli_query($connection, "UPDATE t_pelanggan SET nama_pelanggan = '$nama_pelanggan', username = '$username', no_telp = '$no_telp', email = '$email' WHERE id_pelanggan = '$id_pelanggan'");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil mengubah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($connection)
  ];
  header('Location: ./index.php');
}