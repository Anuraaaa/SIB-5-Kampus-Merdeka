<?php
require_once 'Kambing.php';
require_once 'Kucing.php';
require_once 'Anjing.php';
//ciptakan object
$shaun = new Kambing();
$tom = new Kucing();
$rintintin = new Anjing();

$data = [$shaun,$tom,$rintintin];
foreach($data as $d){
    echo $d->bersuara();
}