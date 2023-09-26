Cetak Angka 1 s/d 20
<?php
for($x = 1; $x <= 20; $x++){
	if($x == 13) continue;
	if($x == 17) break;
	echo '<br/>Angka '. $x;
}
?>
<hr/>
Cetak Bilangan 50 s/d 30
<?php
for($y = 50; $y >= 30; $y--){
	echo '<br/>Bilangan '. $y;
}
?>