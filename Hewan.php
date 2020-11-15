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

?>
