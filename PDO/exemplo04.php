<?php

//UPDATE COM PDO NO MYSQL

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET desslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID");

$login = "joao";
$senha = "qwerty";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":SENHA", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();
echo "Alterado OK!";
echo "<br>";



?>