<?php
// Pengkondisian / Percabangan
// if, else
// if, else if, else
// ternary
// switch

$x = 10;
if ($x > 5) {
  echo "Bilangan $x lebih besar dari 5";
  echo '<br>';
} else {
  echo "Bilangan $x lebih kecil dari 5";
  echo '<br>';
}
$x = 10;
if ($x < 25) {
  echo "benar";
  echo '<br>';
} else {
  echo "salah";
  echo '<br>';
}

$x = 20;
if ($x < 20) {
  echo "benar";
} else if ($x == 20) {
  echo "bingo!";
} else {
  echo "salah";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 2</title>
  <style>
    .warna-baris {
      background-color: silver;
    }
  </style>
</head>
<body>
  
<!-- Penerapan Pengkondisian dalam Pengulangan di HTML -->
<table border="1" cellpadding="10" cellspacing="0">
  <?php for ($i = 1; $i <= 5; $i++) : ?>
    <?php if ($i % 2 == 1) : ?>
      <tr class="warna-baris">
    <?php else : ?>
      <tr>
    <?php endif; ?>
      <?php for ($j = 1; $j <= 5; $j++) : ?>
        <td><?="$i, $j";?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>

</body>
</html>