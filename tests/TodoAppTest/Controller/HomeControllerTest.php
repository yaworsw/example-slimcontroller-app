<?php

/**
 * src/TodoAppTest/Controller/HomeControllerTest.php
 *
 * A unit test for the home controller.
 */

namespace TodoAppTest\Controller;

use Mockery as M;
use TodoApp\Application;
use TodoApp\Controller\HomeController;
use TodoAppTest\AbstractTestCase;

class HomeControllerTest extends AbstractTestCase
{

    /**
     * testIndexActionRendersCorrectView
     *
     * Ensure that the correct view is being rendered by the index method.
     *
     * @test
     */
    public function indexActionRendersCorrectView()
    {
        $app = new Application(array());
        $homeController = M::mock('TodoApp\Controller\HomeController[render]', array(&$app))->shouldAllowMockingProtectedMethods();
        $homeController->shouldReceive('render')->once()->with('home/index', M::any());
        $homeController->indexAction();
    }

}
