<?php
include_once("../db/koneksi.php");
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header('Location: ../bakery.php'); 
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email tidak ditemukan!";
}
?>
