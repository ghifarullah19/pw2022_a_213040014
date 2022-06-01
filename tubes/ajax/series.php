<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * 
FROM series
WHERE 
judul_series LIKE '%$keyword%' OR
sutradara_series LIKE '%$keyword%' OR
aktor_series LIKE '%$keyword%' OR 
link_series LIKE '%$keyword%' OR 
tahun_rilis_series LIKE '%$keyword%' OR
studio_series LIKE '%$keyword%'";

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
          <img src="img/<?php echo $ms["gambar_series"]; ?>" width="100">
        </td>
        <td class="align-middle"><?php echo $ms["judul_series"]; ?></td>
        <td class="align-middle"><?php echo $ms["sutradara_series"]; ?></td>
        <td class="align-middle"><?php echo $ms["aktor_series"]; ?></td>
        <td class="align-middle"><?php echo $ms["link_series"]; ?></td>
        <td class="align-middle">
          <a href="ubah.php?id=<?= $ms["id_series"]; ?>" class="btn badge bg-warning">Ubah</a> |
          <a href="hapus.php?id=<?= $ms["id_series"]; ?>" class="btn badge bg-danger" onclick="return confirm('yakin?');">Hapus</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>