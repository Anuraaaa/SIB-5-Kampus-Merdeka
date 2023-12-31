<?php
//buat array scalar judul kolom
$ar_judul = ['NO','NAMA','KONDISI','HARGA','STOK','KATEGORI','FOTO','ACTION'];
//ciptakan object dari class Produk
$obj_produk = new Produk();
//panggil fungsionalitas terkait
//----------proses pencarian-----------
$keyword = $_GET['keyword']; // tangkap request pencarian berdasarkan keywordnya
if(!empty($keyword)){
	$rs = $obj_produk->cari($keyword); //jika ada pencarian
}
else{
	$rs = $obj_produk->index(); //jika tidak ada pencarian
}
//print_r($rs); die();
?>
<h3>Daftar Produk</h3>
<?php
if(isset($_SESSION['MEMBER'])){
?>
<a href="index.php?hal=produk_form" class="btn btn-primary">Tambah</a>
<?php } ?>
<table class="table table-striped">
	<thead>
		<tr>
			<?php
				foreach($ar_judul as $jdl){
					echo '<th>'.$jdl.'</th>';
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 1;
		foreach($rs as $produk){
        ?>    
			<tr>
				<td><?= $no ?></td>
				<td><?= $produk['nama'] ?></td>
				<td><?= $produk['kondisi'] ?></td>
                <td align="right">Rp. <?= number_format($produk['harga'],0,',','.') ?></td>
				<td><?= $produk['stok'] ?></td>
				<td><?= $produk['kategori'] ?></td>
				<td width="15%">
					<?php
					if(!empty($produk['foto'])){
					?>
						<img src="images/<?= $produk['foto'] ?>" width="50%" />
					<?php
					}
					else{
					?>
						<img src="images/nophoto.jpg" width="50%" />
					<?php } ?>	
				</td>
                <td>
					<form method="POST" action="produk_controller.php">
					<a href="index.php?hal=produk_detail&id=<?= $produk['id'] ?>" 
					   title="Detail Produk" class="btn btn-info btn-sm">
						<i class="bi bi-eye"></i>
					</a>
					<?php
					if(isset($_SESSION['MEMBER'])){
					?>
					<a href="index.php?hal=produk_form&id=<?= $produk['id'] ?>" 
					   title="Ubah Produk" class="btn btn-warning btn-sm">
						<i class="bi bi-pencil"></i>
					</a>
						<?php
						if($_SESSION['MEMBER']['role'] != 'staff'){
						?>
						<button type="submit" title="Hapus Produk" class="btn btn-danger btn-sm"
							name="proses" value="hapus" onclick="return confirm('Anda Yakin diHapus?')">
							<i class="bi bi-trash"></i>
						</button>
						<?php } ?>
					<input type="hidden" name="id" value="<?= $produk['id'] ?>" /> 
					<?php } ?>
					</form>
				</td>
			</tr>
        <?php    
		$no++;
		}	
		?>
	</tbody>
</table>