<?php
//Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.

header('Content-Type: text/html; charset=UTF-8');
echo "<pre>";print_r($_REQUEST); echo "</pre>";
echo "O valor do primeiro número é: ".$_REQUEST[num1];
echo "O valor do segundo número é: ".$_REQUEST[num2];
?>