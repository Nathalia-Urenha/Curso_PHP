<?php

//SELECT COM PDO NO SQLSERVER

//conexao PDO
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin;");

//SÓ EXECUTA (DA O SELECT) QUANDO DA ESSE COMANDO 
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//exibir um JSON
echo json_encode($results);

?>