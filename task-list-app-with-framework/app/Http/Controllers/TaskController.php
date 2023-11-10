<?php

namespace App\Http\Controllers;

use App\Contracts\Services\TaskServiceInterface;
use Illuminate\Routing\Controller as BaseController;

class TaskController extends BaseController
{
    private $taskService;

    /**
     * Constructor function
     *
     * @param TaskServiceInterface $taskService
     */
    public function __construct(TaskServiceInterface $taskService)
    {
        $this->taskService = $taskService;
    }

    /**
     * show index
     *
     * @return string
     */
    public function index(): string
    {
        $resultString = $this->taskService->sample();
        dd($resultString);

        return 'response string';
    }

}
