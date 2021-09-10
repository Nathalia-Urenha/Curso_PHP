<?php

//include "inc/exemplo-1.php";
require_once "inc/exemplo01.php"; //traga somente uma vez

$resultado = somar(10, 25);

echo $resultado;

/*diferenças entre include e require:
  Require - exige que o arquivo exista, e que ele esteja funcionando corretamente
  Include - tenta funcionar mesmo se não existir. Ele também tem um include path que pode ser configurado
  */

?>

