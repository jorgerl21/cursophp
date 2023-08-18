<?php 
//operadores aritmeticos
//suma
$a = 5;
$b = 4;

$suma = $a + $b;
echo $suma . "<br><br>";

//resta
$c = 8;
$d = 6;

$resta = $c - $d;
echo $resta . "<br><br>";

//multiplicacion
$e = 2;
$f = 9;

$multiplicacion = $e * $f;
echo $multiplicacion . "<br><br>";

//division
$g = 10;
$h = 5;

$division = $g / $h;
echo $division . "<br><br>";

//exponenciacion
$i = 8;
$j = 2;

$exponente = $i ** $j;
echo $exponente . "<br><br>";

//modulo o residuo
$k = 10;
$l = 3;

$modulo = $k % $l;
echo $modulo . "<br><br>";

//jerarquia de oeradores aritmeticos
//(5 * 3 - (5 ** 10 (4 - 6) / 9 + 8))
$funcion = ($a * $l - ($h ** $j * ($b - $d) / $f + $i));
echo $funcion;
?>