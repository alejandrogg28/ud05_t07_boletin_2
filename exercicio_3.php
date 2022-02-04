<?php
//Realiza un conversor de pesetas a euros. Ahora la cantidad en euros que se quiere convertir se
//deberá introducir por teclado.
header('Content-Type:text/html;charset=UTF-8');
$pesetas= $_REQUEST["pesetas"];
$euros= $pesetas / 166;
echo "A cantidade indicada en euros é: ".$pesetas;
?>