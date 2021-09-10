<?php
//declara variável
$nome="Nathália";
echo $nome;
echo "<br>";

//imprime o tipo e o conteúdo da variável 
var_dump($nome);
echo "<br>";
$anoNascimento = 1990;

//apaga uma variável da memória
unset($nome);


//isset -> existe na memoria?

//verificar se ela existe
if(isset($nome)){
  echo $nome;
}

//Concatenação
$nome1 = "Nathália";
$sobrenome = "Urenha";
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

?>