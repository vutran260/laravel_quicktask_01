<?php

namespace App\Repositories\User;

interface UserInterface
{
    public function getTasksById($id);

    public function createTask($input);
}
