<?php

namespace App\Model;

use App\Repository\AbstractRepository;

abstract class AbstractModel
{
    protected $repository;

    public function __construct(AbstractRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->findAll();
    }

    public function getById($id)
    {
        return $this->repository->findById($id);
    }

    public function create($data)
    {
        return $this->repository->insert($data);
    }

    public function update($id, $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}