<?php

 require_once('Hewan.php');
 require_once('Fight.php');
class Harimau extends Hewan {
    use Fight;

    function __construct($nama){
        parent::__construct($nama);
        $this->jumlahKaki = 4;
        $this->keahlian = 'berlari cepat';
        $this->attackPower = 7;
        $this->defensePower = 8;
    }

    public function getInfoHewan(){
        $str = "=== HARIMAU ===" . "<br>" . 
        parent::getInfo() . "<br>" . 
        "Atack Power = $this->attackPower" . "<br>" .
        "Dafense Power = $this->defensePower" . "<br>" ;
        return $str;
    }
}

?>