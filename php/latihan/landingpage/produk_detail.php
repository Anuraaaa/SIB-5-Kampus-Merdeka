<?php
$id = $_REQUEST['id']; // tangkap request produk id di URL
$model = new Produk(); // ciptakan obj dari class Produk
$rs  = $model->getProduk($id); // panggil fungsi u/ mendetailkan produk
?>
<div class="card" style="width: 18rem;">
  <?php
  if(!empty($rs['foto'])){
  ?>
	<img src="images/<?= $rs['foto'] ?>" class="card-img-top" />
  <?php
  }
  else{
  ?>
  <img src="images/nophoto.jpg" class="card-img-top" />
  <?php } ?>
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        Kode Produk: <?= $rs['kode'] ?> <br/>
        Kondisi Produk: <?= $rs['kondisi'] ?> <br/>
        Harga Produk: Rp. <?= number_format($rs['harga'],0,',','.') ?> <br/>
        Stok Produk: <?= $rs['stok'] ?> <br/>
        Jenis Produk: <?= $rs['kategori'] ?> <br/>
    </p>
    <a href="index.php?hal=produk_list" class="btn btn-primary">Kembali</a>
  </div>
</div>