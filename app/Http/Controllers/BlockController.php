<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlockRequest;
use App\Http\Services\BlockService;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    protected $service;

    public function __construct(BlockService $service){
        return $this->service = $service;
    }

    public function store(StoreBlockRequest $request){
        return response()->json($this->service->createBlock($request->validated()));
    }

    public function index(Request $request){
        return $this->service->getAllBlocks();
    }
}
