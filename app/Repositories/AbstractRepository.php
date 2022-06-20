<?php

namespace App\Repositories;

abstract class AbstractRepository
{
    protected $model;

    public function findAll()
    {
        return $this->model->all();
    }

    public function findId($id)
    {
        return $this->model->find($id);
    }

    public function create($request)
    {
        $modelRequest = $request->all();
        $this->model->create($modelRequest);
        return 'Created Success!';
    }

    public function update($request, $id)
    {
        $modelData = $this->model->find($id);
        $modelRequest = $request->all();
        $modelData->update($modelRequest);
        return 'Updated Success!';
    }

    public function delete($id)
    {
        $modelData = $this->model->find($id);
        $modelData->delete($modelData);
        return 'Deleted Success!';
    }
}
