<?php 
//se crea una variable que coniene un string en MAYUSCULAS
$cadena_Texto = "HOLA MUNDO";
//la funcion strtolower convierte a todos los caracteres de la variable $cadena_texto en minusculas
echo strtolower($cadena_Texto). "<br>";


//strtoupper convierte los caracyeres de un String a mayusculas
$cadena_Texto2 = "hola mundo";
echo strtoupper($cadena_Texto2). "<br>";

//ucwords convierte en mayusculas solo las primeras letras de cada palabraa de un string
$cadena_Texto3 = "hola mundo";
$cadena_Texto3 = ucwords($cadena_Texto3);
echo $cadena_Texto3;

echo "<br><br>";

//strlen sirve para contar cuantos caracteres contiene una cadena de caracteres
$longitud = strlen($cadena_Texto);
echo $cadena_Texto . " tiene " . $longitud . " caraceteres";

//str_word_count sirve para contar el numero de palabras que contiene una cadena de caracteres
echo "<br><br>";
$palabras = str_word_count($cadena_Texto);
echo $cadena_Texto . " tiene " . $palabras . " palabras";
?>