<?php

    require_once('hewan.php');
    require_once('fight.php');
    class Elang extends Hewan {
        use Fight;

        function __construct($nama){
            parent::__construct($nama);
            $this->jumlahKaki = 2;
            $this->keahlian = 'terbang tinggi';
            $this->attackPower = 10;
            $this->defensePower = 5;
        }
        public function getInfoHewan(){
            $str = "=== Elang ===" . "<br>" . 
            parent::getInfo() . "<br>" . 
            "Atack Power = $this->attackPower" . "<br>" .
            "Dafense Power = $this->defensePower" . "<br>" ;
            return $str;
        }
    }
?>