<?php
    //*inciso a)*//
    function leerTemp ($unn) {
        $arreglo = [];
	    for ($i = 0; $i < $unn; $i++) {
		 // cargar
		 echo("ingresar temperatura"."\n"); 
		 $arreglo[$i] = trim(fgets(STDIN)); 
	    }    
	return $arreglo;
    }

    //*inciso b)*//
    function listarTemp ($elArreglo) {
        echo("Temperaturas ingresadas:"."\n");
        foreach ($elArreglo as $temperatura) {
            echo($temperatura."ºC, ");
        }
        echo("\n");
    }
    
    //*inciso c)*//
    function promTemp ($elArreglo) {
        $suma = 0;
        foreach ($elArreglo as $temperatura) {
            $suma += $temperatura;
        }
        return $suma / count($elArreglo);
    }
    
    //*incisco d)*//
    function porcTempSuperiores ($elArreglo, $tempABuscar) {
        $cantTemp=0;
        $porcentTemp=0;
        $n=count($elArreglo);
        for ($i=0; $i<$n; $i=$i+1) {
            if ($elArreglo[$i]>$tempABuscar) {
                $cantTemp=$cantTemp+1;
            }
        }
        $porcentTemp=$cantTemp*100/$n;
        return $porcentTemp;
    }

    //echo ("el porcentaje es: ".porcTempSuperiores ([10,15,30,25,5],5)."\n");

    //*incisco e)*//
    function minTemp ($elArreglo) {
        $indice=-1;
        $tempMenor=0;
        $n=count($elArreglo);
        for ($i=0; $i<$n; $i=$i+1) {
            if ($elArreglo[$i]<$tempMenor || $i==0) {
                $indice=$i;
                $tempMenor=$elArreglo[$i];
            }
        }
        return $indice;
    }

    //echo ("la temperatura menor esta en el lugar: ".minTemp([])."\n");

    //*incisco f)*//
    function maxTemp ($elArreglo) {
        $indice=-1;
        $tempMayor=0;
        $n=count($elArreglo);
        for ($i=0; $i<$n; $i=$i+1) {
            if ($elArreglo[$i]>$tempMayor || $i==0) {
                $indice=$i;
                $tempMayor=$elArreglo[$i];
            }
        }
        return $indice;
    }

    //echo ("la temperatura mayor esta en el lugar: ".maxTemp([10,100,15,5,10,50,])."\n");

    //*inciso g)*//
    function extremosTemp ($elArreglo) {
        $min = minTemp($elArreglo);
        $max = maxTemp($elArreglo);
        $minMax =["min" => $elArreglo[$min], "max"=> $elArreglo[$max]];
        return $minMax;
    }

    echo ("los extremos estan en: ".extremosTemp([10,100,15,5,10,50,])."\n");
?>
