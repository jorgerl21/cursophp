<?php 
$texto = "México";

$variable_1 = $texto;
//indicamos que haremos una asignacion por referencia
$variable_2 = &$texto;

echo $variable_2. "<br><br>";

$texto = "Jorge Limas";

echo $variable_2;
?>