<?php 
/*
diseñe un programama que imprima los numeros del 1 hasta el 20. (incremento y decremento)
*/

$c = 1;

$c_2 = 20;

while ($c <= 20) {
    echo $c . "<br>";
    $c++ . "<br>";
}

echo "<p></p>"; 

echo "<br><br>";

while ($c_2 >= 1) {
    echo $c_2 . "<br>";
    $c_2-- . "<br>";
}

echo "<p></p>"; 

echo "<br><br>";

/*
diseña un progrma que imprima la tabla de multiplicar de un numero dado,
desde el factor 1 hasta el 12, (incremento y decremento)
*/

$num = 5;
$factor = 1;

while ($factor <= 12) {
    $res = $num * $factor;
    echo " 5 x $factor = " . $res . "<br> <p></p>";
    $factor++;
}

echo "<p></p>";

echo "<br><br>";

$num_2 = 5;
$factor_2 = 12;

while ($factor >=1) {
    $res = $num * $factor;
    echo " 5 x $factor = " . $res . "<br> <p></p>";
    $factor--;
}
?>