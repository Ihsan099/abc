<?php
//memanggil file koneksi_0340
include '../koneksi.php';

$id_pemesanan = $_GET['id_pemesanan'];

if (isset($id_pemesanan)) {
    //menjalankan kueri mysql
    mysqli_query($con, "DELETE FROM t_pemesanan WHERE id_pemesanan='$id_pemesanan'");
}

//pindah halaman ke halaman index.php
header('location:../pesanan.php');