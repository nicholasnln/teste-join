<?php

namespace App\Http\Services;

use App\Http\Repositories\BlockRepository;
use App\Http\Repositories\BlockRepositoryInterface;

class BlockService
{
    protected $repository;

    public function __construct(BlockRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function createBlock(array $data){
        return $this->repository->store($data);
    }

    public function getAllBlocks(){
        return $this->repository->getAllBlocks();
    }
}
