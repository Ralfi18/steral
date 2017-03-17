<?php 
if ( isset($_GET['url']) )
{
	$url = $_GET['url'];
}
else 
{
	$url = '';
}

define("ROOT", $url);
define("DS", DIRECTORY_SEPARATOR);
define("BASE_URL", $_SERVER['SERVER_NAME']);

include_once "./init" . DS . 'init.php';
$app = new App( ROOT );
$route = new Route( ROOT );
$controller = new Controller($route->getUri());

echo $route->getMethod();
print_r($route->getParams()) ;