<?php
//Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.

header('Content-Type:text/html;charset=UTF-8');

$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$suma=$_REQUEST[num1] + $_REQUEST[num2];
$resta=$_REQUEST[num1] - $_REQUEST[num2];
$dividir=$_REQUEST[num1] / $_REQUEST[num2];
$multiplicar=$_REQUEST[num1] * $_REQUEST[num2];

if(isset($_REQUEST["suma"])){
    echo "<br/>O resultado da suma é: ".$suma;
    }

if(isset($_REQUEST["resta"])){
    echo "<br/>O resultado da resta é: ".$resta;
    }

if(isset($_REQUEST["dividir"])){
    echo "<br/>O resultado da división é: ".$dividir;
    }

if(isset($_REQUEST["multiplicar"])){
    echo "<br/>O resultado da multiplicación é: ".$multiplicar;
    }

?>

