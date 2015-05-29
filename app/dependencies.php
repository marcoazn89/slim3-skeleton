<?php
// DIC configuration

$container = $app->getContainer();

// Twig
$container->register(new \Slim\Views\Twig(
	$app->settings['views']['path'],
	$app->settings['twig']
));