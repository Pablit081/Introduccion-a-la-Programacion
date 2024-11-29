<?php
function extraeDecena($num) {
    $decena = (int)(($num % 100)/10);
    return $decena;
}
?>