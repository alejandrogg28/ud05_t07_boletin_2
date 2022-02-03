<?php
//Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.

header('Content-Type: text/html; charset=UTF-8');
echo "<pre>";print_r($_REQUEST); echo "</pre>";
echo "<br/>O valor do primeiro número é: ". "  ".$_REQUEST[num1];
echo "<br/>O valor do segundo número é: ". "  ".$_REQUEST[num2];
echo "<br/>O resultado da multiplicación é: ".$_REQUEST[num1] * $_REQUEST[num2];
?>