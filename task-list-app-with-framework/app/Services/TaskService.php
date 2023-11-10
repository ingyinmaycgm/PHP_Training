<?php

namespace App\Services;
use App\Contracts\Dao\TaskDaoInterface;
use App\Contracts\Services\TaskServiceInterface;

class TaskService implements TaskServiceInterface
{
    private $taskDao;

    /**
     * Constructor function
     *
     * @param TaskDaoInterface $formDao
     */
    public function __construct(TaskDaoInterface $taskDao)
    {
        $this->taskDao = $taskDao;
    }

    /**
     * sample function
     *
     * @return string
     */
    public function sample(): string
    {
        $result = $this->taskDao->sample();
        return $result;
    }

}
