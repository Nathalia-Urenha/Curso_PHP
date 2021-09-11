<?php

//INSERINDO DADOS NO BANCO

//conectando ao banco de dados feito no mysql workbanch
$conn = new mysqli("localhost", "root", "root", "dbphp7");

//se tiver erro
if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
	exit;

}

//variavel de conexao -statement
//fazendo comandos para enviar ao banco de dados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

//tipo dos parametros (?, ?) -> string (s, s)
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();

?>