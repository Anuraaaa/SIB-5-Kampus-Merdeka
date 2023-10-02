<?php
require_once 'bentuk2d.php';

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    
    public function __construct($alas,$tinggi){
    $this->alas = $alas;
    $this->tinggi = $tinggi;
    
    }
    public function namabidang(){
        return 'Segitiga';
    }
    public function luasBidang(){
        return 0.5 * $this->alas * $this->tinggi;
    }
    public function kelilingBidang() {
        return "Tidak Diketahui";
    }
        
    }


?>