<?php

/**
 * src/TodoAppTest/Controller/HomeControllerTest.php
 *
 * A unit test for the home controller.
 */

namespace TodoAppTest\Controller;

use Mockery as M;
use TodoAppTest\AbstractTestCase;

class HomeControllerTest extends AbstractTestCase
{

    /**
     * indexActionRendersCorrectView
     *
     * Ensure that the correct view is being rendered by the index method.
     *
     * @test
     */
    public function indexActionRendersCorrectView()
    {
        $app = $this->app();
        $homeController = M::mock('TodoApp\Controller\HomeController[render]', array(&$app))->shouldAllowMockingProtectedMethods();
        $homeController->shouldReceive('render')->once()->with('home/index', M::any());
        $homeController->indexAction();
    }

}
