<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Nathália Urenha");
$cad->setEmail("naty.urenha@gmail.com");
$cad->setSenha("123456");


$cad->registrarVenda();

?>