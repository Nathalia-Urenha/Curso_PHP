<?php
//aspas duplas e simples
  $nome = "nathalia maria";
  $sobrenome = 'Urenha';
  echo "Meu nome é $nome";
  echo "<br>";
  echo 'Meu nome é $nome';
  echo "<br>";
  //////////////////////////////////////////////
  //uppercase
  echo strtoupper($nome);
  echo "<br>";
  //lowcase
  echo strtolower($nome);
  echo "<br>";
  //primeira letra de cada palavra
  echo ucwords($nome);
  echo "<br>";
  //primeira letra da primeira palavra
  echo ucfirst($nome);
  echo "<br>";
  /////////////////////////////////
  $empresa = "Acacia";
  $empresa = str_replace("a", "4", $empresa);
  echo $empresa;
?>