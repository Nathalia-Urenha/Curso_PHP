<?php

$file = fopen("teste.txt", "w+");

fclose($file);

//Excluir arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";

?>