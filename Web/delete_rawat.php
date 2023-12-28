<?php
    require 'fungsi.php';

    $id = $_GET["id_rawat"];

    if(hapusRawat($id)>0){
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='rawat.php';
                </script>
            ";
        
        }else{
            echo "
                <script>
                alert('Data Berhasil Dihapus');
                document.location.href='rawat.php';
                </script>
                ";
        }
    ?>