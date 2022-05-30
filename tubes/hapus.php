<?php 
require 'functions.php';

$id_movie = $_GET["id"];

if (hapus($id_movie) > 0) {
  echo "
      <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'film.php';
      </script>
    ";
} else {
  echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'index.php';
      </script>
    ";
}

?>