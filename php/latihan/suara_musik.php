<?php
require_once 'Suling.php';
require_once 'Piano.php';
require_once 'Gitar.php';
require_once 'Pianika.php';
//ciptakan object
$gitar = new Gitar();
$suling = new Suling();
$piano = new Piano();
$pianika = new Pianika();

$gitar->petik(); $suling->tiup(); $piano->tekan();
$pianika->tiup(); $pianika->tekan();