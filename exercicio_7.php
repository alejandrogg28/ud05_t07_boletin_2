<?php

//Escribe un programa que calcule el total de una factura a partir de la base imponible. (base imponible * 1,21)

$base_imponible=$_REQUEST["base_imponible"];
echo "<br/>La factura es de ".$_REQUEST["base_imponible"] * 1.21;
?>