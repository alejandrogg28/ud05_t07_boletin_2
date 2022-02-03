<?php
//Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se
//deberá introducir por teclado.
header('Content-Type:text/html;charset=UTF-8');
$euros=$_REQUEST["euros"];
$pesetas= $euros * 166;
echo "A cantidade indicada en pesetas é: ".$pesetas;
?>