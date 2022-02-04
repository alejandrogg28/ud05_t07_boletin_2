<?php
//Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.

header('Content-Type:text/html;charset=UTF-8');
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$suma=$num1 + $num2;
$resta=$num1 - $num2;
$dividir=$num1 / $num2;
$multiplicar=$num1 * $num2;
?>

