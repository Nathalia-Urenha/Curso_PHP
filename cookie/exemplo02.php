<?php

//array q ja contem os cookies da minha maquina
if (isset($_COOKIE['NOME_DO_COOKIE'])) {

	$obj = json_decode($_COOKIE['NOME_DO_COOKIE']);

	echo $obj->empresa;

}

?>