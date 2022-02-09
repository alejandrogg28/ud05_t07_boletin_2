<?php

//Realiza un conversor de Mb a Kb.
$mega=$_REQUEST["mega"];
$kas=$_REQUEST["kas"];

$conversion=$mega * 1000;

echo "<br/>La conversión de megas introducida en kb es ".$conversion;
?>