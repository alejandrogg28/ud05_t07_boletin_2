<?php
//Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.

header('Content-Type:text/html;charset=UTF-8');
$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
echo "O resultado da suma é: ".$suma=$_REQUEST[num1] + $_REQUEST[num2];
echo "<br/>O resultado da resta é: ".$resta=$_REQUEST[num1] - $_REQUEST[num2];
echo "<br/>O resultado da división é: ".$dividir=$_REQUEST[num1] / $_REQUEST[num2];
echo "<br/>O resultado da multiplicación é: ".$multiplicar=$_REQUEST[num1] * $_REQUEST[num2];
?>

