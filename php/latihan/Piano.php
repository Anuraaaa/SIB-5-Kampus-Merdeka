<?php
require_once 'MusikTekan.php';

class Piano implements MusikTekan{
    public function tekan(){
        echo '<br/>Suara piano ting....ting....ting';
    }
}