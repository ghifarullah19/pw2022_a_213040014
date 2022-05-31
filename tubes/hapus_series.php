<?php 
session_start();

require 'functions.php';


if (!(isset($_SESSION["login"]))) {
  header("Location: login.php");
  exit;
}

$id_series = $_GET["id"];

if (hapus_series($id_series) > 0) {
  echo "
      <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'series.php';
      </script>
    ";
} else {
  echo "
      <script>
        alert('Data Gagal Dihapus!');
        document.location.href = 'series.php';
      </script>
    ";
}

?>