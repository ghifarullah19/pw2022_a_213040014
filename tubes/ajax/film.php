<?php 
require '../functions.php';

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

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Sutradara</th>
      <th scope="col">Aktor</th>
      <th scope="col">Link</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($movie_series as $ms) { ?>
      <tr class="align-middle">
        <th scope="row"><?php echo $no++; ?></th>
        <td>
          <img src="img/<?php echo $ms["gambar_movie"]; ?>" width="100">
        </td>
        <td class="align-middle"><?php echo $ms["judul_movie"]; ?></td>
        <td class="align-middle"><?php echo $ms["sutradara_movie"]; ?></td>
        <td class="align-middle"><?php echo $ms["aktor_movie"]; ?></td>
        <td class="align-middle"><?php echo $ms["link_movie"]; ?></td>
        <td class="align-middle">
          <a href="ubah.php?id=<?= $ms["id_movie"]; ?>" class="btn badge bg-warning">Ubah</a> |
          <a href="hapus.php?id=<?= $ms["id_movie"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>