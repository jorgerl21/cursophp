<?php 
    $dia = 1;

    if ($dia == 0) {
        echo "Domingo";
    }elseif ($dia == 1) {
        echo "Lunes";
    }elseif ($dia == 2) {
        echo "Martes";
    }elseif ($dia == 3) {
        echo "Miercoles";
    }elseif ($dia == 4) {
        echo "Jueves";
    }elseif ($dia == 5) {
        echo "Viernes";
    }elseif ($dia == 6) {
        echo "Sabado";
    }else {
        echo "El valor ingresado no es valido";
    }
?>