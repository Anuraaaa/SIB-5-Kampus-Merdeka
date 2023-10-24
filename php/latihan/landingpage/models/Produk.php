<?php
class Produk{
    //member1 variabel
	private $koneksi;
	//member2 konstruktor
	public function __construct(){
		global $dbh; //memanggil variabel di file lain
		$this->koneksi = $dbh;
	}
    //member3 fungsionalitas
    public function index(){
        //$sql = "SELECT * FROM produk";
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.idjenis ORDER BY produk.id DESC";
        //$rs = $this->koneksi->query($sql);
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute();
		$rs = $ps->fetchAll();
		return $rs;
    }

    public function simpan($data){
        $sql = "INSERT INTO produk (kode,nama,kondisi,harga,stok,idjenis,foto)
                VALUES (?,?,?,?,?,?,?)";
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute($data);
    }

    public function getProduk($id){
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.idjenis WHERE produk.id = ?";
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute([$id]);
		$rs = $ps->fetch();
		return $rs;
    }
}