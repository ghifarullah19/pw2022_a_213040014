<?php
// Date 
// Untuk menampilkan tanggal dengan format tertentu
echo date("l");
echo "<br>";
echo date("d");
echo "<br>";
echo date("M");
echo "<br>";
echo date("m");
echo "<br>";
echo date("l, d-M-Y");

echo "<hr>";

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo "<br>";
echo date("l", time() + 60 * 60 * 24 * 2);
echo "<br>";
echo date("d M Y", time() - 60 * 60 * 24 * 2);

echo "<hr>";

// mktime
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0,)
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0, 0, 0, 10, 11, 2002);
echo "<br>";
echo date("l", mktime(0, 0, 0, 10, 11, 2002));

echo "<hr>";

// strtotime
echo strtotime("11 Oct 2002");
echo "<br>";
echo date("l", strtotime("11 Oct 2002"));








?>