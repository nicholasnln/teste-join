<?php

namespace App\Http\Repositories;

interface BlockRepositoryInterface
{
    public function store(array $data);

    public function getAllBlocks();
}
