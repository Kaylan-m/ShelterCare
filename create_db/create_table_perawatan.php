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
$sql = "CREATE TABLE perawatan (
    id_perawatan varchar(10) NOT NULL,
    nama_perawatan varchar(20) NOT NULL,
    deskripsi varchar(50) NOT NULL,
    PRIMARY KEY (id_perawatan)
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabel Perawatan berhasil dibuat";
    }
    else {
        echo "Gagal membuat tabel: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>