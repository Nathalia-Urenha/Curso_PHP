<?php
$nome = "Nathalia";

function teste(){
  
  global $nome;
  echo $nome;
}

function teste2(){
  $nome = "Igor";
  echo "<br>";  
  echo $nome;
}

teste();
teste2();

?>