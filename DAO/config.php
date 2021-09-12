<?php 

//autoload - carregar uma classe de um outro arquivo
spl_autoload_register(function($class_name){

  //path
	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if (file_exists(($filename))) {
		require_once($filename);
	}

});

 ?>