<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {

  //abrir o arquivo no modo leitura
	$file = fopen($filename, "r");

  //formatar o caeçalho das colunas (pega só a primeira linha do arquivo)
	$headers = explode(",", fgets($file));

	$data = array();

  //pegar as outras linhas do arquivo
	while ($row = fgets($file)) {
    
		$rowData = explode(",", $row);
		$linha = array();

    //transforma as linhas (separadas pela virgula) em um array
		for ($i=0; $i < count($headers); $i++) { 
			
			$linha[$headers[$i]] = $rowData[$i];

		}

		array_push($data, $linha);

	}

	fclose($file);

	echo json_encode($data);

}

?>