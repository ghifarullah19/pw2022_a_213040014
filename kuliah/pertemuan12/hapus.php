<?php 
require 'functions.php';

if(hapus($_GET['id']) > 0) {
  echo "<script>
          alert('Data berhasil dihapus!');
          document.location.href = 'index.php';
        </script>";
}