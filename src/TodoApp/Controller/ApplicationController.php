<?php

/**
 * src/TodoApp/Controller/ApplicationController.php
 *
 * Defines an abstract controller class that is extended by all of the
 * controllers in the application.
 *
 * This allows you to extend the SlimController class before extending it in
 * case there is any application specific logic you want to include in your app.
 */

namespace TodoApp\Controller;

use SlimController\SlimController;

abstract class ApplicationController extends SlimController
{

    /**
     * constructor
     *
     * Initialize the controller.
     */
    public function __construct($app)
    {
        parent::__construct($app);
    }

}
