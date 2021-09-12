<?php

//informações do banco
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

//listando
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

$stmt->execute();

//fatiar as linhas
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//navegar entre eles
foreach($results as $row) {

	//key -> coluna
  foreach ($row as $key => $value) {
		
		echo "<strong>".$key.":</strong>".$value."<br/>";

	}

	echo "====================================================<br/>";

}

?>