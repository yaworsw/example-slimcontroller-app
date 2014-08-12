<?php

namespace TodoApp\View;

use Slim\View;

class PhpTemplateView extends View
{

    public function __construct($app)
    {
        $this->app = $app;
        parent::__construct();
    }

    public function setLayout($layout)
    {

    }

}
