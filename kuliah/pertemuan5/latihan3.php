<?php 
$mahasiswa = [
  ["Muhammad Lutfi", "213040014", "Teknik Informatika", "ghifarullah@gmail.com"],
  ["Gilman Arief", "213040998", "Teknik Informatika", "gilman@gmail.com"],
  ["Fowaz Alvarez", "213040999", "Teknik Informatika", "fowaz@gmail.com"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>
  <h1>Data Mahasiswa</h1>

  <!-- <ul>
    <?php foreach ($mahasiswa as $mhs) :?>
      <li><?= $mhs; ?></li>
    <?php endforeach; ?>
  </ul>

  <ul>
    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
  </ul> -->

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama : <?= $mhs[0]; ?></li>
      <li>NRP : <?= $mhs[1]; ?></li>
      <li>Jurusan : <?= $mhs[2]; ?></li>
      <li>Email : <?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach; ?>



</body>
</html>