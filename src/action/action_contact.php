<?php
session_start();
include_once '../db/koneksi.php';
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
    exit;
}

$id_user = $_SESSION['id'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$teleponInt = intval($telepon);
$pesan = $_POST['pesan'];


$sql = "INSERT INTO contact (id_user, nama, telepon, pesan) VALUES ('$id_user', '$nama', '$teleponInt', '$pesan')";
mysqli_query($conn, $sql);
header("Location: ../contact.php");
