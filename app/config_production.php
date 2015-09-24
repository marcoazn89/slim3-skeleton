<?php
return [
  'controllers' => [
    'path' => __DIR__.'/Controllers/',
  ],

  'models' => [
    'path' => __DIR__.'/Models/',
  ],

  'views' => [
    'path' => __DIR__.'/Views/'
  ],

  'lib' => [
    'path' => __DIR__.'/lib/'
  ],

  'twig' => [
    'cache' =>  __DIR__.'/Views/cache/'
  ],

  'upload'  =>  [
    'file'  =>  [
      'path'  =>  __DIR__.'/uploads/'
    ]
  ],

  'download'  =>  [
    'file'  =>  [
      'path'  =>  __DIR__.'/tmp/'
    ]
  ],

  'errorTemplates'  =>  [
    'default' =>  [
      'html'  =>  __DIR__.'/Views/errors/default/html.php',
      'json'  =>  __DIR__.'/Views/errors/default/json.php'
    ]
  ],

  'database'  =>  [
    'mysql' =>  [
      'driver'    => 'mysql',
      'host'      => '',
      'database'  => '',
      'username'  => '',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => ''
    ],

    'mongodb' =>  [
      'driver'   => 'mongodb',
      'host'     => '',
      'port'     => '',
      'username' => '',
      'password' => '',
      'database' => '',
      'options' => [
          'db' => 'admin' // sets the authentication database required by mongo 3
      ]
    ],
  ]
];