<?php
include 'calcHipotenusa.php';
//Calcula la distancia en linea recta entre dos casas
//float dist1, dist2, distancia
echo "Ingrese la distancia X: ";
$dist1 = trim(fgets(STDIN));
echo "Ingrese la distancia Y: ";
$dist2 = trim(fgets(STDIN));
$distancia = calcHipotenusa($dist1,$dist2);
echo ("La distancia en linea recta de una casa a otra es: ".$distancia." metros");
?>