<?php
    //*Calcula cuantas horas,minutos y segundos son X segundos.*//
    //*FLOAT $segundosIng, $horas, $minutos, $segundosResto*//
    echo "Ingrese total de segundos: "."\n";
    $segundosIng = trim(fgets(STDIN));
    $horas = (INT)($segundosIng / 3600);
    $minutos = (($segundosIng / 3600)-$horas)*60;
    $segundosResto = ($minutos - (INT)($minutos))*60;
    echo ($segundosIng . " segundos son ". $horas. ":".(INT)($minutos).":".ceil($segundosResto)."\n");
?>