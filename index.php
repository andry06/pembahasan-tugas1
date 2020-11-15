<?php

    require_once('Elang.php');
    require_once('Harimau.php');

    $elang_1 = new Elang("Elang Jawa");
    echo $elang_1->getInfoHewan() . "<br><br>";

    $harimau_1 = new Harimau("Harimau Sumatra");
    echo $harimau_1->getInfoHewan() . "<br><br>";

    $elang_1->serang($harimau_1);
    echo $harimau_1->getInfoHewan() . "<br><br>";

    $harimau_1->serang($elang_1);
    echo $elang_1->getInfoHewan() . "<br><br>";
?>