<?php
    include "../db/connect.php";
    $kode_mk = $_GET['kode_mk'];
    mysqli_query($koneksi,"DELETE FROM `tbl_matakuliah` WHERE `kode_mk` = '$kode_mk'");
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

?>