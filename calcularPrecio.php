<?php
function calcularPrecio($superficie, $precioBase, $clasificacion) {
    $incremento = 1;
    if ($clasificacion == "P" || $clasificacion == "M") {
        $incremento = $incremento + 0.15;
    } elseif ($clasificacion == "E") {
        $incremento = $incremento + 0.05;
    }else{
        $incremento = $incremento + 0.02;
        }  
    if ($superficie>2) {
        $incremento = $incremento + 0.1;
    } elseif ($superficie>=1&&$superficie<=2) {
        $incremento = $incremento + 0.08;
    }   
    $precioFinal = $precioBase * $incremento;
    return $precioFinal;
}