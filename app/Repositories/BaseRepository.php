<?php


namespace App\Repositories;


use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->latest()->get();
    }
    public function findById(int $id)
    {
        return $this->model->findOrFail($id);
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update(int $id, array $data)
    {
        $record = $this->findById($id);
        $record->update($data);
        return $record;
    }
    public function delete(int $id)
    {
        $record = $this->findById($id);
        return $record->delete();
    }

}
