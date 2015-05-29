<?php
require '../vendor/autoload.php';

$settings = require __DIR__.'/config.php';

$app = new \Slim\App($settings);

require __DIR__.'/dependencies.php';

require __DIR__.'/middleware.php';

require __DIR__.'/routes.php';

return $app;