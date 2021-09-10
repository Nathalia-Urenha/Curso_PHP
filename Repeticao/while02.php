<?php

$total = 150;
$desconto = 0.9;

do {

    $total *= $desconto;

} while ($total > 100); //enquanto o valor for maior que 100;

echo $total;

?>
