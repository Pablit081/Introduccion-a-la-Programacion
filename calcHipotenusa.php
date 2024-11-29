<?php
include 'hip.php';
function calcHipotenusa (float $cat1, $cat2) {
    //float $hipotenusa, $cat1, $cat2
    $cat1=cuadradoDeUnNumero($cat1);
    $cat2=cuadradoDeUnNumero($cat2);
    $hipotenusa=sqrt($cat1+$cat2);
    return $hipotenusa;

}