<?php 
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'Persegi_Panjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(16);
$persegipanjang = new Persegi_Panjang(24,21);
$segitiga = new Segitiga(40,18,19);

$objects = [$lingkaran, $persegipanjang, $segitiga];
$judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

echo("<center>");
echo("<h1>Bidang - Bidang</h1>");
echo("<table border='1' cellpadding='10%'>");
echo("<thead>");
echo("<tr>");
foreach ($judul as $jdl)
{
    echo("<th>$jdl</th>");
}
echo("</tr>");
echo("</thead>");
echo("<tbody>");
$no = 1;
foreach ($objects as $object) 
{
    echo("<tr>");
    echo("<td>" . ($no) . "</td>");
    echo("<td>" . $object->namaBidang() . "</td>");
    echo("<td>" . "" . "</td>"); //keterangan
    echo("<td>" . $object->luasBidang() . "</td>");
    echo("<td>" . $object->kelilingBidang() . "</td>");
    echo("</tr>");
    $no++;
}
echo("</tbody>");
echo("</table>");
echo("</center>");
?>