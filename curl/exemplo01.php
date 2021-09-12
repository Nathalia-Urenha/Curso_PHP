<?php

//consumindo a api da viacep


$cep = "15025055";
$link = "https://viacep.com.br/ws/$cep/json/";

//usando a biblioteca curl - chamada da api
//iniciar
$ch = curl_init($link);

//carregar
//comandos para que a biblioteca funcione - retorno e validação
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//executar
$response = curl_exec($ch);

//fechar
curl_close($ch);

//transformar em array
$data = json_decode($response, true);

print_r($data);

?>