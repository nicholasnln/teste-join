<?php

namespace App\Http\Services;

use App\Http\Repositories\DomainRepositoryInterface;
use App\Http\Requests\UpdateDomainRequest;

class DomainService
{
    protected $repository;

    public function __construct(DomainRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function getAllDomains()
    {
        return $this->repository->getAllDomains();
    }

    public function createDomain(array $data){
        return $this->repository->createDomain($data);
    }

    public function getDomain($id){
        return $this->repository->getDomain($id);
    }

    public function updateDomain($id, array $data)
    {
        return $this->repository->updateDomain($id, $data);
    }
}
