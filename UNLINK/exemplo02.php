<?php

if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {	
	//remover os . e .. que ele tras automatico
  if(!in_array($item, array(".", ".."))) {

		//apaga os arquivos do diretorio inteiro
    unlink("images/".$item);

	}
}

echo "OK";

?>