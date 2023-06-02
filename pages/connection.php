<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "datawarehouse";

$conn = new mysqli($servername, $user, $pass, $dbname);

if ($conn->connect_error) {
    echo "Koneksi gagal: " . $conn->connect_error;
}
?>
