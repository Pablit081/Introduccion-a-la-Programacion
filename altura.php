<?php
// Calcula la altura de un triangulo equiltero
// @param entero $lado
// @return float 
function altura_equilatero($lado) {
    $altura =0;
    $altura = sqrt(3) / 2 * $lado;
    return $altura;

}