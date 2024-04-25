<?php
$host = "localhost:3307"; 
$username = "root"; 
$password = ""; 
$nama_database = "db_japz"; 

$conn = new mysqli($host, $username, $password, $nama_database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

?>
