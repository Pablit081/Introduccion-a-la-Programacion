<?php
    include "costoInicial.php";
    include "costTotal.php";
    include "costoFinal.php";
    $costoTotal=0;
    $mayorCosto=0;
    $cantLavadosMasCincoKG=0;
    $cantLavadosRopaClara=0;
    $costo=0;
    $recaudacion=0;
    $costoFinal=0;
    $ventas=[];
    do {
        $datos=[];
        echo "Ingrese el nombre del cliente"."\n";
        $datos["cliente"] = trim(fgets(STDIN));
        //$nombre = trim(fgets(STDIN));
        echo "Cuantos Kg pesa su ropa?"."\n";
        $datos["peso"] = trim(fgets(STDIN));
        //$peso = trim(fgets(STDIN));
        echo "Que tipo de ropa trae? (Clara/Oscura/Voluminosa)"."\n";
        $datos["tipo de ropa"] = trim(fgets(STDIN));
        //$tipoRopa = trim(fgets(STDIN));
        echo "Desea secar su ropa? (s/n)"."\n";
        $datos["¿seca?"] = trim(fgets(STDIN));
        //$secado = trim(fgets(STDIN));
        echo "Desea planchar su ropa? (s/n)"."\n";
        $datos["¿planchada?"] = trim(fgets(STDIN));
        //$planchado = trim(fgets(STDIN));
        echo "Cual es la forma de pago? (Efectivo/Debito/Otro)"."\n";
        $datos["forma de pago"] = trim(fgets(STDIN));
        //$tipoPago = trim(fgets(STDIN));
        $datos["costo inicial"] = costoInicial ($datos["tipo de ropa"],$datos["peso"]);
        $datos["costo Total"] = CostTotal ($datos["costo inicial"], $datos["¿seca?"],$datos["¿planchada?"]);
        $datos["costo Final"] = costoFinal ($datos["costo Total"],$datos["forma de pago"]);
        //$datos=[
            //"cliente"=>$nombre,
          //  "kg de ropa"=>$peso,
            //"tipo de ropa"=>$tipoRopa,
            //"¿seca?"=>$secado,
            //"¿plancada?"=>$planchado,
            //"metodo de pago"=>$tipoPago];
        print_r($datos);
        echo "El costo total del cliente ".$datos["cliente"]." es: ".$datos["costo Total"]." y debe abonar un importe final de: ".$datos["costo Final"]."\n";
        array_push($ventas,$datos);
        if ($datos["costo Total"]>$mayorCosto) {
            $nombreMayorCosto=$datos["cliente"];
            $mayorCosto=$datos["costo Total"];
        }
        if ($datos["peso"]>=5) {
            $cantLavadosMasCincoKG=$cantLavadosMasCincoKG+1;
        }
        $recaudacion=$recaudacion+$datos["costo Final"];
        if ($datos["tipo de ropa"]=="Clara") {
            $cantLavadosRopaClara=$cantLavadosRopaClara+1;
        }
        echo "Desea ingresar otro cliente? (s/n)"."\n";
        $rta = trim(fgets(STDIN));
    } while ($rta<>"n");
    print_r($ventas);
    echo "El cliente ".$nombreMayorCosto." fue el que tuvo el mayor costo y fue de: "."$".$mayorCosto."\n";
    echo "La cantidad de tandas de ropa con mas de 5 kg es: ".$cantLavadosMasCincoKG."\n";
    echo "La cantidad de tandas de ropa clara fueron: ".$cantLavadosRopaClara."\n";
    echo "La recaudacion total fue: "."$".$recaudacion."\n";
?>