<?php 
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string kita buat sendiri

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

echo $mahasiswa[1]["email"];
echo "<br>";
echo $mahasiswa[1]["jurusan"];
echo "<br>";
echo $mahasiswa[1]["tugas"][1];

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

<?php foreach ($mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="<?= $mhs["img"]?>" alt="">
    </li>
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["npm"]; ?></li>
    <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
    <li>Email :<?= $mhs["email"]; ?></li>
  </ul>
<?php endforeach; ?>


</body>
</html>
