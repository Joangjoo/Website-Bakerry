<?php
require('../fpdf/fpdf/fpdf.php');
include '../db/koneksi.php';
session_start();
$id_user = $_SESSION['id'];

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(200, 10, 'Hasil Pembayaran', 0, 0, 'C');

$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'No', 1, 0, 'C');
$pdf->Cell(50, 7, 'Nama', 1, 0, 'C');
$pdf->Cell(25, 7, 'Jumlah', 1, 0, 'C');
$pdf->Cell(35, 7, 'Total Harga', 1, 0, 'C');
$pdf->Cell(35, 7, 'Jumlah Pembayaran', 1, 0, 'C');
$pdf->Cell(35, 7, 'Kembalian', 1, 0, 'C');


$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 10);
$no = 1;
$data = mysqli_query($conn, "SELECT 
    user.username, 
    pesanan.jumlah, 
    pembayaran.total_harga, 
    pembayaran.jumlah_pembayaran, 
    pembayaran.kembalian
FROM 
    pesanan
JOIN 
    user ON pesanan.id_user = user.id
JOIN 
    pembayaran ON pembayaran.id_user = user.id
WHERE 
    pesanan.id_user = $id_user;
");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(50, 6, $d['username'], 1, 0);
    $pdf->Cell(25, 6, $d['jumlah'], 1, 0);
    $pdf->Cell(35, 6, $d['total_harga'], 1, );
    $pdf->Cell(35, 6, $d['jumlah_pembayaran'], 1, 0);
    $pdf->Cell(35, 6, $d['kembalian'], 1, 1);
}

$pdf->Output();
