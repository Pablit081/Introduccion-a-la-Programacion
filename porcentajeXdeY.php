<?php
    //*Calcula y muestra que porcentaje es un número de otro.*//
    //*FLOAT $num1, $num2, $porcentaje*//
    echo "Ingrese el primer número: "."\n";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese el segundo número: "."\n";
    $num2 = trim(fgets(STDIN));
    $porcentaje = ($num1 * 100) / $num2;
    echo ($num1 . " es el " . $porcentaje . "% de " . $num2);
?>