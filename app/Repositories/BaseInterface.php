<?php


namespace App\Repositories;

interface BaseInterface
{
    public function all();

    public function find($id, $columns = ['*']);

    public function create($input);

    public function update($input, $id);

    public function delete($id);
}
