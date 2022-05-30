<?php 
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
    "img" => "img/munchen.png"
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
  //Tambahkan jadi 10 data
];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container">
      <h1>Daftar Mahasiswa</h1>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($mahasiswa as $mhs) { ?>
            <tr class="align-middle">
              <th scope="row"><?php echo $no++; ?></th>
              <td>
                <img src="<?php echo $mhs["img"]; ?>" width="50" class="rounded-circle">
              </td>
              <td><?php echo $mhs["nama"]; ?></td>
              <td>
                <a href="" class="btn badge bg-warning">Edit</a>
                <a href="" class="btn badge bg-danger">Delete</a>
                <a href="kuliah_latihan4.php?img=<?php echo $mhs["img"]; ?>&nama=<?php echo $mhs["nama"]; ?>&npm=<?php echo $mhs["npm"]; ?>&email=<?php echo $mhs["email"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>" class="btn badge bg-info">Detail</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>