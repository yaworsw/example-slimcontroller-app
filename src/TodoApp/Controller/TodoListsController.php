<?php

/**
 * src/TodoApp/Controller/ListsController.php
 *
 * A controller to handle crud operations on list objects.
 */

namespace TodoApp\Controller;

use TodoApp\Model\TodoList;
use TodoApp\Model\TodoItem;


class TodoListsController extends ApplicationController
{

    /**
     * indexAction
     *
     * Lists the todo lists.
     */
    public function indexAction()
    {
        $this->render('lists/index', array(
            'lists' => TodoList::all()
        ));
    }

    /**
     * showAction
     *
     * Display details for a specific todo list.
     */
    public function showAction($id)
    {
        $this->render('lists/show', array(
            'list' => TodoList::find($id),
            'items' => TodoItem::all()
        ));
    }

    /**
     * editAction
     *
     * Edit a todo list
     */
    public function editAction()
    {

    }

    /**
     * newAction
     *
     * Display an html form to the user to create a new todo list.
     */
    public function newAction()
    {

    }

    /**
     * createAction
     *
     * Create a new todo list.
     */
    public function createAction()
    {

    }

    /**
     * deleteAction
     *
     * Delete an existing todo list.
     */
    public function deleteAction()
    {

    }

}
