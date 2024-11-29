<?php
function alturaEquilatero($lado) {
    $altura = SQRT(POW($lado,2)-POW($lado/2,2));
    return $altura;
}
?>