<?php

//abrir o arquivo
//w+ criar arquivo e escrever
$file = fopen("log.txt", "a+");

//escrever dentro desse arquivo 
fwrite($file, date("Y-m-d H:i:s") . "\r\n");

//fechar o manipulador
fclose($file);

echo "Arquivo criado com sucesso!";

?>