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
            <li><a href="." class="active">Data Matakuliah</a></li>
          </ul>
        </nav>
      </aside>
      <section>
        <div class="container-penduduk">
          <h3>DATA MATAKULIAH</h3>
          <div class="container-main">
            <a href="tambah.php" id="add-button">Tambah data matakuliah</a>
            <table>
              <thead>
                <tr>
                  <th class="text-center">NO</th>
                  <th>KODE</th>
                  <th>MATAKULIAH</th>
                  <th class="text-center">OPSI</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include "../db/connect.php";
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM tbl_matakuliah");  
                while($d = mysqli_fetch_array($data)) {
                ?>
                  <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= $d['kode_mk']; ?></td>
                    <td><?= $d['nama_mk']; ?></td>  
                    <td class="option">
                      <a href="lihat.php?kode_mk=<?=$d["kode_mk"]; ?>" id="view"><i class="far fa-eye"></i></a>
                      <a href="edit.php?kode_mk=<?=$d["kode_mk"]; ?>" id="edit"><i class="fas fa-edit"></i></a>
                      <a href="hapus.php?kode_mk=<?=$d["kode_mk"]; ?>" id="remove">
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