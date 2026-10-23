<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kantin";

//membuat koneksi 
$conn = new mysqli($servername, $username, $password, $dbname);

// memeriksa koneksi benar atau salah 
if ($conn->connect_error) {
    die("koneksi failed: " . $conn->connect_error);
}
?>