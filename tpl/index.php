<?php

require_once("vendor/autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );

$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Nathalia" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
// draw the template
$tpl->draw( "index" );

?>