<?php

     

    $numero = $_POST['numero'];

    for ($i = 1; $i <= 12; $i++) {
        $res = $numero * $i;
        echo " $numero x $i = " . $res . "<br> <p></p>";
    }


?>
