<?php
    function porcentajeCamiones($totalVehiculos, $cantCamiones) {
        $porcentaje = $cantCamiones*100/$totalVehiculos;
        return $porcentaje;
    }
?>