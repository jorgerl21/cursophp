<?php 
date_default_timezone_set("America/Mexico_City");

echo date("d/m/Y");

echo "<p></p>";

$fecha_hoy = date("l d F Y");
echo $fecha_hoy;

echo "<p></p>";

//obtener reloj en formato de 12 horas
$hora = date("h:i a");
echo $hora;

?>