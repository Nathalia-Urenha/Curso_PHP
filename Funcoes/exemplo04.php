<?php

function ola(){

	$argumentos = func_get_args(); // RETORNA OS ARGUMENTOS PASSADOS POR PARAMETROS

	return $argumentos;

}

var_dump(ola("Bom dia", 10));

echo "<br>";


function ola2(){

	$argumentos = func_get_args(); // RETORNA OS ARGUMENTOS PASSADOS POR PARAMETROS

	print_r($argumentos);

}

ola2();

?>