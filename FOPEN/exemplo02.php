<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//titulo das colunas
$headers = array();

//ucfirst  - primeira letra maiuscula
foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

//Arquivo CSV
//+w função de escrita
$file = fopen("usuarios.csv", "w+");

//dividir os itens
fwrite($file, implode(",", $headers) . "\r\n");

//MATRIZ
//LINHAS
foreach ($usuarios as $row) {
	
	$data = array();
  //COLUNAS
	foreach ($row as $key => $value) {
		
		array_push($data, $value);

	}// End Foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");

} // End Foreach de linha

//fechar arquivo
fclose($file);

?>