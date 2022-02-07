<?php

//Escribe un programa que calcule el área de un triángulo. base * altura / 2

$base=$_REQUEST["base"];
$altura=$_REQUEST["altura"];

echo "El área del triángulo es: ".($_REQUEST["base"] * $_REQUEST["altura"]) / 2;
?>