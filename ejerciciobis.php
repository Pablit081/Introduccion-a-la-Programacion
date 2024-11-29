<?php
    $otroArreglo=[10,100,15,5,10,50];
    $elArreglo=[
    "temp1"=> 10,
    "temp2"=> 100,
    "temp3"=> 15,
    "temp4"=> 5,
    "temp5"=> 10,
    "temp6"=> 50
    ];
    echo $elArreglo["temp1"]."\n";
    $clave=array_keys($elArreglo);
    print_r($elArreglo); 
    print_r($otroArreglo);
    echo $clave[0]."\n"."\n"."\n";
    function minTemp($elArreglo) {
        $tempMenor=9999;
        $minIndice=0;
        foreach ($elArreglo as $valor) {
            if ($valor<$tempMenor) {
                $tempMenor=$valor;
            }

        }
    echo $tempMenor."\n";
    return $tempMenor;
    }
    echo ("La temperatura menor es: ".minTemp([10,100,15,5,10,50,])."\n");
    echo ("la temperatura menor es ".min([10,100,15,5,10,50,])."\n");
    echo ("la temperatura menor esta en el lugar :".array_search(min([10,100,15,5,10,50,]),[10,100,15,5,10,50,])."\n");
?>
