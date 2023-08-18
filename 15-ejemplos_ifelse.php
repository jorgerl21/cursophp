<?php 
/*
calcular el total que una persona debe de pagar en una llantera,
el precio de cada llanta es de 800 si se compran menos de 5 llantas
y de 700 si se compran 5 o mas 
*/
$cantidad = 5;

if ($cantidad >= 5) {
    $total = $cantidad * 700;
    echo "Felicidades obtuviste un descuento <br>";
    
} else {
    $total = $cantidad * 800;
    
}
echo "Total a pagar $" . $total . "<br><br>";

/*
determinar si un alumno aprueba o reprueba un curso sabiendo que aprobara 
si su promedio de tres calificaciones es mayor o igual a 7.0;
reprueba en caso de los contrario
*/
$espaniol = 10;
$matematicas = 4;
$historia = 10;
$promedio = (($espaniol + $matematicas + $historia) / 3);

if ($promedio > 7){
    echo "FELICIDADES aprobaste :)";
}else{
    echo "reprobaste :(";
}
?>