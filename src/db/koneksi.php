<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "rotijo";


$conn = new mysqli($servername, $username, $password, $db) or die("Connect failed: %s\n" . $conn->error);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}