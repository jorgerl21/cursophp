<?php 
$fruta = "fresa";

    switch ($fruta){
        case "fresa";
            echo "Eres una fresa";
        break;

        case "manzana";
            echo "Eres una manzana";
        break;

        default:
            echo "No eres ni fresa ni manzana";
    }
    echo "<br><br>";


$dia = "0";

    switch ($dia) {
        case "0":
            echo "Domingo";
            break;
        
        case "1":
            echo "Lunes";
            break;
            
        case "2":
            echo "Martes";
            break;
        case "3":
            echo "Miercoles";
            break;
        case "4":
            echo "Jueves";
            break;
        case "5":
            echo "Viernes";
                break;
        case "6":
            echo "Sabado";
            break;
        default:
            echo "Valor incorrecto, igresa un valor de 1 a 7";
            break;
    }
?>