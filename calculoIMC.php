<?php
    //*Calcula y muestra el indice de masa corporal de una persona a partir de su altura y su peso.*//
    //*FLOAT $altura, $peso, $indiceMC*//
    echo "Ingrese su peso en kilogramos: "."\n";
    $peso = trim(fgets(STDIN));
    echo "Ingrese su altura en metros: "."\n";
    $altura = trim(fgets(STDIN));
    $indiceMC = $peso/($altura*$altura);
    echo "El índice de masa corporal es " . $indiceMC;
?>