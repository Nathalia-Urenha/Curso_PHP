<?php

//VARIÁVEIS PRÉ DEFINIDAS - ARRAYS SUPERGLOBAIS

//array super global - todas as variáveis q recebemos da URL (GET)
$nome = (int)$_GET["a"] . (int)$_GET["b"] ;
var_dump($nome);
echo "<br>";

//pegar o ip do usuario
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;

//pega o diretorio
$dir = $_SERVER["SCRIPT_NAME"];
echo $dir;
?>