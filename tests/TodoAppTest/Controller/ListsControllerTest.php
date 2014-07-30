<?php

/**
 * src/TodoAppTest/Controller/ListsControllerTest.php
 *
 * A unit test for the lists controller.
 */

namespace TodoAppTest\Controller;

use Mockery as M;
use TodoApp\Application;
use TodoApp\Controller\IndexController;
use TodoAppTest\AbstractTestCase;

class ListsControllerTest extends AbstractTestCase
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
        $app = new Application(array());
        $homeController = M::mock('TodoApp\Controller\ListsController[render]', array(&$app))->shouldAllowMockingProtectedMethods();
        $homeController->shouldReceive('render')->once()->with('lists/index', M::any());
        $homeController->indexAction();
    }

}
