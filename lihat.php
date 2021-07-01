<?php
    include "db/connect.php";
    $kode = $_GET["nip_dosen"];
    $query = "SELECT * FROM tbl_dosen WHERE nip_dosen = '$kode'";
    $select = mysqli_query($koneksi,$query);
    $dosen = mysqli_fetch_array($select);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
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
            <li><a class="active" href=".">Data Dosen</a></li>
            <li><a href="./matkul">Data Matakuliah</a></li>
          </ul>
        </nav>
      </aside>
      <section>
        <div class="container-penduduk">
          <h3>LIHAT DATA DOSEN</h3>
          <form class="container-main">
            <div class="label-input">
                <label for="nip_dosen">NIP</label>
                <input id="nip_dosen" name="nip_dosen" type="text" value="<?=$dosen['nip_dosen']?>" require disabled>
            </div>
            <div class="label-input">
                <label for="nama_dosen">NAMA</label>
                <input id="nama_dosen" name="nama_dosen" type="text" value="<?=$dosen['nama_dosen']?>" require disabled>
            </div>
            <div class="label-input">
                <label for="no_hp_dosen">NO HP</label>
                <input id="no_hp_dosen" name="no_hp_dosen" type="text" value="<?=$dosen['no_hp_dosen']?>" require disabled>
            </div>
            <div class="label-input">
                <label for="kode_mk">MATAKULIAH</label>
                <input type="text" id="kode_mk" name="kode_mk" value="<?=$dosen['kode_mk']?>" require disabled>
            </div>
          </form>
        </div>
      </section>
    </main>
  </body>
</html>