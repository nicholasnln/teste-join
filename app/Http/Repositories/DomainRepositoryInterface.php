<?php

namespace App\Http\Repositories;

use App\Models\Domain;

interface DomainRepositoryInterface
{
    public function createDomain(array $data);

    public function updateDomain($id,array $request);

    public function deleteDomain($id);

    public function getDomain($id);

    public function getAllDomains();
}
