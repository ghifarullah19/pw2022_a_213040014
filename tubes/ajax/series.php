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

<!-- Input Data Series -->
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
    <?php foreach ($movie_series as $seri) { ?>
      <tr class="align-middle">
        <th scope="row"><?php echo $no++; ?></th>
        <td>
          <img src="img/<?php echo $seri["gambar_series"]; ?>" width="100">
        </td>
        <td class="align-middle"><?php echo $seri["judul_series"]; ?></td>
        <td class="align-middle"><?php echo $seri["sutradara_series"]; ?></td>
        <td class="align-middle"><?php echo $seri["aktor_series"]; ?></td>
        <td class="align-middle"><?php echo $seri["tahun_rilis_series"]; ?></td>
        <td class="align-middle"><?php echo $seri["studio_series"]; ?></td>
        <td class="align-middle aksi">
          <a href="<?php echo $seri["link_series"]; ?>" class="btn badge btn-outline-success btn-block">Tonton</a>
          <a href="detail_series.php?id_series=<?= $seri["id_series"]; ?>" class="btn badge btn-outline-warning btn-block">Detail</a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<!-- Akhir Input Data Series --> 