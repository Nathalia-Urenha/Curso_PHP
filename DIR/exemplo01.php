<?php

$name = "images";

//se esse diretorio nao existe
if (!is_dir($name)) {

  //criar o diretório
	mkdir($name);
	echo "Diretório $name criado com sucesso!";

} else {

  //remover o diretorio
	rmdir($name);
	echo "Já existe o diretório: $name foi removido";

}

?>