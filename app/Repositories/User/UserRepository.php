<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getTasksById($id)
    {
        return $this->model->find($id)->tasks;
    }

    public function createTask($input)
    {
        return $this->model->find(auth()->id())->tasks()->create($input);
    }
}
