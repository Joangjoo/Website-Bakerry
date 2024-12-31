<?php
session_start();
include_once '../db/koneksi.php';
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
    exit;
}

$id_user = $_SESSION['id'];
$jumlah_pembayaran = $_POST['jumlah_pembayaran'];
$total_harga = $_GET['pembayaran'];
$kembalian = intval($jumlah_pembayaran) - $total_harga;


$sql = "INSERT INTO pembayaran (id_user, total_harga, jumlah_pembayaran,kembalian) VALUES ('$id_user', '$total_harga','$jumlah_pembayaran','$kembalian')";
mysqli_query($conn, $sql);
header("Location: ../order.php");