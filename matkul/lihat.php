<?php

    include "../db/connect.php";
    $kode = $_GET["kode_mk"];
    $query = "SELECT * FROM tbl_matakuliah WHERE kode_mk = '$kode'";
    $select = mysqli_query($koneksi,$query);
    $mk = mysqli_fetch_array($select);
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
          <h3>EDIT MATAKULIAH</h3>
          <form class="container-main">
            <div class="label-input">
                <label for="kode_mk">Kode</label>
                <input id="kode_mk" name="kode_mk" type="text" value="<?= $mk['kode_mk']?>" require disabled>
            </div>
            <div class="label-input">
                <label for="nama_mk">Matakuliah</label>
                <input id="nama_mk" name="nama_mk" type="text" value="<?= $mk['nama_mk']?>" require disabled>
            </div>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>