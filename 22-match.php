<?php 
$a = 7;

$x = 10;
$y = 9;
$x = 7;

$resultado = match ($a) {
    $x => "valor igaual a x",
    $y => "valor igaual a y",
    $z => "valor igaual a z",
    default => "no coincide"
};
echo $resultado;
?>