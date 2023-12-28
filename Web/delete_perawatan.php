<?php
    require 'fungsi.php';

    $id = $_GET["id_perawatan"];

    if(hapusPerawatan($id)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='perawatan.php';
                </script>
            ";
        
        }else{
            echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href='perawatan.php';
                </script>
                ";
        }
    ?>