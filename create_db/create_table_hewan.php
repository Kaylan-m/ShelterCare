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
$sql = "CREATE TABLE hewan (
    id_hewan varchar(10) NOT NULL PRIMARY KEY,
    nama_hewan varchar(20) NOT NULL,
    jenis_hewan varchar(30) NOT NULL,
    umur varchar(10) NOT NULL,
    kondisi varchar(50) NOT NULL,
    id_perawatan varchar(10),
    id_pemilik varchar(10),
    FOREIGN KEY (id_perawatan) REFERENCES perawatan(id_perawatan) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_pemilik) REFERENCES pemilik(id_pemilik) ON DELETE CASCADE ON UPDATE CASCADE
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabel Hewan berhasil dibuat";
    }
    else {
        echo "Gagal membuat tabel: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>