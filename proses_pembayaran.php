<?php
//koneksi
$connect = mysqli_connect('localhost', 'root', '', 'studio_musik');

function uploadGambar($bukti_pembayaran)
{
    $namabukti_pembayaran = $bukti_pembayaran['name'];
    $ukuranbukti_pembayaran = $bukti_pembayaran['size'];
    $error = $bukti_pembayaran['error'];
    $tmpName = $bukti_pembayaran['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        return false;
    }

    // Cek apakah bukti_pembayaran yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($namabukti_pembayaran, PATHINFO_EXTENSION));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        return false;
    }

    // Cek jika ukuran bukti_pembayaran terlalu besar
    if ($ukuranbukti_pembayaran > 1000000) {
        return false;
    }

    // Generate nama bukti_pembayaran baru
    $namabukti_pembayaranBaru = uniqid() . '.' . $ekstensiGambar;

    // Pindahkan bukti_pembayaran ke folder penyimpanan
    move_uploaded_file($tmpName, 'image/' . $namabukti_pembayaranBaru);

    return $namabukti_pembayaranBaru;
}

//set variabel
$pesanan     = $_POST['pesanan'];
$id_pesanan            = $_POST['id_pesanan'];
$biaya              = $_POST['biaya'];
$tgl_pembayaran      = $_POST['tgl_pembayaran'];
$bukti_pembayaran = uploadGambar($_FILES['bukti_pembayaran']);


//input data
$insert = mysqli_query($connect, "insert into t_pembayaran set pesanan='$pesanan', id_pesanan='$id_pesanan', biaya='$biaya', tgl_pembayaran='$tgl_pembayaran', bukti_pembayaran='$bukti_pembayaran'");

//kembali
header("Location: pembayaran.php");