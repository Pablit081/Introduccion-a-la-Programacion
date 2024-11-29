<?php
    //*Calcula aproximadamente la edad actual de una persona.*//
    //*FLOAT $nac, $actual, $anio*//
    echo "Ingrese su año de nacimiento: "."\n";
    $nac = trim(fgets(STDIN));
    echo "Ingrese el año actual: "."\n";
    $actual = trim(fgets(STDIN));
    $anio = $actual-$nac;
    echo ("Usted tiene entre " . $anio-1 . " y ".$anio." años.");
?>