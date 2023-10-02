<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Belajar Memproses Form di PHP</title>
</head>
<body>
	<form id="frm_calc" method="GET" action="latihan3.php">
		<table align="center" border="0" 
		       cellpadding="10" cellspacing="0" width="30%">
			<thead>
				<tr bgcolor="khaki">
					<th colspan="2">Kalkulatorku</th>
				</tr>
			</thead>
			<tfoot>
				<tr bgcolor="khaki">
					<th colspan="2">
						<button type="submit" name="proses" value="tambah">+</button>
						<button type="submit" name="proses" value="kurang">-</button>
						<button type="submit" name="proses" value="kali">x</button>
						<button type="submit" name="proses" value="bagi">/</button>
						<button type="submit" name="proses" value="pangkat">^</button>
					</th>
				</tr>
			</tfoot>
			<tbody>
				<tr bgcolor="beige">
					<td width="30%">Angka 1</td>
					<td>
						<input type="text" name="a1">
					</td>
				</tr>
				<tr bgcolor="beige">
					<td>Angka 2</td>
					<td>
						<input type="text" name="a2">
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
<?php
//buat fungsi
function hitung($a1, $a2, $tombol){
    if($tombol == 'tambah') $hasil = $a1 + $a2 ;
    else if($tombol == 'kurang') $hasil = $a1- $a2 ;
    else if($tombol == 'kali') $hasil = $a1 * $a2 ;
    else if($tombol == 'bagi') $hasil = $a1 / $a2 ;
    else if($tombol == 'pangkat') $hasil = pow($a1, $a2) ;
    else $hasil = 0;

    return $hasil;
}
//tangkap request form
$b1 = $_GET['a1'];
$b2 = $_GET['a2'];
$button = $_GET['proses'];
//cetak dari pemanggilan fungsi
if(isset($tombol)){
    echo "<h3>Hasil $button Bilangan $b1 dan $b2 = hitung($b1,$b2,$button) </h3>";
}

?>