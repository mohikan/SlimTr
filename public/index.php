<?php
/*
* Slim Framework simple mvc structure
* Twig as template engine
* Redbeansphp as query builder
* Gump as validator
* Bootstrap for makeup
* Developer : unal@eftsoftware.com
*/

error_reporting(E_ALL);
define('ROOT', dirname(__DIR__));

require_once ROOT . '/vendor/autoload.php';
require_once ROOT . '/app/rb.php';
require_once ROOT . '/app/config.inc.php';

$app = new \Slim\Slim($settings);
/*
// test
$app->get('/', function() use($app) {
	$app->render('home.html', ['deneme' => 'menemen']);
});
*/

// single language
$app->map('/(:controller)(/:view)(/:slug)', function($controller = "home", $view = "index", $slug = "") use($app) {

	echo "single lang tester : <br>";
	echo "controller : $controller <br>";
	echo "view : $view <br>";
	echo "slug : $slug <br>";

	print_r($app->request->get());

})->via('GET','POST');

/*
// multi language
$app->map('/(:lang/)(:controller)(/:view)(/:slug)', function($lang = "", $controller = "home", $view = "index", $slug = "") use($app) {

	if($lang == ""){

		$app->redirect('/'.DEFAULT_LANG.'/');
	
	} else {
		echo "single lang tester : <br>";
		echo "lang : $lang <br>";
		echo "controller : $controller <br>";
		echo "view : $view <br>";
		echo "slug : $slug <br>";

		print_r($app->request->get());

	}

})->via('GET','POST');
*/
$app->run();
?>
