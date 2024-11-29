<?php
    //*Calcula y muestra el resto de dividir 2 numeros enteros*//
    //*INT $num1, $num2, $resto*//
    echo "Ingrese el primer número: "."\n";
    $num1 = trim(fgets(STDIN));
    echo "Ingrese el segundo número: "."\n";
    $num2 = trim(fgets(STDIN));
    $resto = $num1 -(((int) $num1/$num2)*$num2);
    echo "El resto de la división de " . $num1 . " por " . $num2 . " es " . $resto;
?>