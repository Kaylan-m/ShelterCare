<?php
  include ('fungsi.php');

  $pemilik = query("SELECT * FROM pemilik");

?>


<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>ShelterCare</title>
  <link rel="stylesheet" href="styleweb.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
<div class="container">
  <nav>
      <ul>
        <li><a href="index.php" class="logo">
            <img src="./img/shelter.png">
          <span class="nav-item">ShelterCare</span>
        </a></li>
        <li><a href="hewan.php">
          <i class="fas fa-paw"></i>
          <span class="nav-item">Hewan</span>
        </a></li>
        <li><a href="perawatan.php">
        <i class="fas fa-cat"></i>
          <span class="nav-item">Perawatan</span>
        </a></li>
        <li><a href="adopsi.php">
        <i class="fas fa-hand-holding-heart"></i>
          <span class="nav-item">Adopsi</span>
        </a></li>
        <li><a href="pemilik.php">
        <i class="fas fa-users"></i>
          <span class="nav-item">Pemilik</span>
        </a></li>
        <li><a href="volunteer.php">
        <i class="fas fa-user-shield"></i>
          <span class="nav-item">Volunteer</span>
        </a></li>
        <li><a href="rawat.php">
        <i class="fas fa-stethoscope"></i>
          <span class="nav-item">Rawat</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>ShelterCare Data</h1>
      </div>
      <div class="users">
        <div class="card">
          <img src="./img/paw.png">
          <h4>Hewan</h4>
          <a href="tambah_hewan.php">Add Data</a>
          <a href="hewan.php">View Data</a>
        </div>
        <div class="card">
          <img src="./img/animal.png">
          <h4>Perawatan</h4>
          <a href="tambah_Perawatan.php">Add Data</a>
          <a href="Perawatan.php">View Data</a>
        </div>
        <div class="card">
          <img src="./img/adopsi.png">
          <h4>Adopsi</h4>
          <a href="tambah_adopsi.php">Add Data</a>
          <a href="adopsi.php">View Data</a>
        </div>
        <div class="card">
          <img src="./img/owner.png">
          <h4>Pemilik</h4>
          <a href="tambah_pemilik.php">Add Data</a>
          <a href="pemilik.php">View Data</a>
        </div>
        <div class="card">
          <img src="./img/vol.png">
          <h4>Volunteer</h4>
          <a href="tambah_volunteer.php">Add Data</a>
          <a href="volunteer.php">View Data</a>
        </div>
        <div class="card">
          <img src="./img/rawat.png">
          <h4>Data Rawat</h4>
          <a href="tambah_rawat.php">Add Data</a>
          <a href="rawat.php">View Data</a>
        </div>
      </div>

      <section class="attendance">
        <div class="attendance-list">
          <h1>Animal Owner List</h1>
          <table class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>ID Pemilik</th>
                <th>Nama Pemilik</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Update Data</th>

            <?php $i = 1; ?>
            <?php foreach ($pemilik as $row) : ?>
                
              </tr>
            </thead>
            
                <tr>
                    
                <td><?=$i;?></td>
                            <td><?=$row["id_pemilik"];?></td>
                            <td><?=$row["nama_pemilik"];?></td>
                            <td><?=$row["alamat"];?></td>
                            <td><?=$row["no_telp"];?></td>
                <td>
                <button onclick="window.location.href='edit_pemilik.php?id_pemilik=<?=$row["id_pemilik"];?>'">Edit</button> &nbsp;&nbsp;&nbsp;&nbsp;
                <button onclick="window.location.href='delete_pemilik.php?id_pemilik=<?=$row["id_pemilik"];?>'">Delete</button>
                </td>
                    
                </tr>

            <?php $i++;?>
            <?php endforeach; ?>

          </table>
        </div>
      </section>
    </section> 
  </div>

</body>
</html>
</span>