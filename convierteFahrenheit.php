<?php
    //*Convierte grados centigrados en grados fahrenheit*//
    //*FLOAT $tempG, $tempF*//
    echo "Ingrese los grados centigrados que quiere convertir: "."\n";
    $tempG = trim(fgets(STDIN));
    $tempF = ($tempG * 9/5) + 32;
    echo "La temperatura en grados fahrenheit es: " . $tempF;
 ?>