<?php
// Variable Scope / lingkup variable
// $x = 10;

// function tampilX() {
//   $x = 20;
//   global $x;
//   echo $x;
// }

// tampilX();
// echo "<br>";
// echo $x;

// SUPERGLOBALS 
// variable global milik PHP
// merupakan Array Associative

// $_GET
// $_GET["nama"] = "Muhammad Lutfi";
// $_GET["nrp"] = "213040014";
// var_dump($_GET);

$mahasiswa = [
  [ 
    "nama" => "Muhammad Lutfi", 
    "npm" => "213040014", 
    "email" => "ghifarullah7@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Gilman Arief", 
    "npm" => "213040998", 
    "email" => "gilman@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "img" => "img/munchen.png",
    "tugas" => [90, 80, 100]
  ],
  [
    "nama" => "Fowaz Alvarez", 
    "npm" => "213040999", 
    "email" => "fowaz@gmail.com", 
    "jurusan" => "Teknik Informatika",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Eka Avril", 
    "email" => "ekaavrl@gmail.com", 
    "jurusan" => "Pendidikan Masyrakat", 
    "npm" => "213041000",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Blaise Pascal", 
    "email" => "blaisepascal@gmail.com", 
    "jurusan" => "Fotografi dan Perfilman", 
    "npm" => "213041001",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Yunus Firmansyah", 
    "email" => "yufi@gmail.com", 
    "jurusan" => "Teknik Informatika", 
    "npm" => "213041002",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Ahmad Abdul", 
    "email" => "ahmadabdul@gmail.com", 
    "jurusan" => "Pendidikan Matematika", 
    "npm" => "213041003",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Valentinus Elang", 
    "email" => "valenelang@gmail.com", 
    "jurusan" => "Teknik Mesin", 
    "npm" => "213041004",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Muhamad Dio", 
    "email" => "muhamaddio@gmail.com", 
    "jurusan" => "Manajemen", 
    "npm" => "213041005",
    "img" => "img/munchen.png"
  ],
  [
    "nama" => "Ferel Herlambang", 
    "email" => "ferelherlambang@gmail.com", 
    "jurusan" => "Hubungan Internasional", 
    "npm" => "213041005",
    "img" => "img/munchen.png"
  ]
];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <li>
      <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["img"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
  <?php endforeach; ?>
  </ul>
  
</body>
</html>