<?php 
session_start();

if (!(isset($_SESSION["login"]))) {
  header("Location: ../login.php");
  exit;
}
require '../functions.php';

$movie = query("SELECT * FROM movie");

if (isset($_POST["judul_naik"])) {
  $movie = query("SELECT * FROM movie ORDER BY judul_movie ASC;");
}

if (isset($_POST["sutradara_naik"])) {
  $movie = query("SELECT * FROM movie ORDER BY sutradara_movie ASC;");
}

if (isset($_POST["aktor_naik"])) {
  $movie = query("SELECT * FROM movie ORDER BY aktor_movie ASC;");
}

if (isset($_POST["tahun_naik"])) {
  $movie = query("SELECT * FROM movie ORDER BY tahun_rilis_movie ASC;");
}

if (isset($_POST["studio_naik"])) {
  $movie = query("SELECT * FROM movie ORDER BY studio_movie ASC;");
}

if (isset($_POST["judul_turun"])) {
  $movie = query("SELECT * FROM movie ORDER BY judul_movie DESC;");
}

if (isset($_POST["sutradara_turun"])) {
  $movie = query("SELECT * FROM movie ORDER BY sutradara_movie DESC;");
}

if (isset($_POST["aktor_turun"])) {
  $movie = query("SELECT * FROM movie ORDER BY aktor_movie DESC;");
}

if (isset($_POST["tahun_turun"])) {
  $movie = query("SELECT * FROM movie ORDER BY tahun_rilis_movie DESC;");
}

if (isset($_POST["studio_turun"])) {
  $movie = query("SELECT * FROM movie ORDER BY studio_movie DESC;");
}

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $movie = cari($_POST["keyword"]);
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
            <a class="nav-item btn btn-primary tombol" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
     

      <!-- collection -->
      <section id="film-1">
        <div class="film-1">
          <div class="container">
            <h2 class="film-title text-center kelas">Film</h2>
            
            <div class="row mb-3">
              <div class="col-7">
                  <div class="row mt-3">
                    <a href="cetak_film.php" target="_blank" class="btn btn-outline-info btn-sm">Cetak PHP</a>
                  </div>
                  <div class="row mt-3">
                    <a href="tambah.php" class="btn btn-outline-info btn-sm">Tambah Data Film</a>
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
                  <?php foreach ($movie as $mov) { ?>
                    <tr class="align-middle">
                      <th scope="row"><?php echo $no++; ?></th>
                      <td>
                        <img src="../img/<?php echo $mov["gambar_movie"]; ?>" width="100">
                      </td>
                      <td class="align-middle"><?php echo $mov["judul_movie"]; ?></td>
                      <td class="align-middle"><?php echo $mov["sutradara_movie"]; ?></td>
                      <td class="align-middle"><?php echo $mov["aktor_movie"]; ?></td>
                      <td class="align-middle"><?php echo $mov["tahun_rilis_movie"]; ?></td>
                      <td class="align-middle"><?php echo $mov["studio_movie"]; ?></td>
                      <td class="align-middle" class="aksi">
                        <a href="<?= $mov["link_movie"]; ?>" target="_blank" class="btn badge btn-block btn-outline-success
                        ">Tonton</a>
                        <a href="ubah.php?id=<?= $mov["id_movie"]; ?>" class="btn badge btn-block btn-outline-warning">Ubah</a>
                        <a href="hapus.php?id=<?= $mov["id_movie"]; ?>" class="btn badge btn-block btn-outline-danger" 
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
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
  <script src="js/film.js"></script>
  
  </body>
</html>


