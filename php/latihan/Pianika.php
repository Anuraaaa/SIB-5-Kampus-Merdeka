<?php
require_once 'MusikTiup.php';
require_once 'MusikTekan.php';

class Pianika implements MusikTiup, MusikTekan{
    public function tiup(){
        echo '<br/>Suara pianika ditiup saja pufff....pufff....puff';
    }
    public function tekan(){
        echo '<br/>Suara pianika ditiup dan ditekan net....not....net';
    }
}