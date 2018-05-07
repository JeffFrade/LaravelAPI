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
    
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function updateCustom(array $data, $id, $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    public function update(array $data, $id)
    {
        $instance = $this->model->find($id);
        $instance->fill($data);
        return $instance->save();
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
