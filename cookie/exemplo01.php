<?php

$data = array(
	"empresa"=>"Hcode Treinamentos"
);

//definir um cookie de 1h
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>