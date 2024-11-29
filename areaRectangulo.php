<?php
    //*Calcula y muestra el área de un rectángulo, ingresando los valores de su base y su altura.*//
    //*FLOAT $base, $altura, $area*//
    echo "Ingrese la base del rectángulo: "."\n";
    $base = trim(fgets(STDIN));
    echo "Ingrese la altura del rectángulo: "."\n";
    $altura = trim(fgets(STDIN));
    $area = $base * $altura;
    echo "El área del rectángulo es " . $area;
?>