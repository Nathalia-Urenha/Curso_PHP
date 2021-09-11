<?php

//fica executando até terminar o processo
function test($callback){

	// Processo lento

	$callback();

}

test(function(){

	echo "Terminou!";

});

?>