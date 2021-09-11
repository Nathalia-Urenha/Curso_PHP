<?php

$pessoa = array(
	"nome"=>"João",
	"idade"=>20
);

//ponteiro - valor da memoria
foreach ($pessoa as &$value) {

	if (gettype($value) === 'integer') $value += 10;

	echo $value."<br/>"; // . é concatenação

}

//vai ter trocado o valor na memoria da variável por conta do &(ponteiro)
print_r($pessoa);

?>