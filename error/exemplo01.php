<?php
//criando um erro
function error_handler($code, $message, $file, $line){

	echo json_encode(array(
		"code"=>$code,
		"message"=>$message,
		"line"=>$line,
		"file"=>$file
	));

}

//se der esse erro, é tal função que vai tratar
set_error_handler("error_handler");

echo 100 / 0;

?>