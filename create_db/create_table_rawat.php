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
$sql = "CREATE TABLE rawat (
    id_rawat int(5) NOT NULL PRIMARY KEY,
    id_hewan varchar(10) NOT NULL,
    id_volunteer int(6) NOT NULL,
    deskripsi varchar(50) NOT NULL,
    FOREIGN KEY (id_hewan) REFERENCES hewan(id_hewan) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (id_volunteer) REFERENCES volunteer(id_volunteer) ON DELETE CASCADE ON UPDATE CASCADE
    )";
    
    if (mysqli_query($conn, $sql)) {
        echo "Tabel Rawat berhasil dibuat";
    }
    else {
        echo "Gagal membuat tabel: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>