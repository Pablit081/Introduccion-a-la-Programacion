<?php
    //*A partir del radio ingresado, se calcula y muestra el Diamtro, el Perimetro y el área de la circunsferencia.*//
    //*Y tambien calcula y muestra el Volúmen y el área de la esfera*//
    //* FLOAT $radio, $diamCircun, $perimCircun, $areaCircun, $volEsf, $areaEsf*//

    echo "Ingrese el radio de la circunsferencia: ";
    $radio = trim(fgets(STDIN));
    $diamCircun = 2 * $radio;
    $perimCircun = 2 * M_PI * $radio;
    $areaCircun = M_PI * POW($radio, 2);
    $volEsf = 4/3 * M_PI * POW($radio , 3);
    $areaEsf = 4 * M_PI * POW($radio , 2);
    echo "Usted ingresó un radio = " . $radio . "\n"; 
    echo "El diámetro de la circunsferencia es = " . $diamCircun . "\n";
    echo "El perímetro de la circunsferencia es = " . $perimCircun . "\n";
    echo "El área de la circunsferencia es = " . $areaCircun . "\n";
    echo "El volumen de la esfera es = " . $volEsf . "\n";
    echo "El área de la esfera es = " . $areaEsf . "\n";
?>