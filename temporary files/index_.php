<?php

require 'AltoRouter.php';

$router = new AltoRouter();
$router->setBasePath('/myproject/routineapi-framework');
$method = 'GET';
$action = '/users/[:id]?';
$target = 'testing';
$name = 'home';
$router->map($method,$action,$target,$name);
$match = $router->match();
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
function testing($id){
echo 'sdfsd'.$id;	
}
?>