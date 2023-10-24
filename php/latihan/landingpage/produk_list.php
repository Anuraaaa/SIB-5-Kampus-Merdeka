<?php
//buat array scalar judul kolom
$ar_judul = ['NO','KODE','NAMA','HARGA','STOK','KATEGORI','FOTO','ACTION'];
//ciptakan object dari class Produk
$obj_produk = new Produk();
//panggil fungsionalitas terkait
$rs = $obj_produk->index();
//print_r($rs); die();
?>
<h3>Daftar Produk</h3>
<a href="index.php?hal=produk_form" class="btn btn-primary">Tambah</a>
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
				<td><?= $produk['kode'] ?></td>
				<td><?= $produk['nama'] ?></td>
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
					<a href="index.php?hal=produk_detail&id=<?= $produk['id'] ?>" 
					   title="Detail Produk" class="btn btn-info">
						<i class="bi bi-eye"></i>
					</a>
				</td>
			</tr>
        <?php    
		$no++;
		}	
		?>
	</tbody>
</table>