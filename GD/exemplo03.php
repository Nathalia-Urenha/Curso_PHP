<?php
// Exemplo de como gerar imagem a partir de um modelo base
$img = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($img, 0, 0, 0);

$gray = imagecolorallocate($img, 120, 120, 120);

$font1 = __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf";
$font2 = __DIR__ . DIRECTORY_SEPARATOR . "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf";

// Quando for usar uma fonte própria segue a função e parametros necessário - Neste exemplo válido para fontes truetype (ttf)
//imagettftext(image, size, angle, x, y, color, fontfile, text)
imagettftext($img, 32, 0, 320, 250, $titleColor, $font1, "CERTIFICADO");

imagettftext($img, 32, 0, 375, 350, $titleColor, $font2, "Nathália Urenha");

//imagestring($img, 10, 0, 400, 380, $gray, $font2, utf8_decode("Concluído em: ").date("d/m/Y"),$titleColor);
imagestring($img, 3, 440, 370, utf8_decode("Concluido em : ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

// Aqui se adicionar parametros além da variável, a imagem não será exibida na tela
// Ela será salva no local selecionado e o último para define a qualidade da imagem
// Para "printar" a imagem na tela basta usar só o primeiro parametro que no caso é a imagem a ser exibida

$path_parts = pathinfo($font2);

//echo $path_parts['dirname']. "<br>";
//echo $path_parts['basename']. "<br>";
//echo $path_parts['extension']. "<br>";
//echo $path_parts['filename']. "<br>";

imagejpeg($img);

imagedestroy($img);

?>