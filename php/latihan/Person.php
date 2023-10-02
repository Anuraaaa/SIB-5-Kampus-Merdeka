<?php
class Person{
    //member1 variabel
    protected $nama;
    protected $gender;
    //member2 konstruktor
    public function __construct($nama,$gender){
        $this->nama = $nama;
        $this->gender = $gender;
    }
    //member3 fungsi
    public function cetak(){
        echo '<br/>Nama :'.$this->nama.
             '<br/>Jenis Kelamin :'.$this->gender;   
    }
}