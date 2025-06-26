<?php

namespace App\Http\Repositories;

use App\Http\Requests\UpdateDomainRequest;
use App\Models\Domain;

class DomainRepository implements DomainRepositoryInterface
{

    protected $model;

    public function __construct(Domain $domain){
        $this->model = $domain;
    }

    public function getAllDomains()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }

    public function createDomain(array $data){
        return $this->model->create($data);
    }

    public function getDomain($id)
    {
        return $this->model->find($id);
    }

    public function updateDomain($id, array $request)
    {
        $domain = $this->model->find($id);
        $domain->update($request);

        return $domain;
    }

/*

    public function updateDomain(Domain $domain){

    }

    public function deleteDomain(Domain $domain){

    }

    */
}
