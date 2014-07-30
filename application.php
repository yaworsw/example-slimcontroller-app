<?php

/**
 * application.php
 *
 * This file initializes and runs the application.
 */

// load configs

require __DIR__ . '/config/globals.php';

require APP_PATH . '/vendor/autoload.php';

$config = require APP_PATH . '/config/config.php';
$routes = require APP_PATH . '/config/routes.php';

// initialize application

$application = new \TodoApp\Application($config);
$application->addRoutes($routes);

// run application

$application->run();
