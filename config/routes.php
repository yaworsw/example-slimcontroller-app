<?php

/**
 * config/routes.php
 *
 * The array returned by this file is passed directly to the addRoutes method
 * of the application.
 */

return array(
    '/'          =>                   'Home:index',
    '/lists'     => array('get'    => 'TodoLists:index',
                          'post'   => 'TodoLists:create'),
    '/lists/:id' => array('get'    => 'TodoLists:show',
                          'post'   => 'TodoLists:edit',
                          'delete' => 'TodoLists:delete'),
    '/lists/new' =>                   'TodoLists:new',

    '/lists/:listId/items/:id' => array('post' => 'TodoList\\TodoItems:edit')
);
