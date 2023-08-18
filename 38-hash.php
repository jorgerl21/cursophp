<?php
/*
la funcion hash sirve par convertir una serie de carcteres establecidos en una nueva
serie de caracteres de longitud fija
independientemente de la longitud de los datos de entrada 
la conversion siempre sera de una longitud fija ya establecida
*/
/*
$clave = "HolaMundo123";

$clave_2 = "AdiosMuondo321";

echo hash("md5", $clave) . "<p></p>";
echo md5($clave). "<p></p>";


/*
foreach (hash_algos() as $algoritmos) {
    echo $algoritmos . " - " . hash($algoritmos, $clave) . "<p></p>";
}*/
/*
$clave_procesada =  password_hash($clave, PASSWORD_BCRYPT, ["cost"=>15]);

echo "<p></p>";
/*
$contra =  password_verify($clave, $clave_procesada);
echo var_dump($contra);
echo "<p></p>";
/*
if (password_verify($clave, $clave_procesada)) {
    echo "las contraseñas coinciden";
}else {
    "las contraseñas no coinciden vuelve a intentarlo";
}
*//*
echo "<p></p>";

if (password_verify($clave_2, $clave_procesada)) {
    echo "las contraseñas coinciden";
}else {
    "las contraseñas no coinciden vuelve a intentarlo";
}*/

$clave = "holamundo123";

$clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]);

$clave2 = "1234567";

if (password_verify($clave2, $clave_procesada)) {
    echo "las claves coinciden";
    
}else {
    "las claves no coinciden";
}
?>