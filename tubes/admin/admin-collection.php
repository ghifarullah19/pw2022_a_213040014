<?php 
session_start();

require '../functions.php';

if (!(isset($_SESSION["login"]))) {
  header("Location: ../login.php");
  exit;
}

$movie_series = query("SELECT * 
FROM movie
NATURAL JOIN series 
WHERE id_movie = id_series 
AND id_movie <= 3 
AND id_series <= 3;");

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

    <!-- Bootstrap CSS v.4.1.3 -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!-- Bootstrap CSS v.5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../style/style.css" />

    <!-- icon -->
    <link rel="icon" href="../img/logo.jpg" />

    <title>Koleksi | Admin CC</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
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
            <a class="nav-item nav-link active" href="#collection">Koleksi</a>
            <a class="nav-item btn btn-primary tombol" href="../logout.php"
            onclick="alert('Anda telah logout!')">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
     

      <!-- Collection -->
      <section id="menu">
        <div class="menu">
          <div class="container">

            <div class="card text-center">
              <div class="card-header">
                Selamat Datang Di Halaman Admin!
              </div>
              <div class="card-body">
                <h5 class="card-title">Halaman Admin</h5>
                <p class="card-text">Halaman ini khusus untuk admin agar dapat dengan 
                  mudah mengorganisir data film serta series</p>
              </div>
              <div class="card-footer text-muted">
                2 hari yang lalu
              </div>
            </div>            
            
            <h2 class="menu-title text-center">Koleksi</h2>

            <!-- Film -->
            <h2 class="side-title"><a href="admin-film.php">Film</a></h2>
            <div class="card-deck">
              <?php foreach ($movie_series as $ms) { ?>
                <div class="card mx-auto" style="max-width: 300px;">
                  <img class="card-img-top" src="../img/<?= $ms["gambar_movie"]; ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= $ms["judul_movie"]; ?></h5>
                    <a href="<?= $ms["link_movie"]; ?>" class="card-text">Tonton</a>
                  </div>
                </div>
              <?php } ?>
            </div>
            <!-- Akhir Film -->

            <!-- Series -->
            <h2 class="side-title"><a href="admin-series.php">Series</a></h2>
            <div class="card-deck">
              <?php foreach ($movie_series as $ss) { ?>
                <div class="card mx-auto" style="max-width: 300px;">
                  <img class="card-img-top" src="../img/<?= $ss["gambar_series"]; ?>" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title"><?= $ss["judul_series"]; ?></h5>
                    <a href="<?= $ss["link_series"]; ?>" class="card-text">Tonton</a>
                  </div>
                </div>
              <?php } ?>
            </div>
            <!-- Akhir Series -->
          </div>
        </div>
      </section>
      <!-- akhir Collection -->
      
    <footer class="bt-footer bg-dark position-relative text-white p-4 p-lg-5">
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
              <h4>Halaman Admin</h4>
              <a href="admin-film.php" class="list-group-item list-group-item-action bg-transparent border-0 
              text-white px-0 fs-5">Film</a>
              <a href="admin-series.php" class="list-group-item list-group-item-action bg-transparent border-0 
              text-white px-0 fs-5">Series</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous">
    </script>
    <!-- <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>


