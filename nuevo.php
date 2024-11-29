<?php

//Calcula la distancia en linea recta entre dos casas
//float dist1, dist2, distancia @param float $cat1, $cat2 @return float $hipotenusa
echo "Ingrese la distancia X: ";
$dist1 = trim(fgets(STDIN));
echo "Ingrese la distancia Y: ";
$dist2 = trim(fgets(STDIN));
$distancia = calcHipotenusa($dist1,$dist2);
echo ("La distancia en linea recta de una casa a otra es: ".$distancia." metros");

function calcHipotenusa ($cateto1, $cateto2) {
    //float $hipotenusa, $cat1, $cat2
    $cat1=cuadradoDeUnNumero($cateto1);
    $cat2=cuadradoDeUnNumero($cateto2);
    $hipotenusa=sqrt($cat1+$cat2);
    return ceil($hipotenusa); 
// round($hipotenusa) opcional para redondear hacia abajo el nuemro decimal
// floor($hipotenusa) opcional para redondear hacia el numero entero menor
// ceil($hipotenusa) opcional para redondear hacia el numero entero mayor
}

// @param float $base 
// @return float $resultado
// *Devuelve el cuadro de un numero*
function cuadradoDeUnNumero ($base) 
{

	$resultado=$base*$base;
	return $resultado;
}

?>