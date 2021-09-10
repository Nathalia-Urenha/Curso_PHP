<?php

session_id('jcf40uroqtngcmm6ja1r9es7tk');

require_once("config.php");

session_regenerate_id();

echo session_id();
echo"<br>";
var_dump($_SESSION);

?>