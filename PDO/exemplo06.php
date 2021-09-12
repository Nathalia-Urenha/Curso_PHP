<?php

//TRANSAÇÕES

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

//Iniciando uma transação
$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

//a primeira interrogação q ele encontrar na query, será o primeiro index do array, e assim sucessivamente
$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Delete OK!";

?>