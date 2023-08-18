<?php 

//acendente
    $c = 1;

    do {
        echo $c . "<br>";
        $c++;
    } while ($c <= 20 );

    echo "<p></p>"; 

    echo "<br><br>";

//descendente
$c_2 = 20;
do {
    echo $c_2 . "<br>";
    $c_2--;
} while ($c_2 >= 1 );

    echo "<p></p>"; 
    echo "<br><br>";

$num = 5;
$factor = 1;

do {
    $res = $num * $factor;
    echo " $num x $factor = " . $res . "<br> <p></p>";
    $factor++;
} while ($factor <= 12);

    echo "<p></p>"; 
    echo "<br><br>";

$num_2 = 5;
$factor_2 = 12;

    do {
        $res = $num_2 * $factor_2;
        echo " $num_2 x $factor_2 = " . $res . "<br> <p></p>";
        $factor_2--;
    } while ($factor_2 >= 1);


?>