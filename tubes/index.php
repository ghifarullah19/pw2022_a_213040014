<?php
session_start();

require 'functions.php';

$movie_series_terbaik = query("SELECT * 
FROM movie
NATURAL JOIN series
WHERE id_movie = id_series
AND id_movie < 3
AND id_series <= 2");
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

    <!-- Bootstrap CSS v.5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style/style.css" />

    <!-- icon -->
    <link rel="icon" href="img/logo.jpg" />

    <title>Cloud Cinema</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="img/logo.jpg" alt="" class="logo"
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
            <a class="nav-item nav-link active" href="#home"
              >Utama<span class="sr-only">(current)</span></a
            >
            <a class="nav-item nav-link" href="#about">Tentang</a>
            <a class="nav-item nav-link" href="#highlight">Sorotan</a>
            <a class="nav-item nav-link" href="collection.php">Koleksi</a>
            <a class="nav-item nav-link" href="contact.php">Kontak</a>
            <a class="nav-item btn btn-primary tombol" href="login.php">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section id="home">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="img-profile-logo">
          <img src="img/logo.jpg" class="rounded-circle" alt="" style="margin-bottom: -30px;">
        </div>
        <h1 class="display-4">Cloud Cinema</h1>
        <p class="lead">Stream Series & Film</p>
        <p class="mt-3 fs-6 text-light fst-italic">Tertarik menjadi admin? <a href="registrasi.php" class="text-decoration-none text-white 
        fw-bold">Klik Disini!</a></p>
      </div>
    </div>
  </section>
    <!-- akhir jumbotron -->

      <!-- about -->
      <section id="about">
        <div class="container">
          <div class="about text-center">
            <h2 class="about-title" data-aos="fade-down">Tentang Kami</h2>
            <div class="row">
              <div class="col">
                <div class="about-lutfi w-100" data-aos="fade-up">
                  <img
                    src="img/profile.png"
                    alt="lutfi"
                    class="rounded-circle profile" 
                  />
                  <h3>Muhammad Lutfi</h3>
                  <p>Founder</p>
                  <div>
                    <p>
                      Founder dari Cloud Cinema. Lahir pada tanggal 11
                      Oktober 2002 di Bandung. Akrab dipanggil Lutfi ini
                      merupakan Mahasiswa UNPAS. Dia alumni SMA Pasundan 1 Cimahi dan pernah menjadi Juara 2 di Lomba Film Pendek Genre 2019. Setelah masuk kuliah, kini Lutfi fokus di bidang
                      Programming serta Filmmaking.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="about-us" data-aos="fade-up">
                  <img
                    src="img/logo.jpg"
                    alt="cloud_cinema"
                    class="rounded-circle"
                  />
                  <h3 class="about-us-title">Cloud Cinema</h3>
                  <p class="about-us-caption">Platform Streaming</p>
                  <div class="about-us-description">
                    <p>
                      Alamat kami berada di Jl. Sariwangi Dalam 28 Blok 23/64 Kota
                      Bandung. Cloud Cinema dikelola oleh Muhammad Lutfi bersama teman-temannya. Saat
                      ini baru ada beberapa film serta series populer yang tersedia. Kedepannya Cloud Cinema akan bersaing dengan platfrom streaming ternama lainnya.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir about -->

      <!-- highlight -->
      <section id="highlight">
        <div class="highlight ">
          <div class="container ">
            <h2 class="highlight-title text-center" data-aos="fade-down">Sorotan</h2>
            <div class="card-deck">
              <?php foreach ($movie_series_terbaik as $ms) { ?>
                <div class="card mx-auto"  style="max-width: 250px;">
                  <img src="img/<?= $ms["gambar_movie"]; ?>" class="card-img-top" 
                  alt="gambar-movie" data-aos="fade-right"/>
                  <div class="card-body">
                    <h5 class="card-title"><?= $ms["judul_movie"]; ?></h5>
                    <p>
                      <a href="<?= $ms["link_movie"]; ?>" class="card-text">Tonton</a>
                    </p>
                  </div>
                </div>
              <?php } ?>
              <?php foreach ($movie_series_terbaik as $ss) { ?>
                <div class="card mx-auto"  style="max-width: 250px;">
                  <img src="img/<?= $ss["gambar_series"]; ?>" class="card-img-top" 
                  alt="gambar-series" data-aos="fade-right"/>
                  <div class="card-body">
                    <h5 class="card-title"><?= $ss["judul_series"]; ?></h5>
                    <p>
                      <a href="<?= $ss["link_series"]; ?>" class="card-text">Tonton</a>
                    </p>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </section>
      <!-- akhir highlight -->

    <!-- footer -->
    <footer class="bt-footer bg-dark position-relative text-white p-4 p-lg-5">
      <div class="row">
        <div class="col">
          <img src="img/logo.jpg" class="img-fluid mb-4 rounded-circle" width="100">
          
          
          <p class="text-white">
            Copyright © 2022 Cloud Cinema. All Rights Reserved
          </p>
          <div class="d-inline-block mx-3">
            <a href="#">
              <div class="rounded-circle bg-dark" style="width: 32px;height: 32px;">
                <svg class="svg-inline--fa fa-instagram fa-w-14 fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                <!-- <i class="fab fa-instagram fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%"></i> Font Awesome fontawesome.com -->
              </div>
            </a>
          </div>

        </div>

        <div class="col">
          <div class="row">
            <div class="col">
              <h6 >
                <a href="collection.php" class="mb-2">Koleksi</a>
              </h6>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Series & Acara TV</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Film</a>
              </div>
            </div>
            <div class="col">
              <h6>
                <a href="contact.php" class="mb-2">Hubungi Kami</a>
              </h6>
              <div class="list-group list-group-flush">
                <a href="https://wa.me/qr/ASA4SVPXMSIQC1" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">081222024097</a>
              </div>
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
