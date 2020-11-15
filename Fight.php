<?php

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

?>