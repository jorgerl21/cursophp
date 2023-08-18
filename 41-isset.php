<!-- /*
//
//$numero = "";
//$numero = 4;

//unset se usa para eliminar una varible especifica
//unset($numero);

//is_null encuentra si una variable es nula
//if (is_null($numero)) {
    echo "Es nula";
//} else {
    echo "No es nula";
//}

//echo "<br><br>";

//empty determina si una varible se puede considerar como nula
//if (empty($numero)) {
//    echo "Es nula";
//} else {
//    echo "No es nula";  
//}

//echo "<br><br>";

//funcio isset comprueba si una variable esta definida y no es nula
//$numero= $_GET["numero"];

//if (isset($numero)) {
//    echo "Esta definida";
//} else {
//    echo "No esta definida";  
//}
//?>-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="42-for_isset_prueba.php" method="POST">
        <input type="text" name="numero">
        <button type="submit">Enviar</button>
    </form>

    <?php 
    if (isset($_POST['numero']) && $_POST['numero'] != "") {
        include "42-for_isset_prueba.php";
    } 
    ?>

</body> 
</html>