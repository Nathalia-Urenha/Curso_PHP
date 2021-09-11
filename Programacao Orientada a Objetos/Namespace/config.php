<?php

//falar pro projeto onde ele irá procurar as pastas (*autoload)
//ela recebe o nome da classe que está sendo chamada
spl_autoload_register(function($nameClass){

  //pasta q ele deve procurar os arquivos
	$dirClass = "class";

	//path
  //DIRECTORY_SEPARATOR -> \ ou / depende do sistema operacional (responsividade)
  $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

  //esse arquivo existe?
	if (file_exists($filename)) {

		//se existir esse arquivo nesse path, incluir ele no projeto
    require_once($filename);

	}

});

?>