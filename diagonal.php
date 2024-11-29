<?php
//Calcula la distancia en linea recta entre dos puntos que refieren a distancias con un angulo recto en el medio
// float $A, $B, $C

echo "Ingrese distancia de su casa a la esquina";
$A = trim(fgets(STDIN));
echo "Ingrese distancia desde la esquina hasta la casa de su amigo ";
$B = trim(fgets(STDIN));
$D = sqrt($A*$A+$B*$B);
echo "La distancia en diagonal es: ".$D;
?>