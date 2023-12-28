<?php
    require 'fungsi.php';

    $id = $_GET["id_volunteer"];

    if(hapusVolunteer($id)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='volunteer.php';
                </script>
            ";
        
        }else{
            echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href='volunteer.php';
                </script>
                ";
        }
    ?>