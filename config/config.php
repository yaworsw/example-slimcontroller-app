<?php

/**
 * config/config.php
 *
 * The array returned by this file is passed directly to the application
 * constructor.
 */

use Slim\Extras\Views;

return array(
    'view'                       => '\Slim\LayoutView',
    'layout'                     => 'layouts/application.phtml',
    'templates.path'             => APP_PATH . '/templates',
    'controller.class_prefix'    => '\\TodoApp\\Controller',
    'controller.class_suffix'    => 'Controller',
    'controller.method_suffix'   => 'Action',
    'controller.template_suffix' => 'phtml',
);
