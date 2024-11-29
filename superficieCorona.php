<?php
include "superficieCircular.php";
    function superficieCorona($rMen, $rMay) {
        $superficieMenor = superficieCircular($rMen);
        $superficieMayor = superficieCircular($rMay);
        return $superficieMayor - $superficieMenor;
    }
?>