<?php 
session_start();

if (!(isset($_SESSION["login"]))) {
  header("Location: ../login.php");
  exit;
}

require '../functions.php';
$series = query("SELECT * FROM series");

if (isset($_POST["judul_naik"])) {
  $series = query("SELECT * FROM series ORDER BY judul_series ASC;");
}

if (isset($_POST["sutradara_naik"])) {
  $series = query("SELECT * FROM series ORDER BY sutradara_series ASC;");
}

if (isset($_POST["aktor_naik"])) {
  $series = query("SELECT * FROM series ORDER BY aktor_series ASC;");
}

if (isset($_POST["tahun_naik"])) {
  $series = query("SELECT * FROM series ORDER BY tahun_rilis_series ASC;");
}

if (isset($_POST["studio_naik"])) {
  $series = query("SELECT * FROM series ORDER BY studio_series ASC;");
}

if (isset($_POST["judul_turun"])) {
  $series = query("SELECT * FROM series ORDER BY judul_series DESC;");
}

if (isset($_POST["sutradara_turun"])) {
  $series = query("SELECT * FROM series ORDER BY sutradara_series DESC;");
}

if (isset($_POST["aktor_turun"])) {
  $series = query("SELECT * FROM series ORDER BY aktor_series DESC;");
}

if (isset($_POST["tahun_turun"])) {
  $series = query("SELECT * FROM series ORDER BY tahun_rilis_series DESC;");
}

if (isset($_POST["studio_turun"])) {
  $series = query("SELECT * FROM series ORDER BY studio_series DESC;");
}


// tombol cari ditekan
if (isset($_POST["cari_series"])) {
  $series = cari_series($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="../style/style.css" />

    <!-- icon -->
    <link rel="icon" href="../img/logo.jpg" />

    <style>
      @media print {
        .btn, .input-group, .footer, .aksi {
          display: none;
        }
      }
    </style>

    <title>Cloud Cinema</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" style="z-index: 5;">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="../img/logo.jpg" alt="" class="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="collection.php">Koleksi</a>
            <a class="nav-item nav-link" href="contact.php">Kontak</a>
            <a class="nav-item btn btn-primary tombol" href="logout.php">logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
     

      <!-- collection -->
      <section id="film-1">
        <div class="film-1">
          <div class="container">
            <h2 class="film-title text-center">Series</h2>
            
            <div class="row mb-3">
            <div class="col-7">
                  <div class="row mt-3">
                    <a href="cetak_series.php" target="_blank" class="btn btn-outline-info btn-sm">Cetak PHP</a>
                  </div>
                  <div class="row mt-3">
                    <a href="tambah_series.php" class="btn btn-outline-info btn-sm">Tambah Data Series</a>
                  </div>
              </div>
              <div class="col-5 mt-3">
                <form action="" method="POST">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" size="40" 
                    autofocus placeholder="Masukan keyword pencarian" autocomplete="off"
                    aria-label="Recipient's username" aria-describedby="button-addon2"
                    id="keyword">
                    <div class="input-group-append">
                      <button type="submit" name="cari" class="btn btn-info" 
                      id="button-addon2 tombol-cari">Cari</button>
                    </div>
                  </div>
                </form>
                <form action="" method="POST">
                  <div class="row">
                    <div class="col-3">
                      <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="submit" id="dropdownMenuButton" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Urut Naik:
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <button class="dropdown-item" type="submit" name="judul_naik">Judul</button>
                          <button class="dropdown-item" type="submit" name="sutradara_naik">Sutradara</button>
                          <button class="dropdown-item" type="submit" name="aktor_naik">Aktor</button>
                          <button class="dropdown-item" type="submit" name="tahun_naik">Tahun</button>
                          <button class="dropdown-item" type="submit" name="studio_naik">Studio</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle btn-sm" type="submit" id="dropdownMenuButton" 
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Urut Turun:
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <button class="dropdown-item" type="submit" name="judul_turun">Judul</button>
                          <button class="dropdown-item" type="submit" name="sutradara_turun">Sutradara</button>
                          <button class="dropdown-item" type="submit" name="aktor_turun">Aktor</button>
                          <button class="dropdown-item" type="submit" name="tahun_turun">Tahun</button>
                          <button class="dropdown-item" type="submit" name="studio_turun">Studio</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
            <!-- Input Data Movie -->
            <div id="container">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Sutradara</th>
                    <th scope="col">Aktor</th>
                    <th scope="col">Tahun Rilis</th>
                    <th scope="col">Studio</th>
                    <th scope="col" class="aksi">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($series as $seri) { ?>
                    <tr class="align-middle">
                      <th scope="row"><?php echo $no++; ?></th>
                      <td>
                        <img src="../img/<?php echo $seri["gambar_series"]; ?>" width="100">
                      </td>
                      <td class="align-middle"><?php echo $seri["judul_series"]; ?></td>
                      <td class="align-middle"><?php echo $seri["sutradara_series"]; ?></td>
                      <td class="align-middle"><?php echo $seri["aktor_series"]; ?></td>
                      <td class="align-middle"><?php echo $seri["tahun_rilis_series"]; ?></td>
                      <td class="align-middle"><?php echo $seri["studio_series"]; ?></td>
                      <td class="align-middle aksi">
                        <a href="<?php echo $seri["link_series"]; ?>" class="btn badge btn-outline-success btn-block">Tonton</a>
                        <a href="ubah_series.php?id_series=<?= $seri["id_series"]; ?>" class="btn badge btn-outline-warning btn-block">Ubah</a>
                        <a href="hapus_series.php?id=<?= $seri["id_series"]; ?>" class="btn badge btn-outline-danger 
                        btn-block" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- Akhir Input Data Movie -->

            <a href="admin-collection.php" class="btn btn-outline-info">Kembali</a>
            
          </div>
        </div>
      </section>
      <!-- akhir collection -->
      
    <!-- footer -->
    <footer class="footer bt-footer bg-dark position-relative text-white p-4 p-lg-5">
      <div class="row">
        <div class="col">
          <img src="../img/logo.jpg" class="img-fluid mb-4 rounded-circle" width="100">
          
          <p class="text-white">
            Copyright © 2022 Cloud Cinema. All Rights Reserved
          </p>
          
        </div>

        <div class="col" style="margin-left: 400px;">
          <div class="row">
            <div class="list-group list-group-flush">
              <h5>Halaman Admin</h5>
              <a href="admin-film.php" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Film</a>
              <a href="admin-series.php" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Series</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>


  <!-- My JS -->
  <script src="js/series.js"></script>

  </body>
</html>


