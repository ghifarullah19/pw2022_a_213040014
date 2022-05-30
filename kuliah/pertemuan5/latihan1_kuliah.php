<?php
// ARRAY
// Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

$hari = "Senin";
$hari = "Selasa";

// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; // cara baru
$bulan = array("Januari", "Februari", "Maret", "April"); // cara lama
$myArray = [100, "Lutfi", true];


// Mencetak Array
// mencetak 1 elemen / nilai menggunakan indexnya, index di dalam php dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semuan elemen pada array
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan); 
echo "<hr>";

// Mencetak menggunakan looping
// for 
for ($i = 0; $i < 3; $i++) {
  echo $hari[$i];
  echo "<br>";
}
echo "<br>";
// jika isi array fluktuatif
for ($i = 0; $i < count($hari); $i++) {
  echo $hari[$i];
  echo "<br>";
}
echo "<hr>";

// foreach (khusus untuk array)
foreach ($bulan as $b) {
  echo $b;
  echo "<br>";
} 

echo "<hr>";

foreach ($hari as $key => $value) {
  echo "Key: $key, Value: $value";
  echo "<br>";
}

// Memanipulasi isi array
// menambah elemen baru di akhir array
$hari[] = "Sabtu";
$hari[] = "Minggu";
//$hari[count($hari)] = "Minggu";
var_dump($hari);






?>