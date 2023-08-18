<?php 
//ambos metodos tanto POST como GET sirven para recuperar y almacenar la informacion descrita en un form
//solo que POST es mas seguro ya que este no muestra ninguna informacion en la URL del navegador
// METODO POST
/*
$nombre = $_POST["nombre"];
$asignatura = $_POST["asignatura"];
$frutas = $_POST["frutas"];
echo $nombre . " - " . $asignatura . " - " . $frutas;
*/
// METODO GET
/*
$nombre = $_GET["nombre"];
$asignatura = $GET["asignatura"];
$frutas = $_GET["frutas"];
echo $nombre . " - " . $asignatura . " - " . $frutas;
*/

//MULTIPLES SELECT
$materias = $_POST["asignatura"];
foreach ($materias as $asignatura) {
    echo $asignatura . "<br>"; 
}

echo "<br><br>"; 

//MULTIPLES CHECKBOX
$fresa = $_POST["frutas"];
foreach ($fresa as $fruta) {
    echo $fruta . "<br>";
}

?>