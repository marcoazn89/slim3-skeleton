<?php
// Middlewares
// e.g: $app->add($middlewareCallable);

if(ENVIRONMENT === PROD) {
  // Use booboo's error handler to display production errors
  $app->add(new \SlimBooboo\Middleware($app, $settings['errorTemplates']['default']));
}
else {
  // Use Whoops error handler to display development errors
  $app->add(new \SlimBoobooWhoops\Middleware($app, $settings['errorTemplates']['default']));
}