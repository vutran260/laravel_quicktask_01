<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseInterface
{
    
    protected $model;

    public function __construct($model)
    {
        $this->model = $model->newQuery();
    }

    public function newQuery($model)
    {
        $this->model = $model->newQuery();
    }

    public function all()
    {
        return $this->model->orderBy('created_at', 'asc')->get();
    }

    public function find($id, $columns = ['*'])
    {
        return $this->model->findOrFail($id, $columns);
    }

    public function create($input)
    {
        return $this->model->create($input);
    }
    
    public function update($input, $id)
    {
        return $this->model->where('id', $id)->update($input);
    }

    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}
