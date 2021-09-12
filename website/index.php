<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

//home page
$app->get('/', function(){

	echo json_encode(array(
		'date'=>date("Y-m-d H:i:s")
	));

});

//path da página hello $name
$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>