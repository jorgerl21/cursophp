<?php
$fecha_1 = "2021/11/29";
$fecha_2 = "2021-11-30";
$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

//para poder llevar a cabo el cambio de un string a un array
//haremos uso de una funcion llamada explode()
//su nomenclatura es la siguiente
//explode(parametro_Delimitador, String, parametro_Limitador)
//el parametro_Limitador es opcional

$array_Fecha1 =  explode("/", $fecha_1);

echo $array_Fecha1[2] . "<br><br>";

$array_Fecha2 = explode("-", $fecha_2);

echo $array_Fecha2[0] . "<br><br>";

$array_Numeros = explode(" ", $numeros, 2);

echo $array_Numeros[1];

?>