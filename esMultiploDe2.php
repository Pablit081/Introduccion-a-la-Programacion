<?php
/*Define si dos números son multiplos de 2*/
/*INTEGER $num1, $num2*/
include "esMultiplo.php";
echo "Ingrese el primer número: "."\n";
$num1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: "."\n";
$num2 = trim(fgets(STDIN));
echo "El número " . $num1 . (esMultiplo($num1) ? " SI es múltiplo de 2" : " NO es múltiplo de 2")."\n";
echo "El número " . $num2 . (esMultiplo($num2) ? " SI es múltiplo de 2" : " NO es múltiplo de 2")."\n";
?>