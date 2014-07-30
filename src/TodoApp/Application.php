<?php

/**
 * src/TodoApp\Application.php
 *
 * This class extends \SlimControler\Slim so that if there is any functionality
 * that needs to be added to the application class it can be cleanly added.
 */

namespace TodoApp;

class Application extends \SlimController\Slim
{

    /**
     * run
     *
     * For example if there is additional code needed for initialization this may
     * be a reasonable place to put/call it.  Once initialization is complete then
     * call the parent class's run method.
     */
    public function run()
    {
        parent::run();
    }

}
