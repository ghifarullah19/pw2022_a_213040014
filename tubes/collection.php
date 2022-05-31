<?php 
session_start();

if (!(isset($_SESSION["login"]))) {
  header("Location: login.php");
  exit;
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
    <link rel="stylesheet" href="style/style.css" />

    <!-- icon -->
    <link rel="icon" href="img/logo.jpg" />

    <title>Collection | Cloud Cinema</title>
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
            <a class="nav-item nav-link" href="index.php"
              >Home <span class="sr-only">(current)</span></a
            >
            <a class="nav-item nav-link active" href="#collection">Collection</a>
            <a class="nav-item nav-link" href="contact.php">Contact</a>
            <a class="nav-item btn btn-primary tombol" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
     

      <!-- Collection -->
      <section id="menu">
        <div class="menu">
          <div class="container">
            <h2 class="menu-title text-center">Collection</h2>
            
            <!-- Film -->
            <h2 class="side-title"><a href="film.php">Film</a></h2>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="card-text">This is a longer card with supporting text 
                    below as a natural lead-in to additional content. 
                    This content is a little bit longer.</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="card-text">This card has supporting text below 
                    as a natural lead-in to additional content.</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="card-text">This is a wider card with supporting 
                    text below as a natural lead-in to additional content. 
                    This card has even longer content than the first to show 
                    that equal height action.</a>
                </div>
              </div>
            </div>
            <!-- Akhir Film -->

            <!-- Series -->
            <h2 class="side-title"><a href="series.php">Series</a></h2>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="card-text">This is a longer card with supporting text 
                    below as a natural lead-in to additional content. 
                    This content is a little bit longer.</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="card-text">This card has supporting text below 
                    as a natural lead-in to additional content.</a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="card-text">This is a wider card with supporting 
                    text below as a natural lead-in to additional content. 
                    This card has even longer content than the first to show 
                    that equal height action.</a>
                </div>
              </div>
            </div>
            <!-- Akhir Series -->
          </div>
        </div>
      </section>
      <!-- akhir Collection -->
      
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
                  <svg class="svg-inline--fa fa-instagram fa-w-14 fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="fab fa-instagram fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%"></i> Font Awesome fontawesome.com -->
                </div>
              </a>
            </div>
        </div>

        <div class="col">
          <div class="row">
            <div class="col">
              <h6 >
                <a href="index.php" class="mb-2">Home</a>
              </h6>
              <div class="list-group list-group-flush">
                <a href="index.php#about" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">About</a>
                <a href="index.php#highlight" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Highlight</a>
              </div>
            </div>

            <div class="col">
              <h6>
                <a href="contact.php" class="mb-2">Contact Us</a>
              </h6>
              <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">081222024097</a>
              </div>
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
  </body>
</html>


