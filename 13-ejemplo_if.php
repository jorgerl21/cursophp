<?php 
$edad = 20;

if ($edad >= 18) {
    echo "Tienes $edad años, eres mayor de edad";
}

$total = 120;

if ($total > 100) {
    $total = $total - ($total * 0.20);

    echo "<br><br>conseguiste un descuento del 20% solo paga $:$total";
}
?>