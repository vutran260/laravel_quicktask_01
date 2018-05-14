<?php

namespace App\Repositories\Task;

use App\Models\Task;
use App\Repositories\BaseRepository;

class TaskRepository extends BaseRepository implements TaskInterface
{
    public function __construct(Task $task)
    {
        parent::__construct($task);
    }

    public function delete($id)
    {
        $task = parent::find($id);

        if ($task->user_id != auth()->id()) {
            throw new Exception('UnAuthorization');
        }

        return parent::delete($id);
    }
}
