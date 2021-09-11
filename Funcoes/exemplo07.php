<?php

//funções novas do PHP7
// ... pega todos os parametros que sao enviados (tem q por o tipo)
function soma(int ...$valores) {

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br/>";
var_dump(soma(2,2));
echo "<br/>";
echo soma(25, 33);
echo "<br/>";
echo soma(1.5, 3.2);
echo "<br/>";

?>