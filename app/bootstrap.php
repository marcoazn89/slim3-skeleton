<?php
/**
 * Bootstrap
 *
 * Assemble the app here.
 */
require 'environment.php';

require __DIR__ . '/../vendor/autoload.php';

$settings = require __DIR__ .'/config_'. ENVIRONMENT .'.php';

$app = new \Slim\App($settings);

require __DIR__.'/dependencies.php';

require __DIR__.'/middlewares.php';

require __DIR__.'/routes.php';

return $app;