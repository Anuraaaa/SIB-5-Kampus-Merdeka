<?php
class Bank{
	//member1 variabel
	protected $norek;
    public $nama;
	private $saldo;
    //var static & konstanta di dalam class
    public static $jml = 0;
    public const BANK = 'Bank Syariah Nurul Fikri';
	//member2 konstruktor
	public function __construct($no, $nasabah, $saldo){
		$this->norek = $no;
		$this->nama = $nasabah;
		$this->saldo = $saldo;
        self::$jml++;
	}
	//member3 fungsi2
	public function menabung($uang){
		$this->saldo += $uang;
	}
	public function menarik($uang){
		$this->saldo -= $uang;
	}
	public function mencetak(){
		echo '<b><u>'.self::BANK.'</u></b>'.
        '<br/>No. Rekening: '.$this->norek.
		'<br/>Nama Nasabah: '.$this->nama.
		'<br/>Saldo Tabungan: Rp. '.number_format($this->saldo,0,',','.').'<hr/>';
	}
}