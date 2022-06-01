<?php 

// Koneksi ke DB
function koneksi() {
  $conn = mysqli_connect("localhost", "root", "", "pw2022_213040014_tubes") or die("Koneksi Gagal!");

  return $conn;
}

// Query
function query($query) {
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// Tambah Data
function tambah($data) {
  $conn = koneksi();
  
  // ambil data dari tiap elemen dalam form
  $jdl_f = htmlspecialchars($data['judul_movie']);
  $str_f = htmlspecialchars($data['sutradara_movie']);
  $akt_f = htmlspecialchars($data['aktor_movie']);
  $lf = htmlspecialchars($data['link_movie']);
  $th_f = htmlspecialchars($data['tahun_rilis_movie']);
  $sf = htmlspecialchars($data['studio_movie']);
  
  // upload gambar
  $gbr_f = upload();
  if (!$gbr_f) {
    return false;
  } 
  
  // query insert data
  $query = "INSERT INTO 
  movie 
  VALUES 
  (null, '$jdl_f', '$str_f', '$akt_f', '$lf', '$th_f', '$sf', '$gbr_f')";
  
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function upload() {
  $namaFile = $_FILES['gambar_movie']['name'];
  $ukuranFile = $_FILES['gambar_movie']['size'];
  $error = $_FILES['gambar_movie']['error'];
  $tmpName = $_FILES['gambar_movie']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
          alert('Pilih gambar terlebih dahulu');
          </script>
          ";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!(in_array($ekstensiGambar, $ekstensiGambarValid))) {
    echo "<script>
          alert('Anda bukan mengupload gambar!');
          </script>
          ";
    return false;
  }

  // cek jika ukurannya terlalu besar 
  if ($ukuranFile > 5000000) {
    echo "<script>
          alert('Ukuran gambar terlalu besar!');
          </script>
          ";
    return false;
  }

  // lolos pengecekan, gambar siap di upload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar; 

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
  return $namaFileBaru;
}

function hapus($id) {
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM movie WHERE id_movie = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data) {
  $conn = koneksi();

  // ambil data dari tiap elemen dalam form
  $id = $data["id_movie"];
  $jdl_f = htmlspecialchars($data['judul_movie']);
  $str_f = htmlspecialchars($data['sutradara_movie']);
  $akt_f = htmlspecialchars($data['aktor_movie']);
  $lf = htmlspecialchars($data['link_movie']);
  $th_f = htmlspecialchars($data['tahun_rilis_movie']);
  $sf = htmlspecialchars($data['studio_movie']);
  $gbr_f_lama = htmlspecialchars($data["gambar_movie"]);
  
  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar_movie']['error'] === 4) {
    $gbr_f = $gbr_f_lama;
  } else {
    $gbr_f = upload();
  }

  // query insert data
  $query = "UPDATE movie SET
              judul_movie = '$jdl_f',
              sutradara_movie = '$str_f',
              aktor_movie = '$akt_f',
              link_movie = '$lf',
              tahun_rilis_movie = '$th_f',
              studio_movie = '$sf',
              gambar_movie = '$gbr_f'
            WHERE id_movie = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari($keyword) {
  $query = "SELECT * 
            FROM movie
            WHERE 
            judul_movie LIKE '%$keyword%' OR
            sutradara_movie LIKE '%$keyword%' OR
            aktor_movie LIKE '%$keyword%' OR 
            link_movie LIKE '%$keyword%' OR 
            tahun_rilis_movie LIKE '%$keyword%' OR
            studio_movie LIKE '%$keyword%'";
 return query($query);
}

// Tambah Data Series
function tambah_series($data) {
  $conn = koneksi();
  
  // ambil data dari tiap elemen dalam form
  $jdl_s = htmlspecialchars($data['judul_series']);
  $str_s = htmlspecialchars($data['sutradara_series']);
  $akt_s = htmlspecialchars($data['aktor_series']);
  $ls = htmlspecialchars($data['link_series']);
  $th_s = htmlspecialchars($data['tahun_rilis_series']);
  $ss = htmlspecialchars($data['studio_series']);
  
  // upload gambar
  $gbr_s = upload_series();
  if (!$gbr_s) {
    return false;
  } 
  
  // query insert data
  $query = "INSERT INTO 
  series
  VALUES 
  (null, '$jdl_s', '$str_s', '$akt_s', '$ls', '$th_s', '$ss', '$gbr_s')";
  
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function upload_series() {
  $namaFile = $_FILES['gambar_series']['name'];
  $ukuranFile = $_FILES['gambar_series']['size'];
  $error = $_FILES['gambar_series']['error'];
  $tmpName = $_FILES['gambar_series']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
          alert('Pilih gambar terlebih dahulu');
          </script>
          ";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!(in_array($ekstensiGambar, $ekstensiGambarValid))) {
    echo "<script>
          alert('Anda bukan mengupload gambar!');
          </script>
          ";
    return false;
  }

  // cek jika ukurannya terlalu besar 
  if ($ukuranFile > 5000000) {
    echo "<script>
          alert('Ukuran gambar terlalu besar!');
          </script>
          ";
    return false;
  }

  // lolos pengecekan, gambar siap di upload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar; 

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
  return $namaFileBaru;
}

function hapus_series($id) {
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM series WHERE id_series = $id");
  return mysqli_affected_rows($conn);
}

function ubah_series($data) {
  $conn = koneksi();

  // ambil data dari tiap elemen dalam form
  $id = $data["id_series"];
  $jdl_s = htmlspecialchars($data['judul_series']);
  $str_s = htmlspecialchars($data['sutradara_series']);
  $akt_s = htmlspecialchars($data['aktor_series']);
  $ls = htmlspecialchars($data['link_series']);
  $th_s = htmlspecialchars($data['tahun_rilis_series']);
  $ss = htmlspecialchars($data['studio_series']);
  $gbr_s_lama = htmlspecialchars($data["gambar_series"]);
  
  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar_series']['error'] === 4) {
    $gbr_s = $gbr_s_lama;
  } else {
    $gbr_s = upload_series();
  }

  // query insert data
  $query = "UPDATE series SET
              judul_series = '$jdl_s',
              sutradara_series = '$str_s',
              aktor_series = '$akt_s',
              link_series = '$ls',
              tahun_rilis_series = '$th_s',
              studio_series = '$ss',
              gambar_series = '$gbr_s'
            WHERE id_series = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function cari_series($keyword) {
  $query = "SELECT * 
            FROM series
            WHERE 
            judul_series LIKE '%$keyword%' OR
            sutradara_series LIKE '%$keyword%' OR
            aktor_series LIKE '%$keyword%' OR 
            link_series LIKE '%$keyword%' OR 
            tahun_rilis_series LIKE '%$keyword%' OR
            studio_series LIKE '%$keyword%'";
 return query($query);
}

// upload relasi antar table
function upload_terbaik() {
  $namaFile = $_FILES['gambar_terbaik']['name'];
  $ukuranFile = $_FILES['gambar_terbaik']['size'];
  $error = $_FILES['gambar_terbaik']['error'];
  $tmpName = $_FILES['gambar_terbaik']['tmp_name'];

  // cek apakah tidak ada gambar yang diupload
  if ($error === 4) {
    echo "<script>
          alert('Pilih gambar terlebih dahulu');
          </script>
          ";
    return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if (!(in_array($ekstensiGambar, $ekstensiGambarValid))) {
    echo "<script>
          alert('Anda bukan mengupload gambar!');
          </script>
          ";
    return false;
  }

  // cek jika ukurannya terlalu besar 
  if ($ukuranFile > 5000000) {
    echo "<script>
          alert('Ukuran gambar terlalu besar!');
          </script>
          ";
    return false;
  }

  // lolos pengecekan, gambar siap di upload
  // generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= ".";
  $namaFileBaru .= $ekstensiGambar; 

  move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
  return $namaFileBaru;
}

// ubah relasi antar table
function ubah_terbaik($data) {
  $conn = koneksi();

  // ambil data dari tiap elemen dalam form
  $id = $data["id_terbaik"];
  $jdl_t = htmlspecialchars($data['judul_terbaik']);
  $lt = htmlspecialchars($data['link_terbaik']);
  $gbr_t_lama = htmlspecialchars($data["gambar_terbaik"]);
  
  // cek apakah user pilih gambar baru atau tidak
  if ($_FILES['gambar_terbaik']['error'] === 4) {
    $gbr_t = $gbr_t_lama;
  } else {
    $gbr_t = upload_terbaik();
  }

  // query insert data
  $query = "UPDATE movie_series_terbaik SET
              judul_terbaik = '$jdl_t',
              link_terbaik = '$lt',
              gambar_terbaik = '$gbr_t'
            WHERE id_terbaik = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// registrasi
function registrasi($data) {
  $conn = koneksi();

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // cek username sudah ada atau belum
  $query = "SELECT username
    FROM user
    WHERE username = '$username';";

  $result = mysqli_query($conn, $query);

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('Username Sudah Terdaftar!');
          </script>";
    return false;
  }

  // cek konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('Konfirmasi Password tidak sesuai'); 
          </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  $query = "INSERT INTO
            user
            VALUES
            ('', '$username', '$password');";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

































