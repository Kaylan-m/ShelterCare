<?php
    require 'fungsi.php';

    $id = $_GET["id_adopsi"];

    if(hapusAdopsi($id)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='adopsi.php';
                </script>
            ";
        
        }else{
            echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href='adopsi.php';
                </script>
                ";
        }
    ?>