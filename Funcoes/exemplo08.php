<?php
//:String -> (tipo do retorno, vai converter para string)
function soma(float ...$valores):String {

	return array_sum($valores);

}

echo var_dump(soma(2, 2));

echo "<br/>";

echo soma(25, 33);

echo "<br/>";

echo soma(1.5, 3.2);

?>