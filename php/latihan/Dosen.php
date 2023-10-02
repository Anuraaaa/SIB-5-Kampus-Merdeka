<?php
require_once 'Person.php';

class Dosen extends Person{
    //member1 variabel
    protected $nidn;
    protected $gelar;
    //member2 konstruktor
    public function __construct($nama,$gender,$nidn,$gelar){
        parent::__construct($nama,$gender);
        $this->nidn = $nidn;
        $this->gelar = $gelar;
    }
    //member3 fungsi
    public function cetak(){
        parent::cetak();
        echo '<br/>NIDN :'.$this->nidn.
             '<br/>Gelar :'.$this->gelar.'<hr/>';   
    }
}