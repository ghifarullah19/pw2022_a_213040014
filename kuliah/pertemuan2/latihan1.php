<?php
  // Pertemuan 2 , membahas mengenai sintaks PHP
  // Sintaks PHP
  // Penulisan sintaks PHP
  // 1. PHP di dalam HTML
    /* <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
      <h1><?php echo 'Lutfi'; ?></h1>
      echo '<br>';
    </body>
    </html> */

  // 2. HTML di dalam PHP
    /* <?php '<h1>Lutfi</h1>'; ?> */
  
  // Nilai: integer, string, dan boolean
  // Standar Output
  // echo, print
  // print_r
  // var_dump

  echo 'Muhammad Lutfi';
  echo '<br>';
  print 'Muhammad Lutfi';
  echo '<br>';
  print_r('Muhammad Lutfi');
  echo '<br>';
  var_dump("Muhammad Lutfi");
  echo '<br>';

  // Integer
  echo 10;
  echo '<br>';
  echo 123;
  echo '<br>';
  // Horizontal line
  echo '<hr>';

  // String
  echo 'Lutfi';

  // Horizontal line
  echo '<hr>';

  // Boolean: true
  echo true;

  // Horizontal line
  echo '<hr>';

  // Boolean: false
  echo false;

  // Variable
  // Wadah untuk menyimpan nilai
  // Namanya bebas tapi tidak boleh diawali oleh angka dan tidak boleh ada spasi
  $nama = 'Ghifarullah';
  $nama2 = 'Kupi';
  $namaBelakang = 'Amin Ghifarullah';
  $nama_depan = 'Muhammad Lutfi';
  echo $nama;
  // Break Line
  echo '<br>';
  
  // Bisa ditimpa / overwrite
  $nama = 'Lutfi';
  echo $nama;
  echo '<hr>';

  // String 
  // '', ""
  echo 'Senin';
  echo '<br>';
  // Jika ingin mencetak kutip satu, gunakan kutip dua
  echo "Jum'at";
  echo '<br>';
  // Vice versa
  echo 'Lutfi: "Hello, World!"';
  echo '<br>';
  // Escape character 
  // \
  echo 'Lutfi: "Jum\'at"';
  echo '<br>';
  echo "Lutfi: \"Jum'at\"";
  echo '<br>';
  
  // Interpolasi
  // Mencetak isi variable 
  // Hanya bisa digunakan oleh ""
  echo "Halo, nama saya $nama";
  echo '<br>';
  // Jika menggunakan kutip satu, akan mencetak variable nya
  echo 'Halo, nama saya $nama';
  echo '<br>';
  $price = 200;
  echo "Price: $$price";
  echo '<br>';
  echo "Price: $200";
  echo '<hr>';

  // Operator
  // Keyword yang mengoprasikan / memanipulasi nilai
  // Aritmatika
  // +, -, *, /, % (modulo / modulus / sisa bagi)
  echo 1 + 1;
  echo '<br>';
  echo 1 + 2 * 3 - 4; // KaBaTaKu
  echo '<br>';
  echo (1 + 2) * 3 - 4; // Jika tambah dulu
  echo '<br>';
  // Dengan variable
  $alas = 10;
  $tinggi = 20;
  $luas_segi_tiga = ($alas * $tinggi) / 2;
  echo $luas_segi_tiga;
  echo '<br>';
  echo 3 % 2;
  $x = 10;
  $y = 20;
  echo $x * $y;
  echo '<br>';
  echo '<hr>';
  
  // Assingment
  // =, +=, -=, *=, /=, %=, .=
  $x = 1;
  $x += 5;
  echo $x;
  echo '<br>';
  $nama = 'Lutfi';
  $nama .= " ";
  $nama .= 'Amin';
  echo '<hr>';

  // Concat 
  // Penggabung String
  // .
  $nama_depan1 = 'Lutfi';
  $nama_belakang1 = 'Amin';
  echo $nama_depan1 . " " . $nama_belakang1;
  echo '<br>';
  echo '<hr>';
  $nama_depan = 'Lutfi';
  $nama_belakang = 'Ghifarullah';
  echo $nama_depan . " " . $nama_belakang;
  echo '<hr>';

  // Perbandingan
  // <, >, <=, >=, ==, !=
  var_dump(1 < 5);
  echo '<br>';
  var_dump(1 > 5);
  echo '<br>';
  var_dump(1 == "1");
  echo '<br>';
  echo '<hr>';
  echo 1 < 5;
  echo '<br>';
  // Kelemahan PHP
  echo 10 == "10";
  echo '<hr>';

  // Identitas / strict comparison
  // ===, !==
  var_dump(1 === "1");
  echo '<br>';
  echo '<hr>';
  echo 10 === "10";
  echo '<hr>';

  // Increment / decrement
  // Penambahan / pengurangan 1
  // ++, --
  $x = 10;
  $x++;
  echo $x;
  echo '<br>';
  $x--;
  echo $x;
  echo '<br>';
  // ++ / -- diakhir
  echo $x++;
  echo '<br>';
  // ++ / diawal
  echo --$x;
  echo '<hr>';

  // Logika 
  // &&, ||, !
  $x = 10;
  var_dump($x < 20 && $x % 2 == 0);
  echo '<br>';

  $x = 30;
  var_dump($x < 20 || $x % 2 == 0);
  echo '<br>';

?>