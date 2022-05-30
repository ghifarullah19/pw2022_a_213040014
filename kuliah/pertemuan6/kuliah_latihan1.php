<?php
// Array Associative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilainya

$mahasiswa = [
  [ 
    "nama" => "Muhammad Lutfi", 
    "npm" => "213040014", 
    "email" => "ghifarullah7@gmail.com", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Gilman Arief", 
    "npm" => "213040998", 
    "email" => "gilman@gmail.com", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Fowaz Alvarez", 
    "npm" => "213040999", "email" => 
    "fowaz@gmail.com", 
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Eka Avril", 
    "email" => "ekaavrl@gmail.com", 
    "jurusan" => "Pendidikan Masyrakat", 
    "npm" => "213041000"
  ]
];

echo "<br>";
// var_dump($mahasiswa[2]["email"]);

?>

<?php foreach ($mahasiswa as $mhs) {?>
  <ul>
    <li>Nama    : <?php echo $mhs["nama"]; ?></li>
    <li>NPM     : <?php echo $mhs["npm"]; ?></li>
    <li>Email   : <?php echo $mhs["email"]; ?></li>
    <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
  </ul>
<?php } ?>