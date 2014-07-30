<?php

/**
 * src/TodoApp/Controller/HomeController.php
 *
 * A simple controller which handles the root route of the application.
 */

namespace TodoApp\Controller;

class HomeController extends ApplicationController
{

    /**
     * indexAction
     *
     * Render the home page of the app.
     */
    public function indexAction()
    {
        $this->render('home/index', array(

        ));
    }

}
