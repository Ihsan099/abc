<?php
//memanggil file koneksi_0340
include '../koneksi.php';

$id_penyewaan = $_GET['id_penyewaan'];

if (isset($id_penyewaan)) {
    //menjalankan kueri mysql
    mysqli_query($con, "DELETE FROM t_penyewaan WHERE id_penyewaan='$id_penyewaan'");
}

//pindah halaman ke halaman index.php
header('location:../pesanan.php');