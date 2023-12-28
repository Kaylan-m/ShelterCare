<?php
$servername = "localhost";
$username = "root";
$password = ""; /* Put your password here */
$dbname = "ShelterCare"; /* Put your database name here */

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);

/* Check connection */
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

/* sql query to create table */
$sql = "CREATE TABLE pemilik (
    id_pemilik varchar(10) NOT NULL PRIMARY KEY,
    nama_pemilik varchar(30) NOT NULL,
    alamat varchar(30) NOT NULL,
    no_telp varchar(13)
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabel Pemilik berhasil dibuat";
    }
    else {
        echo "Gagal membuat tabel: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>