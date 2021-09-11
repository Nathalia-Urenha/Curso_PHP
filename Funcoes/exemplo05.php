<?php

$a = 10;

//ponteiro (altera na memória)-> altera o valor definitivamente da variável
function trocaValor(&$b){

	$b += 50;

	return $b;

}

echo trocaValor($a);
echo "<br/>";
echo trocaValor($a);
echo "<br/>";
echo $a;

?>