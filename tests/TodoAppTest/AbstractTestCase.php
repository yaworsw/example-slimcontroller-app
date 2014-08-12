<?php

/**
 * tests/TodoAppTest/AbstractTestCase.php
 *
 * All unit tests will inherit from this class.  Place any methods used by
 * all/many unit tests here.
 */

namespace TodoAppTest;

use \PHPUnit_Framework_TestCase;
use TodoApp\Application;

abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
{

    /**
     * app
     *
     * Returns a freshly initialized and bootstraped application for testing
     */
    protected function app()
    {
        $config = require APP_PATH . '/config/config.php';
        $routes = require APP_PATH . '/config/routes.php';

        $config['mode'] = 'test';

        $application = new Application($config);
        $application->addRoutes($routes);

        $application->run();

        return $application;
    }

}
