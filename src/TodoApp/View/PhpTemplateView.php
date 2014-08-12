<?php

/**
 * src/TodoApp/View/PhpTemplateView.php
 *
 * A view class which supports layouts.
 */

namespace TodoApp\View;

use Slim\View;

class PhpTemplateView extends View
{

    /**
     * layout
     *
     * The layout that will be rendered.
     */
    private $layout = 'layouts/application';

    /**
     * constructor
     *
     * Initialize the view.
     */
    public function __construct($app)
    {
        $this->app = $app;
        parent::__construct();
    }

    /**
     * setLayout
     *
     * Sets the layout.
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    /**
     * render
     *
     * Wrapper around Slim\View's render which renders a layout too.
     */
    public function render($template, $data = null)
    {
        $yield = parent::render($template, $data);
        $data['yield'] = $yield;
        return parent::render($this->layoutName(), $data);
    }

    /**
     * layoutName
     *
     * Helper method which returns what needs to be passed to Slim\View's render
     * for the layout to render.
     */
    public function layoutName()
    {
        return$this->layout . '.' . $this->app->config('controller.template_suffix');
    }

}
