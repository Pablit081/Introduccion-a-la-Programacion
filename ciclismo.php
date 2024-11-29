<?php
include "convierteAsegundos.php";
include "velocidadms.php";
    echo "Ingrese la distancia recorrida de los ciclistas en metros: "."\n";
    $dist = trim(fgets(STDIN));
    echo "Ingrese la cantidad de horas del 1er ciclista: "."\n";
    $horas1 = trim(fgets(STDIN));
    echo "Ingrese los minutos del 1er ciclista: "."\n";
    $minutos1 = trim(fgets(STDIN));
    echo "Ingrese los segundos del 1er ciclista: "."\n";
    $segundos1 = trim(fgets(STDIN));
    $velocidad1 = velocidadms($dist,convierteAsegundos($horas1,$minutos1,$segundos1));
    echo "Ingrese la cantidad de horas del 2do ciclista: "."\n";
    $horas1 = trim(fgets(STDIN));
    echo "Ingrese los minutos del 2do ciclista: "."\n";
    $minutos1 = trim(fgets(STDIN));
    echo "Ingrese los segundos del 2do ciclista: "."\n";
    $segundos1 = trim(fgets(STDIN));
    $velocidad2 = velocidadms($dist,convierteAsegundos($horas1,$minutos1,$segundos1));
    echo "La velocidad del 1er ciclista es: ".round($velocidad1,2)." m/s\n";
    echo "La velocidad del 2do ciclista es: ".round($velocidad2,2)." m/s\n";
?>
