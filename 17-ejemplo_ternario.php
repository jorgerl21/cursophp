<?php 
/*
Hacer un programa que calcule el total a pagar por la compra de camisas.
si se compran 3 camisas o mas se aplica un descuento de 20% sobre el total de la compra,
y si son menos de 3 camisa un descuento de 10%
*/
$cantidad = 5;
$precio = 200;
$total = ($precio*$cantidad);
($cantidad >= 3)? $total-($total*0.20) : $total-($total*0.10);
echo "Total a pagar: $" . $total;
?>