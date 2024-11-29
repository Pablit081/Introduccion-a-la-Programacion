<?php
    function costoFinal  ($unCosto , $formaPago) {
        $final = $unCosto;
        if ($formaPago == "Efectivo" || $formaPago == "Debito") {
            $final = $final - (10 * $unCosto / 100);
        }
        return $final;
    }
?>