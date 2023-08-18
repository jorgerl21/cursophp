<?php 
//expresion potencial
echo pow(5,3);
echo "<br><br>";

//funcion para calcular raiz cuadrada
echo sqrt(4);
echo "<br><br>";

//funcion numero pi
echo pi();
echo "<br><br>";

//redondear un numero fraccionario a entero dependiendo de sus decimales
//redondea a el numero mas proximo anterior
echo floor(4.3);
echo "<br><br>";

//redondea al numero mas proximo siguiente
echo ceil(4.3);
echo "<br><br>";

//funcion round
//esta funcion sirva para redondear decimales si el numero a redondear es <= a .49 este redondeara a su proximo anterior
//en caso de que los decimales sean >= .5 este se redondeara a su proximo siguiente
echo round(4.9);
echo "<br><br>";
echo round(4.50);
echo "<br><br>";
?>