<?php
//tangkap request form pegawai
$nama = $_POST['nama'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$tombol = $_POST['simpan'];
//set gapok 
switch ($jabatan) {
    case 'Manager': $gapok = 10000000; break;
    case 'Asisten Manager': $gapok = 7000000; break;
    case 'Staff': $gapok = 4000000; break;
    default: $gapok = 0;
}
//set tunjab 20% dari gapok
$tunjab = 0.2 * $gapok;
//set tunkel 10% dari gapok jika status menikah
$tunkel = ($status == 'Menikah') ? 0.1 * $gapok : 0;
$take_homepay = $gapok + $tunjab + $tunkel;
if(isset($tombol)){ 
?>
    Nama Pegawai: <?= $nama ?>
    <br/>Status Pernikahan: <?= $status ?>
    <br/>Jabatan: <?= $jabatan ?>
    <br/>Gaji Pokok: Rp. <?= number_format($gapok, 2, ",", ".") ?>
    <br/>Tunjangan Jabatan: Rp. <?= number_format($tunjab, 4, ",", ".") ?>
    <br/>Tunjangan Keluarga: Rp. <?= number_format($tunkel, 6, ",", ".") ?>
    <br/>Take Home Pay: Rp. <?= number_format($take_homepay, 0, ",", ".") ?>
<?php } ?>