<?php

/**
 * src/TodoApp/Controller/TodoList/TodoItemsController.php
 *
 * A controller to handle crud operations on list objects.
 */

namespace TodoApp\Controller\TodoList;

use TodoApp\Controller\ApplicationController;
use TodoApp\Model\TodoList;
use TodoApp\Model\TodoItem;


class TodoItemsController extends ApplicationController
{

    /**
     * editAction
     *
     * Makes a change to a list item.
     */
    public function editAction($listId, $itemId)
    {
        $item   = TodoItem::find($itemId);
        $action = $this->param('action', 'post');
        if ($action == 'check') {
            $item->done = true;
            $item->save();
        } else if ($action == 'uncheck') {
            $item->done = false;
            $item->save();
        }
        $this->redirect($this->app->urlFor('TodoLists:show', array('id' => $listId)));
    }

}
