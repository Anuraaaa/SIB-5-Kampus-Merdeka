<?php
include_once 'koneksi.php';
include_once 'models/Produk.php';
//1. tangkap request form (dari name2 element form)
$kode = $_POST['kode']; 
$nama = $_POST['nama']; 
$kondisi = $_POST['kondisi']; 
$harga = $_POST['harga']; 
$stok = $_POST['stok']; 
$idjenis = $_POST['idjenis']; 
$foto = $_POST['foto']; 
$tombol = $_POST['proses']; // untuk keperluan eksekusi sebuah tombol di form
//2. simpan ke sebuah array
$data = [
    $kode, // ? 1
    $nama, // ? 2
    $kondisi, // ? 3
    $harga, // ? 4
    $stok, // ? 5
    $idjenis, // ? 6
    $foto, // ? 7
];
//3. eksekusi tombol
$obj_produk = new Produk();
switch ($tombol) {
    case 'simpan':
        $obj_produk->simpan($data);
        break;
    
    default:
        header('location:index.php?hal=produk_list');
        break;
}
//4. setelah selasai arahkan ke hal produk
header('location:index.php?hal=produk_list');