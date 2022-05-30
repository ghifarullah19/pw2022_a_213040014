<?php
// Studi kasus

$mahasiswa = [
  ["Muhammad Lutfi", "213040014", "ghifarullah7@gmail.com", "Teknik Informatika"],
  ["Gilman Arief", "213040998", "gilman@gmail.com", "Teknik Informatika"],
  ["Fowaz Alvarez", "213040999", "fowaz@gmail.com", "Teknik Informatika"],
  ["Eka Avril", "ekaavrl@gmail.com", "Pendidikan Masyrakat", "213041000"]
];
var_dump($mahasiswa);



?>

<?php foreach ($mahasiswa as $mhs) {?>
  <ul>
    <?php foreach ($mhs as $ms) {?>
      <li><?php echo $ms; ?></li>
    <?php } ?>
  </ul>
<?php } ?>

<?php foreach ($mahasiswa as $mhs) {?>
  <ul>
    <li>Nama    : <?php echo $mhs[0]; ?></li>
    <li>NPM     : <?php echo $mhs[1]; ?></li>
    <li>Email   : <?php echo $mhs[2]; ?></li>
    <li>Jurusan : <?php echo $mhs[3]; ?></li>
  </ul>
<?php } ?>