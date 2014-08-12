<?php

/**
 * src/TodoAppTest/Controller/ListsControllerTest.php
 *
 * A unit test for the lists controller.
 */

namespace TodoAppTest\Controller;

use Mockery as M;
use TodoAppTest\AbstractTestCase;

class TodoListsControllerTest extends AbstractTestCase
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
        $homeController = M::mock('TodoApp\Controller\TodoListsController[render]', array(&$app))->shouldAllowMockingProtectedMethods();
        $homeController->shouldReceive('render')->once()->with('lists/index', M::any());
        $homeController->indexAction();
    }

}
