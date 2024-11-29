<?php
/*Funcion para obtener si dos numeros son multiplos entre si*/
include "esMultiplo.php";
    echo "Ingrese el primer número: "."\n";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese el segundo número: "."\n";
    $num2 = trim(fgets(STDIN));
    $rta1=esMultiplo($num1);
    $rta2=esMultiplo($num2);
    if($rta1) { 
        echo "El número $num1 es múltiplo de 2"."\n";
    } else 
        echo "El número $num1 NO es múltiplo de 2"."\n";
    if ($rta2) {
        echo "El número $num2 es múltiplo de 2"."\n";
    } else
        echo "El número $num2 NO es múltiplo de 2"."\n";
?>
