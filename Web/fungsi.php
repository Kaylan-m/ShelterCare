<?php
// Koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "ShelterCare");

// query data
function query($query){
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahHewan($data){
    global $conn;
    $id_hewan = htmlspecialchars($data["id_hewan"]);   
    $nama_hewan = htmlspecialchars($data["nama_hewan"]);
    $jenis_hewan = htmlspecialchars($data["jenis_hewan"]);
    $umur = htmlspecialchars($data["umur"]);
    $kondisi = htmlspecialchars($data["kondisi"]);
    $id_perawatan = htmlspecialchars($data["id_perawatan"]);
    $id_pemilik = htmlspecialchars($data["id_pemilik"]);

    $query = "INSERT INTO hewan
                VALUES
                ('$id_hewan', '$nama_hewan', '$jenis_hewan', '$umur', '$kondisi', '$id_perawatan', '$id_pemilik')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahPerawatan($data){
    global $conn;
    $id_perawatan= htmlspecialchars($data["id_perawatan"]);
    $nama_perawatan = htmlspecialchars($data["nama_perawatan"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO perawatan
                VALUES
                ('$id_perawatan', '$nama_perawatan', '$deskripsi')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahAdopsi($data){
    global $conn;
    $id_adopsi = htmlspecialchars($data["id_adopsi"]);
    $tgl_adopsi = htmlspecialchars($data["tgl_adopsi"]);
    $id_pemilik = htmlspecialchars($data["id_pemilik"]);

    $query = "INSERT INTO adopsi
                VALUES
                ('$id_adopsi', '$tgl_adopsi', '$id_pemilik')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Tambah data
function tambahPemilik($data){
    global $conn;
    $id_pemilik = htmlspecialchars($data["id_pemilik"]);
    $nama_pemilik = htmlspecialchars($data["nama_pemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "INSERT INTO pemilik
                VALUES
                ('$id_pemilik', '$nama_pemilik', '$alamat', '$no_telp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahVolunteer($data){
    global $conn;
    $id_volunteer = htmlspecialchars($data["id_volunteer"]);
    $nama_volunteer = htmlspecialchars($data["nama_volunteer"]);
    $kegiatan = htmlspecialchars($data["kegiatan"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "INSERT INTO volunteer
                VALUES
                ('$id_volunteer', '$nama_volunteer', '$kegiatan', '$no_telp')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Tambah data
function tambahRawat($data){
    global $conn;
    $id_rawat = htmlspecialchars($data["id_rawat"]);
    $id_hewan = htmlspecialchars($data["id_hewan"]);
    $id_volunteer = htmlspecialchars($data["id_volunteer"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO rawat
                VALUES
                ('$id_rawat', '$id_hewan', '$id_volunteer', '$id_volunteer')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//Function hapus data
function hapusHewan($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM hewan WHERE id_hewan= '$id'");

    return mysqli_affected_rows($conn);
}

//Function hapus data
function hapusPerawatan($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM perawatan WHERE id_perawatan= '$id'");

    return mysqli_affected_rows($conn);
}

//Function hapus data
function hapusAdopsi($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM adopsi WHERE id_adopsi= '$id'");

    return mysqli_affected_rows($conn);
}

//Function hapus data
function hapusPemilik($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pemilik WHERE id_pemilik= '$id'");

    return mysqli_affected_rows($conn);
}

//Function hapus data
function hapusVolunteer($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM volunteer WHERE id_volunteer= '$id'");

    return mysqli_affected_rows($conn);
}

//Function hapus data
function hapusRawat($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM rawat WHERE id_rawat= '$id'");

    return mysqli_affected_rows($conn);
}

// Function Ubah Data
function editHewan($data){
    global $conn;
    $id=$data["id_hewan"];
    $nama_hewan = htmlspecialchars($data["nama_hewan"]);
    $jenis_hewan = htmlspecialchars($data["jenis_hewan"]);
    $umur = htmlspecialchars($data["umur"]);
    $kondisi = htmlspecialchars($data["kondisi"]);
    $id_perawatan = htmlspecialchars($data["id_perawatan"]);
    $id_pemilik = htmlspecialchars($data["id_pemilik"]);


    $query ="UPDATE hewan SET
            nama_hewan = '$nama_hewan',
            jenis_hewan = '$jenis_hewan',
            umur = '$umur',
            kondisi = '$kondisi',
            id_perawatan = '$id_perawatan',
            id_pemilik = '$id_pemilik'
            WHERE id_hewan = '$id'
            ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

function editPerawatan($data){
    global $conn;
    $id=$data["id_perawatan"];
    $nama_perawatan = htmlspecialchars($data["nama_perawatan"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query ="UPDATE perawatan SET 
            nama_perawatan = '$nama_perawatan',
            deskripsi = '$deskripsi'
            WHERE id_perawatan = '$id'
            ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    } 

// Function Ubah Data
function editAdopsi($data){
    global $conn;
    $id=$data["id_adopsi"];
    $tgl_adopsi = htmlspecialchars($data["tgl_adopsi"]);
    $id_pemilik = htmlspecialchars($data["id_pemilik"]);

    $query ="UPDATE adopsi SET 
            id_adopsi = '$id',
            tgl_adopsi = '$tgl_adopsi',
            id_pemilik = '$id_pemilik'
            WHERE id_adopsi = '$id'
            ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

                    
// Function Ubah Data
function editPemilik($data){
    global $conn;
    $id=$data["id_pemilik"];
    $nama_pemilik = htmlspecialchars($data["nama_pemilik"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);


    $query ="UPDATE pemilik SET 
            nama_pemilik = '$nama_pemilik',
            alamat = '$alamat',
            no_telp = '$no_telp'
            WHERE id_pemilik = '$id'
            ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

// Function Ubah Data
function editVolunteer($data){
    global $conn;
    $id=$data["id_volunteer"];
    $nama_volunteer = htmlspecialchars($data["nama_volunteer"]);
    $kegiatan = htmlspecialchars($data["kegiatan"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query ="UPDATE volunteer SET 
            nama_volunteer = '$nama_volunteer',
            kegiatan = '$kegiatan',
            no_telp = '$no_telp'
            WHERE id_volunteer = '$id'
            ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }


    function editRawat($data)
    {
        global $conn;
        $id=$data["id_rawat"];
        $id_hewan = htmlspecialchars($data["id_hewan"]);
        $id_volunteer = htmlspecialchars($data["id_volunteer"]);
        $deskripsi = htmlspecialchars($data["deskripsi"]);
    
    
        $query = "UPDATE rawat SET 
                    id_hewan = '$id_hewan',
                    id_volunteer = '$id_volunteer',
                    deskripsi = '$deskripsi'
                    WHERE id_rawat = '$id'
                    ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    
    