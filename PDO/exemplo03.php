<?php

//INSERIR COM PDO no MYSQL

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

//SÓ EXECUTA (DA O INSERT) QUANDO DA ESSE COMANDO 
$stmt->execute();

echo "Inserido OK!";

?>