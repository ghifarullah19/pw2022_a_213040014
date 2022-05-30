<?php
// Pertemuan 3, membahas mengenai struktur kendali

// Pengulangan
// for 
// while 
// do...while
// foreach: pengulangan khusus array
for ($i = 0; $i < 5; $i++) {
  echo "Hello World! <br>";
}
for ($i = 1; $i <= 5; $i++) {
  echo "Hello World {$i}x! <br>";
}

for ($i = 1; $i <= 10; $i++) {
  echo 'Hello World!';
  echo '<br>';
}
echo '<hr>';

$i = 0;
while ($i < 5) {
  echo 'Hello World! <br>';
  $i++;
}
echo '<hr>';

$i = 10;
//Dijalankan terlebih dahulu sekali, jika kondisi false
do {
  echo 'Hello World! <br>';
  $i++;
} while ($i < 5);
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 1</title>
</head>
<body>

<!-- HTML Normal -->
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <td>1,1</td>
    <td>1,2</td>
    <td>1,3</td>
    <td>1,4</td>
    <td>1,5</td>
  </tr>
  <tr>
    <td>2,1</td>
    <td>2,2</td>
    <td>2,3</td>
    <td>2,4</td>
    <td>2,5</td>
  </tr>
</table>
<br>

<!-- PHP di dalam HTML -->
<table border="1" cellpadding="10" cellspacing="0">
  <?php 
      for ($i = 1; $i <= 3; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 5; $j++) {
          echo "<td>$i, $j</td>";
        }
        echo '</tr>';
      }
  ?>
</table>
<br>

<!-- Sintaks Templating -->
<table border="1" cellpadding="10" cellspacing="0">
  <?php for ($i = 1; $i <= 3; $i++) { ?>
    <tr>
      <?php for ($j = 1; $j <= 5; $j++) { ?>
        <td><?php echo "$i, $j";?></td>
      <?php } ?>
    </tr>
  <?php } ?>
</table>
<br>
<!-- Ganti {} dengan : dan endfor; -->
<table border="1" cellpadding="10" cellspacing="0">
  <?php for ($i = 1; $i <= 3; $i++) : ?>
    <tr>
      <?php for ($j = 1; $j <= 5; $j++) : ?>
        <td><?="$i, $j"; // = mengganti php echo untuk mencetak sesuatu ?></td>
      <?php endfor; ?>
    </tr>
  <?php endfor; ?>
</table>
<br>

<?php for ($i = 1; $i = 10; $i++) : ?>
  <?php for ($j = 1; $j = $i; $j++) : ?>
    <div class="kotak"><?php echo $i;?></div>
  <?php endfor; ?>
<?php endfor;?>


</body>
</html>