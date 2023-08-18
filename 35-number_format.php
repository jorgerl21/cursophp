<?php 
$cantidad_1 = 12732.4;
$cantidad_2 = 1931.81;

//number_format(cantidad, decimales, sep_decimales, sep_millar);

$cantidad_1 = number_format($cantidad_1,2,".",",");
echo $cantidad_1. "<br>";

$cantidad_2 = number_format($cantidad_2,2,".",",");
echo $cantidad_2;
?>