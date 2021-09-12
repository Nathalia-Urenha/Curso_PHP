  
<?php

//tipo de resposta do arquivo
header("Content-Type: image/png");

//criando a tela, largura X altura
$image = imagecreate(256, 256);

//Primeira cor - cor de fundo
$black = imagecolorallocate($image, 255, 0, 0);

//segunda cor 
$red = imagecolorallocate($image, 0, 0, 0);

//escrever algo na tela
imagestring($image, 5, 60, 120, "Curso de php 7", $red);

//formato q tem q gerar (png)
imagepng($image);

//destruir a varivel por fim.
imagedestroy($image);

?>