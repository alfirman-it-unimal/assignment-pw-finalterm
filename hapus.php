<?php
    include "db/connect.php";
    $nip_dosen = $_GET['nip_dosen'];
    mysqli_query($koneksi,"DELETE FROM `tbl_dosen` WHERE `nip_dosen` = '$nip_dosen'");
    if(mysqli_affected_rows($koneksi)>0){
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href ='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal dihapus');
                document.location.href ='index.php';
            </script>
        ";
    }
