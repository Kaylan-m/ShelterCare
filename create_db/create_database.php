<?php
$servername = "localhost";
$username = "root";
$password = ""; /* Put your password here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password);

/* Check connection */
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

/* Create database */
$sql = "CREATE DATABASE ShelterCare";
if (mysqli_query($conn, $sql)) {
    echo "Database ShelterCare berhasil dibuat";
}
else {
    echo "Gagal membuat database". mysqli_error($conn);
}

mysqli_close($conn);
?>