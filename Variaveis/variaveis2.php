<?php

//TIPOS SIMPLES
//String
$nome = "Nathalia";
$site = "www.nathalia.com.br";

//int e float
$ano = 2000;
$salario = 750.00;
$bloqueado = false;

//TIPOS COMPOSTOS
//array
$frutas = array("morango", "uva", "abacaxi");
echo $frutas[2];
echo "<br>";

//objeto
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br>";

//TIPOS ESPECIAIS
//resource
$arquivo = fopen("variaveis.php", "r");
var_dump($arquivo);

//null
$nulo = NULL; // ausencia de valor - nao existe
$vazio = ""; //foi iniciado mas nao tem um valor ainda - existe

?>