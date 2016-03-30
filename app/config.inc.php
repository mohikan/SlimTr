<?php
// App Settings
define('SLIM_MODE_DEV', 'development');
define('SLIM_MODE_PRO', 'production');
define('SLIM_MODE', SLIM_MODE_DEV);
define('SECRET_CODE', '90FF863E8A805D5C7F560EF2667D648E');
define('DEFAULT_LANG', 'en');

date_default_timezone_set('Europe/Istanbul');

// Slim Settings
$settings = [
    'mode' => SLIM_MODE,
    'cookies.secret_key' => SECRET_CODE,
    'view' => new \Slim\Extras\Views\Twig(),
    'templates.path' => ROOT . '/views/',
    'debug' => SLIM_MODE === SLIM_MODE_DEV,
    'log.enabled' => true,
    'log.writer' => new \Slim\Extras\Log\DateTimeFileWriter(['path' => ROOT . '/logs'])
	];

// Database Settings
R::setup('mysql:host=localhost;dbname=slimtr', 'root', '123');
R::freeze(true);