<?php
include "porcentajeCamiones.php";
include "promedioModelos.php";
    $modeloAntiguo=9999;
    $sumaModelo=0;
    $cantVehiculos=0;
    $camiones=0;
    $camionetas=0;
    do {
        echo "Ingres el tipo de vehículo: a = Autos, c = Camioneta o d = Camiones"."\n";
        $vehiculo = trim(fgets(STDIN));
        echo "Ingrese el modelo del vehículo: aaaa"."\n";
        $modelo = trim(fgets(STDIN));
        echo "Ingrese la patente del vehículo: XXX000"."\n";
        $patente = trim(fgets(STDIN));
        if ($modelo<$modeloAntiguo) {
            $modeloAntiguo=$modelo;
            $patenteAntigua=$patente;
        }
        $cantVehiculos=$cantVehiculos+1;
        if ($vehiculo=="d") {
            $camiones=$camiones+1;
        } elseif ($vehiculo=="c") {
            $camionetas=$camionetas+1;
            $sumaModelo=$sumaModelo+$modelo;
        }
        echo "Desea ingresar otro vehículo? s = Si, n = No"."\n";
        $otro = trim(fgets(STDIN));
    } while ($otro=="s");
    $porcentCamiones=porcentajeCamiones($cantVehiculos,$camiones);
    $promModelos=promedioModelos($sumaModelo,$camionetas);
    echo "El modelo mas antiguo de todos los vehículos ingresados es: ".$modeloAntiguo." y su pantente es: ".$patenteAntigua."\n";
    echo "La cantidad de camiones ingresados es el ".$porcentCamiones." % del total de los vehículos ingresados"."\n";
    echo "El promedio de modelos de las camionetas ingresadas es ".$promModelos."\n";
?>