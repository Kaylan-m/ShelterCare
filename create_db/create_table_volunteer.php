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
$sql = "CREATE TABLE volunteer (
    id_volunteer int(6) NOT NULL,
    nama_volunteer varchar(30) NOT NULL,
    kegiatan varchar(100) NOT NULL,
    no_telp varchar(13),
    PRIMARY KEY (id_volunteer)
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabel Volunteer berhasil dibuat";
    }
    else {
        echo "Gagal membuat tabel: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>