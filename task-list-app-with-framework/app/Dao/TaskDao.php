<?php

namespace App\Dao;

use App\Contracts\Dao\TaskDaoInterface;
use App\Models\Task;

class TaskDao implements TaskDaoInterface
{
    /**
     * sample function 
     *
     * @return string
     */
    public function sample(): string
    {
        return 'response from task dao';
    }
}
