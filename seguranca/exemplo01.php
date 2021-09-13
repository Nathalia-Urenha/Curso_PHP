<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	//TODA VEZ Q EXECUTAR O SYSTEM NUNCA RECEBER DADOS DINAMICOS PQ É UMA VULNERABILIDADE NO SITE
	$cmd = escapeshellcmd($_POST['cmd']);

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

?>

<form method="post">
	
	<input type="text" name="cmd">
	<button type="submit">Enviar</button>

</form>