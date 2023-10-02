<?php
require_once 'bentuk2d.php';

class Lingkaran extends Bentuk2D {
    public $jari2;
    public function __construct($jari2){
    $this->jari2 = $jari2;
    }
    public function namabidang(){
        return 'Lingkaran';
    }
    public function luasBidang(){
        return pi() * $this->jari2 * $this->jari2;
    }
    public function kelilingBidang() {
        return 2 * pi() * $this->jari2;
    }
        
    }


?>