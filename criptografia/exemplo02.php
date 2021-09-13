<?php

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

$data = [
	"nome" => "Nathalia"
];

//novo comando de criptografia
//fazendo a criptografia
$openssl = openssl_encrypt(
	json_encode($data),
	'AES-128-CBC',
	SECRET,
	0,
	SECRET_IV
);

echo $openssl;

//desfazendo a criptografia
$string = openssl_decrypt($openssl, 'AES-128-CBC', SECRET, 0, SECRET_IV);

var_dump(json_decode($string, true));