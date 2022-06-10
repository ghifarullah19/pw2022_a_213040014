<?php 
session_start();

require 'functions.php';

$conn = koneksi();

// cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $query = 'SELECT username
  FROM user
  WHERE id = $id;';

  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($key === hash('sha256', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION['login'])) {
  header("Location: admin/admin-collection.php");
  exit;
}

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "SELECT * 
  FROM user
  WHERE username = '$username';";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) === 1) {

    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["login"] = true;

      // cek remember me
      if (isset($_POST['remember'])) {
        // buat cookie
        
        setcookie('id', $row['id'], time() + 60);
        setcookie('key', hash('sha256', $row['username']), time() + 60);
      }
      header("Location: admin/admin-collection.php");
      exit;
    }

  }

  $error = true;

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

    <link rel="stylesheet" href="style/style.css">

    <link rel="icon" href="img/logo.jpg" />

    <title>Halaman Login</title>
  </head>
  <body style="background-color: #427699;">

  <?php if (isset ($error)) : ?>
    <script>
      alert("Username / Password Salah!");
    </script>
  <?php endif; ?>

  <div class="container">
    <div class="card border-primary mx-auto rounded" 
    style="max-width: 32rem; height: 28rem; margin-top: 90px;
    /*box-shadow: 10px 10px #888888;*/"
    >
      <div class="card-header bg-transparent border-primary">
        <h1 class="text-center">LOGIN</h1>
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
          <div class="form-group form-check">
            <input type="checkbox" name="remember" id="remember"  class="form-check-input">
            <label for="remember" class="form-check-label">Remember me</label>
          </div>
          <div class="form-group">
            <button type="submit" name="login" class="btn btn-info col" style="margin-bottom: -30px;">LOGIN</button>
          </div>
        </form>
      </div>
      <div class="card-footer bg-transparent border-primary" style="height: 4rem;">
        <div class="row">
          <div class="col">
            <a href="registrasi.php" class="btn btn-outline-info col">Silahkan Registrasi</a>
          </div>
          <div class="col">
            <a href="index.php" class="btn btn-outline-secondary col">Kembali</a>
          </div>
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