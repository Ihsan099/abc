<?php
//memanggil dan menyertakan file fpdf
include '../helper/fpdf184/fpdf.php';
//memanggil dan menyertakan file koneksi
include '../helper/connection.php';

// function jenis_kelamin($jk)
// {
//     if ($jk == 'L') {
//         $namajk = 'Laki-laki';
//     } else {
//         $namajk = 'Perempuan';
//     }

//     return $namajk;
// }

//membuat objek dari class FPDF untuk mengatur orientasi halaman, satuan ukuran, ukuran halaman
$pdf = new FPDF('P', 'cm', 'A4');
//memanggil method AddPage() untuk menambahkan halaman
$pdf->AddPage();
$pdf->SetTitle("Laporan Data Pemesanan Studio Musik");
//mengatur jenis, bentuk dan ukuran tulisan
$pdf->SetFont('Arial', 'B', 16);
//membuat baris dan menuliskan isinya
$pdf->Cell(19, 1, 'BALI MUSIC STUDIO', 0, 1, 'C');
$pdf->SetFont('Arial', 'i', 10);
$pdf->Cell(19, 1, 'Jl. Bali, RT.10/RW.NO.1, Antasan Besar, Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan, 70114', 0, 1, 'C');
$pdf->SetFont('Arial', 'i', 8);
$pdf->Cell(19, 1, 'Telp: 0851-0025-5205', 0, 1, 'C');
$pdf->Line(1, 4, 20, 4);
$pdf->Ln();
//memberi jarak
//untuk membuat baris
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(19, 1, 'Laporan Data Pemesanan Studio Musik', 0, 1, 'C');
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 5);
$pdf->SetFillColor(240, 240, 240);
$pdf->Cell(1, 1, 'No', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Id Pemesanan', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Nama Pelanggan', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'No Telepon', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Email', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Tanggal Pemesanan', 1, 0, 'C', true);
$pdf->Cell(1, 1, 'Studio', 1, 0, 'C', true);
$pdf->Cell(1, 1, 'Jumlah Jam', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Waktu Mulai', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Waktu Selesai', 1, 0, 'C', true);
$pdf->Cell(2, 1, 'Biaya', 1, 1, 'C', true);

//menjalankan kueri mysql
$select = mysqli_query($connection, "SELECT * FROM t_pemesanan");

$no = 1;

//memeriksa jumlah baris dari hasil kueri
if (mysqli_num_rows($select) > 0) {

    //mengambil data hasil dari kueri
    while ($hasil = mysqli_fetch_array($select)) {
        $pdf->SetFont('Arial', '', 5);
        $pdf->Cell(1, 1, $no++, 1, 0, 'C');
        $pdf->Cell(2, 1, $hasil['id_pemesanan'], 1, 0, 'C');
        $pdf->Cell(2, 1, $hasil['nama_pelanggan'], 1, 0, 'L');
        $pdf->Cell(2, 1, $hasil['no_telp'], 1, 0, 'L');
        $pdf->Cell(2, 1, $hasil['email'], 1, 0, 'L');
        $pdf->Cell(2, 1, $hasil['tgl_pemesanan'], 1, 0, 'C');
        $pdf->Cell(1, 1, $hasil['studio'], 1, 0, 'C');
        $pdf->Cell(1, 1, $hasil['jumlah_jam'], 1, 0, 'C');
        $pdf->Cell(2, 1, $hasil['waktu_mulai'], 1, 0, 'C');
        $pdf->Cell(2, 1, $hasil['waktu_selesai'], 1, 0, 'C');
        $pdf->Cell(2, 1, $hasil['biaya'], 1, 1, 'C');
    }
} else {
    $pdf->SetFont('Arial', '', 7);
    $pdf->Cell(19, 1, 'Tidak Ada Ada', 1, 0, 'C');
}

//menampilkan laporan langsung ke peramban/browser
$pdf->Output('Laporan-Pemesanan Studio Musik.pdf', 'I');