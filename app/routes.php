<?php
// Define named route
$app->get('/hello/{name}[/]', function ($request, $response, $args) {
    return $this->view->render('profile.html', [
        'name' => $args['name']
    ]);
})->setName('profile');

$app->get('/success/{name}[/]', 'sample:success');

$app->get('/fail[/]', 'sample:fail');

$app->get('/nonesense[/]', 'sample:whoops');