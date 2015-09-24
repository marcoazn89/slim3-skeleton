<?php
// DIC configuration

$container = $app->getContainer();

/**
 * MySQL
 * This mysql implementation is the one used in laravel. Check the links for documentation.
 * Laravel:
 *          website:  http://laravel.com/docs/5.1/database
 *          github:   https://github.com/illuminate/database
 */
$container['mysql'] = function() use ($container) {
  // Laravel's capsule to use DB stuff outside of laravel
  $capsule = new \Illuminate\Database\Capsule\Manager;

  // MySQL connection
  $capsule->addConnection($container['settings']['database']['mysql'], 'mysql');

  $capsule->bootEloquent();

  // Return the connection for mysql
  return $capsule->getConnection('mysql');
};

/**
 * MongoDB
 * This mongo implementation was made to work with laravel. Check the links for documentation.
 * Laravel-mongodb:
 *        github: https://github.com/jenssegers/laravel-mongodb
 */
$container['mongo'] = function() use ($container) {
  // Laravel's capsule to use DB stuff outside of laravel
  $capsule = new \Illuminate\Database\Capsule\Manager;

  // MongoDB connection
  $capsule->addConnection($container['settings']['database']['mongodb'], 'mongo');

  // Jenssegers/mongodb extension for laravel
  $capsule->getDatabaseManager()->extend('mongo', function($config) {
    return new \Jenssegers\Mongodb\Connection($config);
  });

  $capsule->bootEloquent();

  // Return the connection for mongo
  return $capsule->getConnection('mongo');
};

// Controllers
$container['sample'] = function() use ($app) {
  return new \MyApp\Controllers\SampleController($app);
};