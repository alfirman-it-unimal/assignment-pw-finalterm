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
          <h3>DATA DOSEN</h3>
          <div class="container-main">
            <a href="./tambah.php" id="add-button">Tambah data dosen</a>
            <table>
              <thead>
                <tr>
                  <th class="text-center">NO</th>
                  <th>NIP</th>
                  <th>NAMA</th>
                  <th>NO HP</th>
                  <th>MATA KULIAH</th>
                  <th class="text-center">OPSI</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include "db/connect.php";
                $no = 1;
                $data_dosen = mysqli_query($koneksi, "SELECT * FROM tbl_dosen");             
                while($dosen = mysqli_fetch_array($data_dosen)) {
                ?>
                  <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= $dosen['nip_dosen']; ?></td>
                    <td><?= $dosen['nama_dosen']; ?></td>
                    <td><?= $dosen['no_hp_dosen']; ?></td>
                    <td>
                      <?php
                        $data_mk = mysqli_query($koneksi, "SELECT * FROM tbl_matakuliah");
                        while($mk = mysqli_fetch_array($data_mk)){
                          if($mk['kode_mk']===$dosen['kode_mk']){
                            echo $mk['nama_mk'];
                          }
                        }
                      ?>
                    </td>    
                    <td class="option">
                      <a href="lihat.php?nip_dosen=<?=$dosen["nip_dosen"]; ?>" id="view"><i class="far fa-eye"></i></a>
                      <a href="edit.php?nip_dosen=<?=$dosen["nip_dosen"]; ?>" id="edit"><i class="fas fa-edit"></i></a>
                      <a href="hapus.php?nip_dosen=<?=$dosen["nip_dosen"]; ?>" id="remove">
                        <i class="fas fa-trash-alt"></i>
                      </a>
                    </td>
                  </tr>
                  <?php  $no++;
	                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </main>
    <!-- Font Awesome js -->
    <script
      src="https://kit.fontawesome.com/94e3743eb1.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>