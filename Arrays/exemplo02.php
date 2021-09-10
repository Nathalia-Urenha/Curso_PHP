<?php

$carros[0][0] = "GM"; //Marca - todos os carros que começam com 0 são da GM
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford"; //Marca - todos os carros que começam com 1 são da ford
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];

echo end($carros[0]); // QUAL A ULTIMA INFORMAÇÃO DA GM
echo end($carros[1]); // QUAL A ULTIMA INFORMAÇÃO DA FORD

?>