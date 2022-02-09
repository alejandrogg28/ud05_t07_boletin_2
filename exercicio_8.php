<?php

//Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
//Se pagarán 12 euros por hora.

$salario=$_REQUEST["horas"];
echo "<br/>La factura es de ".$salario * 12;

?>