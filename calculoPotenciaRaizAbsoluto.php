<?php
    echo "Ingrese el primer número entero"."\n";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese el segundo número entero"."\n";
    $num2 = trim(fgets(STDIN));
    $resultado = pow ($num1,$num2) + SQRT(abs($num1));
    echo "El resultado es: " . $resultado;
?>