<?php
// Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 13 πr2h.

$radio=$_REQUEST["radio"];
$altura=$_REQUEST["altura"];
$volumen= (3.14 / 3) * pow ($radio,2) * $altura;
echo "<br/>El volumen del cono es ".$volumen;
?>