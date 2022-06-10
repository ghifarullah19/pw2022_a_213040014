<?php 
session_start();

require '../functions.php';

if (!(isset($_SESSION["login"]))) {
  header("Location: ../login.php");
  exit;
}

$id_movie = $_GET["id"];

if (hapus($id_movie) > 0) {
  echo "
      <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'admin-film.php';
      </script>
    ";
} else {
  echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'admin-film.php';
      </script>
    ";
}

?>