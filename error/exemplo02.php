<?php
//vai mostrar os erros mas as notícias nao
error_reporting(E_ALL & ~E_NOTICE);
//se eu nao passar um parametro nome, nao vai mostrar a noticia de q eu nao passei
$nome = $_GET['nome'];

echo $nome;

?>