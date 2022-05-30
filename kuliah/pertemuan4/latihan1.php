<?php 
// Pertemuan 4: Luring
// Function

// built in function
// date();
// Membutuhkan argument yang wajib diisi setidaknya satu - makruh argument
echo date("d"); // Tanggal saja
echo "<br>";
echo date("D"); // Singkatan nama hari ini
echo "<br>";
echo date("l"); // Nama lengkap hari ini
echo "<br>";
echo date("l, j F Y"); 
echo "<br>";
echo date("l, j F Y");
echo "<hr>";

//time() - haram argument
echo time();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970
echo "<br>";
// Detik dalam 1 hari kedepan 
echo time() + 86400;
echo "<br>";
echo time() + 60 * 60 *24;
echo "<hr>";
echo date("l, j F Y", time() + 60 * 60 * 24);
echo "<br>";
echo date("l, j F Y", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";

// mktime(0, 0, 0, 0, 0, 0,) - wajib argument
// Untuk mendapatkan detik pada tanggal tertentu
// jam, menit, detik, bulan, tanggal, tahun
echo mktime(0, 0, 0, 3, 5, 2022);
echo "<hr>";
echo date("l", mktime(0, 0, 0, 10, 13, 2002));
echo "<br>";
echo date("l", mktime(0, 0, 0, 10, 11, 2002));
echo "<hr>";

//Math
echo pow(2, 3); //pangkat
echo "<br>";
echo rand(1, 10); //random
echo "<br>";
// pembulatan
// round(), ceil(), floor()
echo round(2.4);
echo "<br>";
echo ceil(2.1); // ke atas (ceiling / langit-langit)
echo "<br>";
echo floor(2.9); // ke bawah (lantai)
echo "<hr>";







?>