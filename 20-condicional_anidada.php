<?php
/*
pida a usuario la edad y el genero, para que la computadora le indique si ya puede jubilarse.
Tome en cuenta que un hombre puede jubilarse cuando tenga 60 años o mas,
en cambio una mujer mayor se jubilara si tiene 54 años o mas 
*/
$edad = 53;
$genero = "F";

if ($genero == "M") {
    if ($edad >= 60) {
        echo "el hombre puede jubilarse";
    }else {
        echo "el hombre no puede jubilarse";
    }
}elseif ($genero == "F") {
        if ($edad >= 54) {
            echo "la mujer puede jubilarse";
        }else {
            echo "la mujer no puede jubilarse";
        }
}else{
    echo "indique una opcion valida";
}
?>