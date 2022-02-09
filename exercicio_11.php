<?php

//Realiza un conversor de Kb a Mb.

$kas=$_REQUEST["kas"];

$conversion=$kas / 1000;

echo "<br/>La conversión de Kylobytes introducida en Mb es ".$conversion;
?>