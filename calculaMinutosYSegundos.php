<?php
    //*Calcula cuantos minutos y segundos son X segundos.*//
    //*FLOAT $segundosIng, $minutos, $segundosResto*//
    echo "Ingrese total de segundos: "."\n";
    $segundosIng = trim(fgets(STDIN));
    $minutos = $segundosIng / 60;
    $segundosResto = ($minutos - (INT)($minutos))*60;
    echo $segundosIng . " segundos son ".(INT)($minutos).":".$segundosResto;
?>