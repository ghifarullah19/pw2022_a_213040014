<?php 

require 'functions.php';

$conn = koneksi();

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('User Baru Berhasil Ditambahkan!');
            alert('Silahkan login sekali lagi!');
            document.location.href = 'login.php';
          </script>";
  } else {
    echo mysqli_error($conn);
  }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="icon" href="img/logo.jpg" />

    <title>Halaman Registrasi</title>
  </head>
  <body style="background-color: #427699;">

  <div class="container">
    <div class="card border-primary mx-auto rounded" style="max-width: 32rem; height: 30rem; margin-top: 85px;">
      <div class="card-header bg-transparent border-primary">
        <h4 class="text-center">REGISTRASI</h4>
      </div>
      <div class="card-body text-dark font-weight-bold">
        <form action="" method="POST">
          <div class="form-group">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" class="form-control font-italic" 
            aria-describedby="emailHelp" placeholder="Masukan username">
          </div>
          <div class="form-group">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control font-italic" 
            placeholder="Masukan password">
          </div>
          <div class="form-group">
            <label for="password2">Konfirmasi Password :</label>
            <input type="password" name="password2" id="password2" 
            class="form-control font-italic" placeholder="Konfirmasi password">
          </div>
          <div class="form-group">
            <button type="submit" name="register" class="btn btn-info mx-auto col mt-2">REGISTRASI</button>
          </div>
        </form>
      </div>
      <div class="card-footer bg-transparent border-primary" style="height: 4rem;">
        <div class="row">
          <a href="login.php" class="text-center col text-primary">Kembali ke Halaman Login</a>
        </div>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>