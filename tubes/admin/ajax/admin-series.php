<?php 
require '../../functions.php';

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
      <?php foreach ($movie_series as $ser) { ?>
        <tr class="align-middle">
          <th scope="row"><?php echo $no++; ?></th>
          <td>
            <img src="../img/<?php echo $ser["gambar_series"]; ?>" width="100">
          </td>
          <td class="align-middle"><?php echo $ser["judul_series"]; ?></td>
          <td class="align-middle"><?php echo $ser["sutradara_series"]; ?></td>
          <td class="align-middle"><?php echo $ser["aktor_series"]; ?></td>
          <td class="align-middle"><?php echo $ser["tahun_rilis_series"]; ?></td>
          <td class="align-middle"><?php echo $ser["studio_series"]; ?></td>
          <td class="align-middle" class="aksi">
            <a href="<?= $ser["link_series"]; ?>" target="_blank" class="btn badge btn-block btn-outline-success
            ">Tonton</a>
            <a href="ubah_series.php?id=<?= $ser["id_series"]; ?>" class="btn badge btn-block btn-outline-warning">Ubah</a>
            <a href="hapus_series.php?id=<?= $ser["id_series"]; ?>" class="btn badge btn-block btn-outline-danger" 
            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<!-- Akhir Input Data Series -->