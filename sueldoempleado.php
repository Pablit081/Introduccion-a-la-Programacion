<?php
    //*Calcula y muestra la remuneracion de un empleado segun sus horas trabajadas*//
    // STRING $nombre FLOAT $horasTrab $valorHora $sueldo
    echo "Ingrese el nombre del empleado. "; 
    $nombre = trim(fgets(STDIN));
    echo "Ingrese las horas trabajadas. ";
    $horasTrab = trim(fgets(STDIN));
    echo "Ingrese el valor por hora. ";
    $valorHora = trim(fgets(STDIN));
    $sueldo = $horasTrab * $valorHora;
    echo "El sueldo de " . $nombre . " es " . $sueldo;
?>