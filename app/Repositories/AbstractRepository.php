<?php

namespace App\Repositories;

abstract class AbstractRepository
{
    protected $model;

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function find($field, $value)
    {
        return $this->model->where($field, $value)->first();
    }

    public function allBy($field, $value, $columns = array('*'))
    {
        return $this->model->where($field, $value)->get($columns);
    }

    public function count($field, $value)
    {
        return $this->model->where($field, $value)->count();
    }
}