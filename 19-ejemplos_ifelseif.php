<?php
/*
en una fabrica de computadoras se planea ofrecer a los clientes un descuento que dependera del numero
de computadoras que compre si las computadoras son menos de 5 se les dara un 10% de descuento sobre el total de la compra 
si el numero de computadoras es mayor o igual a 5 pero menos de 10 se le otorga un 20%
y si son mas de 10 se le otorga un descuento de 40% 
el precio de cada computadora es de 700 
*/
$cantidad = 10;
$total = 700 * $cantidad;

if ($cantidad < 5) {
    $total = $total - ($total * 0.10);
    echo "Felicidades tienes 10% de descuento <br>";
}elseif ($cantidad < 10) {
    $total = $total - ($total * 0.20);
    echo "Felicidades tienes 20% de descuento <br>";
}else {
    $total = $total - ($total * 0.40);
    echo "Felicidades tienes 40% de descuento <br>";
}

echo "Total a pagar : $" . $total;
echo "<br><br>";

/*
Define las variables $tipo, $grosor, $diametro y $marca. Establece que el tipo sea “Rueda de camión”,
 el grosor 0.33, el diámetro 1.25 y la marca “Kimashuki”. Crea el código PHP donde a través de 
 condicionales if realices la siguiente comprobación: si el diámetro es superior a 1.4 debe mostrarse
por pantalla el mensaje “La rueda es para un vehículo grande”. Si es menor o igual a 1.4 debe mostrarse 
por pantalla el mensaje “La rueda es para un vehículo pequeño”. En otro caso, debe mostrarse 
“No existe un tamaño de rueda válido”.
*/

$tipo = "Rueda de camión";
$grosor = 0.33;
$diametro = 1.4;
$marca = "kimashuki";

if ($diametro >= 1.4) {
    echo "las ruedas son de un vehiculo grande";
}elseif ($diametro < 1.4) {
    echo "las ruedas son de un vehiculo pequeño";
}else {
    echo "no existe tamaño no valido";
}
echo "<br><br>";
/*
lanza un dado y determina las si guientes situaciones
si cae numero par (2, 4, 6) ganas 2 puntos
si cae numero impar (1, 3, 5) pierdes 2 puntos
si llegas a 10 ganas 
si llegas a 0 pierdes
comienzas en 6
*/
$dado=rand(1,6);
$puntaje = 1;

echo $puntaje . "<br>";


while ($puntaje <= 10 || $puntaje >= 0) {
    if ($dado == 2 || $dado == 4 || $dado == 6) {
        echo "dado - " . $dado . "<br> ";
        echo "ganaste" . "<br> ";
        $puntaje++;
    
    }else {
        echo "dado" . $dado . "<br> ";
        echo "perdiste" . "<br> ";
        $puntaje--;
    }
    echo "puntaje: " . $puntaje . "<br> ";
}


?>