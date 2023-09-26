<form>
Tanggal Lahir:<br/>
<select name="tgl">
	<option value="">-- Pilih Tanggal --</option>
	<?php
	for($tgl=1; $tgl <= 31; $tgl++){
    ?>
		<option value="<?= $tgl ?>"><?= $tgl ?></option>
    <?php }	?>
</select>
<select name="bln">
	<option value="">-- Pilih Bulan --</option>
	<?php
	$ar_bulan = [1=>'Jan','Feb','Mar','Apr','Mei','Jun','Jul',
	               'Ags','Sep','Okt','Nov','Des'];
	
	foreach($ar_bulan as $id => $bulan){
    ?>
    <option value="<?= $id ?>"><?= $bulan ?></option>
	<?php
    }
	?>
</select>
<select name="thn">
	<option value="">-- Pilih Tahun --</option>
	<?php
	$thn_sekarang = date("Y");
    $thn_muda = $thn_sekarang - 17;
    $thn_tua = $thn_sekarang - 35;

	while($thn_muda >= $thn_tua){
    ?>
	    <option value="<?= $thn_muda?>"><?= $thn_muda?></option>
    <?php
		$thn_muda--;
	}
	?>
</select>
<select name="thn2">
	<option value="">-- Pilih Tahun --</option>
	<?php
	$thn_sekarang = date("Y");
    $thn_muda = $thn_sekarang - 17;
    $thn_tua = $thn_sekarang - 35;

	while($thn_tua <= $thn_muda){
    ?>
	    <option value="<?= $thn_tua?>"><?= $thn_tua?></option>
    <?php
		$thn_tua++;
	}
	?>
</select>
</form>