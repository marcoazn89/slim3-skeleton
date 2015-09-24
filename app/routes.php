<?php
$app->get('/', function($request, $response, $app) {
  return $response->write('Welcome to my app');
});

$app->get('/success/{name}[/]', 'sample:success');

$app->get('/fail[/]', 'sample:fail');

$app->get('/nonesense[/]', 'sample:whoops');