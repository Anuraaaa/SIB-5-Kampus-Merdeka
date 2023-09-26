<?php
//buat array scalar / 1 dimensi
$ar_buah = ['Pepaya','Mangga','Pisang','Jambu','Belimbing'];
$ar_buah[2] = 'Jeruk'; //ganti element array index 2
unset($ar_buah[4]); //hapus sebuah element array
//tambah element array
$ar_buah[] = 'Naga';
$ar_buah[] = 'Sawo';
$ar_buah[] = 'Melon';
echo '----------cetak seluruh element array valuenya saja----------';
foreach ($ar_buah as $buah) {
    echo '<br/>Buah '.$buah;
}
echo '<br/>----------cetak seluruh element array key & valuenya----------';
foreach ($ar_buah as $id => $buah) {
    echo '<br/>Buah index '.$id.' adalah buah '.$buah;
}