<?php 
require 'vendor/autoload.php';

// require_once 'dompdf/autoload.inc.php';

require 'functions.php';
$movie = query("SELECT * FROM movie");

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$options = new Options();
$options->set('isRemoteEnabled',true);      
$dompdf = new Dompdf( $options );

$html = '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap CSS -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous"
  />
  
  <!-- My CSS -->
  <link rel="stylesheet" href="http://localhost/pw2022_a_213040014/tubes/style/style.css">
  <title>Cloud Cinema</title>
</head>
<body>

<h2 class="film-title text-center kelas">Film</h2>

<table class="table">
<thead>

  <tr>
    <th scope="col">#</th>
    <th scope="col">Gambar</th>
    <th scope="col">Judul</th>
    <th scope="col">Sutradara</th>
    <th scope="col">Aktor</th>
  </tr>';

  $i = 1;
  foreach ($movie as $mov) {
    $html .= '<tr>
      <td class="align-middle">' . $i++ . '</td>
      <td class="align-middle"><img src="http://localhost/pw2022_a_213040014/tubes/img/'. $mov["gambar_movie"] .'" 
      width="50"></td>
      <td class="align-middle">' . $mov["judul_movie"] .'</td>
      <td class="align-middle">' . $mov["sutradara_movie"] .'</td>
      <td class="align-middle">' . $mov["aktor_movie"] .'</td>
    </tr>';
  }

$html .= '</table>
</body>
</html>';
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>