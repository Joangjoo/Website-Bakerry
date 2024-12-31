<?php
include_once("../db/koneksi.php");
session_start();
$id_user = $_SESSION['id'];
$id_order = $_GET['id_order'] ?? null;
$jumlah = $_POST['jumlah'] ?? null;
$sql = "UPDATE pesanan SET jumlah = '$jumlah' WHERE id_order = '$id_order' AND id_user = '$id_user'";
mysqli_query($conn, $sql);
header('Location: ../order.php');