<?php

    abstract class Hewan {
        public $nama, $darah = 50, $jumlahKaki, $keahlian;

        public function __construct($nama){
            $this->nama = $nama;
        }

        public function atraksi(){
            $str = $this->nama . " sedang " . $this->keahlian;
            return $str;
        }

        abstract public function getInfoHewan();

        public function getInfo(){
            $str = "Nama = $this->nama" . "<br>" .
                   "Darah = $this->darah" . "<br>" .
                   "Jumlah Kaki = $this->jumlahKaki" . "<br>" .
                   "Keahlian = $this->keahlian";
            return $str;
        }
    }

    trait Fight {
        public $attackPower, $defensePower;

        public function serang($hewan){
            echo "$this->nama sedang menyerang $hewan->nama" . "<br>";
            echo "===========================================" . "<br>";
            $hewan->diserang($this);
        }

        public function diserang($hewan){
            echo "$this->nama sedang diserang $hewan->nama" . "<br>";
            $this->darah = $this->darah - ($hewan->attackPower / $this->defensePower);
            
            echo "Darah $this->nama tersisa : $this->darah" . "<br>";
        }
    }

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

    $elang_1 = new Elang("Elang Jawa");
    echo $elang_1->getInfoHewan() . "<br><br>";

    $harimau_1 = new Harimau("Harimau Sumatra");
    echo $harimau_1->getInfoHewan() . "<br><br>";

    $elang_1->serang($harimau_1);
    echo $harimau_1->getInfoHewan() . "<br><br>";

    $harimau_1->serang($elang_1);
    echo $elang_1->getInfoHewan() . "<br><br>";
?>