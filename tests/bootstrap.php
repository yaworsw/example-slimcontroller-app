<?php

/**
 * tests/bootstrap.php
 *
 * This file sets up the environment for phpunit to run in.  Specifically it
 * loads the globals.php file, composer autoloader and adds the unit test's name
 * space to the autoloader.
 */

require __DIR__ . '/../config/globals.php';

$loader = require __DIR__. '/../vendor/autoload.php';

$loader->add('TodoAppTest\\', __DIR__);
$loader->register();
