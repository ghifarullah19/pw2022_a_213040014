<?php 
// Menghitung total 2 kubus 
$a = 9;
$b = 4;

$luas_a = $a * $a * $a;
$luas_b = $b * $b * $b;

$total = $luas_a + $luas_b;

echo "Total luas dari kubus A dengan sisi $a and kubus B dengan sisi $b adalah $total";

echo "<hr>";

// Membuat fungsi / definisi fungsi
function total_luas_dua_kubus($a, $b)/*parameter*/ {
  $luas_a = $a * $a * $a;
  $luas_b = $b * $b * $b;
  // $luas_a = pow($a, 3);
  // $luas_b = pow($b, 3);

  $total = $luas_a + $luas_b;
  // $total = pow($a,3) + pow($b, 3);
  
  return "Total luas dari kubus A dengan sisi $a and kubus B dengan sisi $b adalah $total";
  // return "Total luas dari kubus A dengan sisi $a and kubus B dengan sisi $b adalah " . pow($a, 3) + pow($b, 3);
}
// Print dan memanggil fungsi
echo total_luas_dua_kubus(9, 4)/*argument*/;
echo "<br>";
echo total_luas_dua_kubus(10, 15);
echo "<br>";
echo total_luas_dua_kubus(100, 200);
?>