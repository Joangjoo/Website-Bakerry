<?php
include_once("../db/koneksi.php");

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO user (id, email, username, password) VALUES (NULL, '$email', '$username', '$hashedPassword')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Registrasi berhasil. Silakan login.";
    header('Location: ../login.php'); 
} else {
    echo "Gagal mendaftar: " . mysqli_error($conn);
}
?>
