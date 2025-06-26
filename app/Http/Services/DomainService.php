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
        try {
            $domain = $this->repository->createDomain($data);
            return $domain;
        } catch (\Exception $exception){
            throw new \Exception("Erro ao criar domínio: " . $exception->getMessage());
        }
    }

    public function getDomain($id){
        return $this->repository->getDomain($id);
    }

    public function updateDomain($id, array $data)
    {
        return $this->repository->updateDomain($id, $data);
    }

    public function deleteDomain($id)
    {
        return $this->repository->deleteDomain($id);
    }
}
