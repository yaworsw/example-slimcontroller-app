<?php

/**
 * src/TodoApp/Model/TodoList.php
 *
 * A list of things to do.
 */

namespace TodoApp\Model;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany('TodoApp\Model\TodoItem');
    }

}
