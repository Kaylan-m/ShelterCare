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
$sql = "CREATE TABLE adopsi (
    id_adopsi varchar(5) NOT NULL,
    tgl_adopsi date NOT NULL,
    id_pemilik varchar(10),
    PRIMARY KEY (id_adopsi),
    FOREIGN KEY (id_pemilik) REFERENCES pemilik(id_pemilik) ON DELETE CASCADE ON UPDATE CASCADE
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabel Adopsi berhasil dibuat";
    }
    else {
        echo "Gagal membuat tabel: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>