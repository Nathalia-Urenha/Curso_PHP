<?php

//atribuição
$nome = "Nathália Maria";

//concatenação
echo $nome . " Urenha<br>";

$nome .=  " Machado";

echo $nome;
echo "<br>";

////////////////
$valorTotal = 0;
$valorTotal += 100;
$valorTotal +=25;
$valorTotal -= 10;
$valorTotal *= .9;
echo $valorTotal;
echo "<br>";


////////////////
$a = 10;
$b = 2;
echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;
echo "<br>";

/////////////////
$c = 55.0;
$b = 55;

var_dump($c > $b);
echo "<br>";
var_dump($c < $b);
echo "<br>";
var_dump($c == $b);
echo "<br>";
var_dump($c === $b);
echo "<br>";
var_dump($c != $b);
echo "<br>";
var_dump($c !== $b);
echo "<br>";

///////////////////
$a = 50;
$b = 35;
var_dump($a <=> $b); //1 - maior ; 0 - igual; -1 - menor
echo "<br>";

///////////////////
$a = NULL;
$b = 9;
$c = 10;

echo $a ?? $b ?? $c;

?>