<?php

$dt = new DateTime();

//intervalo de periodo de 15 dias (P15D)
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

//Acrescentou na data atual o periodo de 15 dias
$dt->add($periodo);

echo "<br/>";

echo $dt->format("d/m/Y H:i:s");

?>