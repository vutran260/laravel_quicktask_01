<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Task\TaskInterface;

class TaskController extends Controller
{
    protected $taskRepository;

    public function __construct(
        TaskInterface $taskRepository
    ) {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $tasks = $this->taskRepository->paginate();

        return view('admin.pages.tasks.list', compact('tasks'));
    }
}
