<?php 
require '../../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * 
FROM movie
WHERE 
judul_movie LIKE '%$keyword%' OR
sutradara_movie LIKE '%$keyword%' OR
aktor_movie LIKE '%$keyword%' OR 
link_movie LIKE '%$keyword%' OR 
tahun_rilis_movie LIKE '%$keyword%' OR
studio_movie LIKE '%$keyword%'";

$movie_series = query($query);

?>  
    
<!-- Input Data Movie -->
<div id="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Sutradara</th>
        <th scope="col">Aktor</th>
        <th scope="col">Tahun Rilis</th>
        <th scope="col">Studio</th>
        <th scope="col" class="aksi">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($movie_series as $mov) { ?>
        <tr class="align-middle">
          <th scope="row"><?php echo $no++; ?></th>
          <td>
            <img src="../img/<?php echo $mov["gambar_movie"]; ?>" width="100">
          </td>
          <td class="align-middle"><?php echo $mov["judul_movie"]; ?></td>
          <td class="align-middle"><?php echo $mov["sutradara_movie"]; ?></td>
          <td class="align-middle"><?php echo $mov["aktor_movie"]; ?></td>
          <td class="align-middle"><?php echo $mov["tahun_rilis_movie"]; ?></td>
          <td class="align-middle"><?php echo $mov["studio_movie"]; ?></td>
          <td class="align-middle" class="aksi">
            <a href="<?= $mov["link_movie"]; ?>" target="_blank" class="btn badge btn-block btn-outline-success
            ">Tonton</a>
            <a href="ubah.php?id=<?= $mov["id_movie"]; ?>" class="btn badge btn-block btn-outline-warning">Ubah</a>
            <a href="hapus.php?id=<?= $mov["id_movie"]; ?>" class="btn badge btn-block btn-outline-danger" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- Akhir Input Data Movie -->