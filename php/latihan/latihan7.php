<!doctype html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body bgcolor="#9ED2BE">
<h3 align="center">DAFTAR MAHASISWA</h3>
<table align="center" border="1" width="50%"
       cellpadding="15" cellspacing="0">
	<thead>
		<tr bgcolor="#7EAA92">
			<th>NO</th>
			<th>NAMA</th>
			<th>NO KAMAR</th>
		</tr>
	</thead>
	<tbody>
		<?php
		for($no = 1; $no <= 100; $no++){
			//warna-warni baris
			$warna = ($no % 2 == 0) ? '#C8E4B2' : '#FFF6DC';
        ?>
	    <tr bgcolor="<?= $warna ?>">
		    <td style="text-align:center;font-weight:bold"><?= $no ?></td>
			<td>Mahasiswa <?= $no ?> </td>
			<td>Kamar No. <?= $no ?> </td>
        </tr>
		<?php } ?>
	</tbody>
</table>
</body>
</html>