<?php

$meses = array(

    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"

);

//index e a variável que representa os valores que estão dentro do array ($mes)
foreach ($meses as $index => $mes) {

    echo "Indice: ".$index."<br>";
    echo "O mês é: ".$mes."<br><br>";

}

?>