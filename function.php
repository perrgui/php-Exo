<?php 

function tva(?float $price): ?float{
    $price = round($price /1.2, 2, PHP_ROUND_HALF_UP);
    return  $price;
}
?>