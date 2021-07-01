<?php

    include "../db/connect.php";

    if(isset($_POST["submit"])){
        $kode_mk = $_POST["kode_mk"];
        $nama_mk = $_POST["nama_mk"];

        $query = "INSERT INTO 
                    `tbl_matakuliah`(`kode_mk`, `nama_mk`) 
                        VALUES ('$kode_mk','$nama_mk')";

        mysqli_query($koneksi,$query);

        if(mysqli_affected_rows($koneksi)>0){
            echo "
                <script>
                    alert('data berhasil ditambah');
                    document.location.href ='index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambah');
                    document.location.href ='tambah.php';
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <title>FINAL EXAM</title>
  </head>
  <body>
    <header>
      <div class="head container">
        <h2>FINAL EXAM</h2>
      </div>
    </header>
    <main>
      <aside>
        <nav>
          <ul>
            <li><a href="../">Data Dosen</a></li>
            <li><a class="active" href=".">Data Matakuliah</a></li>
          </ul>
        </nav>
      </aside>
      <section>
        <div class="container-penduduk">
          <h3>TAMBAH DATA DOSEN</h3>
          <form action="" method="post" class="container-main">
            <div class="label-input">
                <label for="kode_mk">Kode</label>
                <input id="kode_mk" name="kode_mk" type="text" require>
            </div>
            <div class="label-input">
                <label for="nama_mk">Matakuliah</label>
                <input id="nama_mk" name="nama_mk" type="text" require>
            </div>
            <button type="submit" name="submit">
                Submit
            </button>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>