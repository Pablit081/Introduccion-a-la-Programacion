<?php
//Calcula y muestra la suma de 3 numeros//
//INT $a $b $c $resultado

echo "Ingrese el primer número: ";
$a = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$b = trim(fgets(STDIN));
echo "Ingrese el tercer número: ";
$c = trim(fgets(STDIN));
$resultado = (int)$a + $b + $c;

echo "La suma de " . $a . ", " . $b . " y " . $c . " es " . $resultado;
?>