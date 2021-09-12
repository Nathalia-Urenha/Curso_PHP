<?php

$filename = "PHP-7.png";

//converter binário em texto
$base64 = base64_encode(file_get_contents($filename));

//tipo do arquivo (png, jpg, etc.)
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode = "data:" . $mimetype . ";base64," . $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>

<img src="<?=$base64encode?>">