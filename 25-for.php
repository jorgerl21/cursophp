<?php
//mostrar numeros  del 1 al 20 de forma ascendente
    for ($i=1; $i <= 20 ; $i++) { 
        echo $i . "<br>";
    }

    echo "<p></p>";

    echo "<br><br>";
//mostra numeros del 1 al 20 de forma descendente

for ($i=20; $i >= 1 ; $i--) { 
    echo $i . "<br>";
}
echo "<p></p>";

echo "<br><br>";

//tabla de multiplicar

$num = 5;

for ($i=1; $i <= 12; $i++) { 
    $res = $num * $i;
    echo " $num x $i = " . $res . "<br> <p></p>";
}

echo "<p></p>";

echo "<br><br>";


$num_2 = 5;

for ($i=12; $i >= 1; $i--) { 
    $res = $num_2 * $i;
    echo " $num_2 x $i = " . $res . "<br> <p></p>";
}
?>