<?php

//LISTANDO DADOS DO BANCO DE DADOS

//mysqli é uma classe especial
$conn = new mysqli("localhost", "root", "root", "dbphp7");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
	exit;

}

//Fazendo um SELECT
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//retorna um dado se o dado existir
while ($row = $result->fetch_assoc()) {

	//adiciona um novo item no array
  array_push($data, $row);

}

//gerando JSON com o banco de dados
echo json_encode($data);

?>