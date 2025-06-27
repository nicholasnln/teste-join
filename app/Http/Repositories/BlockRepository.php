<?php

namespace App\Http\Repositories;

use App\Models\Block;
use function Symfony\Component\Translation\t;

class BlockRepository implements BlockRepositoryInterface
{
    protected $model;

    public function __construct(Block $model)
    {
        return $this->model = $model;
    }

    public function store(array $data){
        return $this->model->create($data);
    }

    public function getAllBlocks(){
        return $this->model->with(['domain:id,name'])->get();
    }
}
