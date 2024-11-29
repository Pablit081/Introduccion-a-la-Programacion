<?php
// Calcula el area de un triangulo equiltero
// @param entero $lado
// @return float 
function area_equilatero($lado) {
    $area;
    $area = sqrt(3) / 4 * $lado;
    return $area;

}