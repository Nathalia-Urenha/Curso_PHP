<?php

$link = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_light_color_272x92dp.png";

//função que pega o conteúdo de um arquivo
$content = file_get_contents($link);

//transformar oq vem da url em um arquivo real (conteudo da variavel)
$parse = parse_url($link);

//pegar só o path
$basename = basename($parse['path']);

//criar um arquivo 
$file = fopen($basename, "w+");

//escrever no arquivo
fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">