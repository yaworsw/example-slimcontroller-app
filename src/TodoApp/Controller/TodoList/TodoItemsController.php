<?php

/**
 * src/TodoApp/Controller/TodoList/TodoItemsController.php
 *
 * A controller to handle crud operations on items objects.
 */

namespace TodoApp\Controller\TodoList;

use TodoApp\Controller\ApplicationController;
use TodoApp\Model\TodoList;
use TodoApp\Model\TodoItem;


class TodoItemsController extends ApplicationController
{

    /**
     * showAction
     *
     * Display json representation of the todo item.
     */
    public function showAction($listId, $itemId)
    {
        $format = $this->param('format');
        $item   = TodoItem::find($itemId);
        if ($format == 'json') {
            echo json_encode($item);
        } else {
            $this->render('404', array(), 404);
        }
    }

    /**
     * editAction
     *
     * Makes a change to a list item.
     */
    public function editAction($listId, $itemId)
    {
        $format = $this->param('format');
        $item   = TodoItem::find($itemId);
        $action = $this->param('action', 'post');
        if ($action == 'check') {
            $item->done = true;
            $item->save();
        } else if ($action == 'uncheck') {
            $item->done = false;
            $item->save();
        }
        if ($format == 'json') {
            echo json_encode($item);
        } else {
            $this->redirect($this->app->urlFor('TodoLists:show', array('id' => $listId)));
        }
    }

}
