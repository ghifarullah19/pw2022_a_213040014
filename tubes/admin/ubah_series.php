<?php 
session_start();

if (!(isset($_SESSION["login"]))) {
  header("Location: ../login.php");
  exit;
}

require '../functions.php';

// ambil data di URL
$id_series = $_GET["id_series"];
// query data mahasiswa berdasarkan id
$seri = query("SELECT * FROM series WHERE id_series = $id_series")[0];

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  
  // cek apakah data berhasil di ubah atau tidak
  if (ubah_series($_POST) > 0) {
    echo "
      <script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'admin-series.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('Data Gagal Diubah!');
      document.location.href = 'admin-series.php';
    </script>
  ";
  }
}

// Klik tombol kembali
if (isset($_POST["kembali"])) {
  echo "<script>
          document.location.href = 'admin-series.php';
        </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!-- My CSS -->
    <link rel="stylesheet" href="../style/style.css" />

    <!-- icon -->
    <link rel="icon" href="../img/logo.jpg" />

    <title>Cloud Cinema</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="../img/logo.jpg" alt="" class="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="admin-collection.php">Koleksi</a>
            <a class="nav-item nav-link" href="contact.php">Kontak</a>
            <a class="nav-item btn btn-primary tombol" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->  

        <section id="film-1">
          <div class="film-1">
            <div class="container">
              <h2 class="film-title text-center">Ubah Data Series</h2>
              
              <!-- Input Data Movie -->
              <form action="" method="post" autocomplete="off"  enctype="multipart/form-data">
                
              <input type="hidden" name="id_series" value="<?= $seri["id_series"]; ?>">
              <input type="hidden" name="gambar_series" value="<?= $seri["gambar_series"]; ?>">

                <div class="mb-3">
                  <label for="judul_series" class="form-label">Judul</label>
                  <input type="text" class="form-control" id="judul_series" name="judul_series" 
                   value="<?= $seri["judul_series"]; ?>">
                </div>

                <div class="mb-3">
                  <label for="sutradara_series" class="form-label">Sutradara</label>
                  <input type="text" class="form-control" id="sutradara_series" name="sutradara_series"
                   value="<?= $seri["sutradara_series"]; ?>">
                </div>

                <div class="mb-3">
                  <label for="aktor_series" class="form-label">Aktor</label>
                  <input type="text" class="form-control" id="aktor_series" name="aktor_series" 
                   value="<?= $seri["aktor_series"]; ?>">
                </div>
                
                <div class="mb-3">
                  <label for="link_series" class="form-label">Link</label>
                  <input type="text" class="form-control" id="link_series" name="link_series" 
                   value="<?= $seri["link_series"]; ?>">
                </div>
                
                <div class="mb-3">
                  <label for="tahun_rilis_series" class="form-label">Tahun Rilis</label>
                  <input type="number" class="form-control" id="tahun_rilis_series" name="tahun_rilis_series" 
                  maxlength="4" placeholder="Contoh: 2022" 
                  value="<?= $seri["tahun_rilis_series"]; ?>">
                </div> 
                
                <div class="mb-3">
                  <label for="studio_series" class="form-label">Studio</label>
                  <input type="text" class="form-control" id="studio_series" name="studio_series"
                   value="<?= $seri["studio_series"]; ?>">
                </div>
                
                <div class="mb-3">
                  <img src="../img/<?= $seri['gambar_series']; ?>" width="100"> <br>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input form-control" id="gambar_series" name="gambar_series" 
                      aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label form-label" for="gambar_series">Pilih gambar</label>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-outline-success" name="submit">Ubah Data Series</button>
                <button type="submit" class="btn btn-outline-danger" name="kembali">Kembali ke Data Series</button>
                
              </form>
              <!-- Akhir Input Data Movie -->
              
            </div>
          </div>
        </section>

    <!-- footer -->
    <footer class="footer bt-footer bg-dark position-relative text-white p-4 p-lg-5">
      <div class="row">
        <div class="col">
          <img src="../img/logo.jpg" class="img-fluid mb-4 rounded-circle" width="100">
          
          <p class="text-white">
            Copyright ?? 2022 Cloud Cinema. All Rights Reserved
          </p>
          
        </div>

        <div class="col" style="margin-left: 400px;">
          <div class="row">
            <div class="list-group list-group-flush">
              <h5>Halaman Admin</h5>
              <a href="admin-film.php" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Film</a>
              <a href="admin-series.php" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Series</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
