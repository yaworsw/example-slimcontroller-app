<?php

/**
 * config/routes.php
 *
 * The array returned by this file is passed directly to the addRoutes method
 * of the application.
 */

return array(
    '/'          =>                   'Home:index',
    '/lists'     => array('get'    => 'Lists:index',
                          'post'   => 'Lists:create'),
    '/lists/:id' => array('get'    => 'Lists:show',
                          'post'   => 'Lists:edit',
                          'delete' => 'Lists:delete'),
    '/lists/new' =>                   'Lists:new'
);
