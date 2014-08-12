<?php

/**
 * src/TodoApp\Application.php
 *
 * This class extends \SlimControler\Slim so that if there is any functionality
 * that needs to be added to the application class it can be cleanly added.
 */

namespace TodoApp;

use Illuminate\Database\Capsule\Manager as Capsule;
use TodoApp\View\PhpTemplateView;

class Application extends \SlimController\Slim
{

    /**
     * run
     *
     * For example if there is additional code needed for initialization this
     * may be a reasonable place to put/call it.  Once initialization is
     * complete then call the parent class's run method.
     */
    public function run()
    {
        $this->initializeDb();
        $this->initializeView();
        if ($this->config('mode') != 'test') {
            parent::run();
        }
    }

    /**
     * initializeView
     *
     * initialize a custom view
     */
    protected function initializeView()
    {
        $view = new PhpTemplateView($this);
        $this->config('view', $view);
    }

    /**
     * initializeDb
     *
     * Connects to the database using the database config for the current
     * application mode.
     */
    protected function initializeDb()
    {
        $config  = $this->dbConfig();
        $capsule = new Capsule();
        $capsule->addConnection($this->dbConfig());
        $capsule->bootEloquent();
    }

    /**
     * dbConfig
     *
     * Returns the database configuration for the current application mode.
     */
    protected function dbConfig()
    {
        $dbConfig = $this->config('database');
        $config   = $dbConfig[$this->config('mode')];
        if ($config) {
            return $config;
        } else {
            return $config['development'];
        }
    }

}
