<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDomainRequest;
use App\Http\Requests\UpdateDomainRequest;
use App\Http\Services\DomainService;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    private $service;

    public function __construct(DomainService $service){
        $this->service = $service;
    }

    public function index(){
        return $this->service->getAllDomains();
    }

    public function store(StoreDomainRequest $request)
    {
        return response()->json($this->service->createDomain($request->validated()));
    }

    public function show($id){
        return $this->service->getDomain($id);
    }

    public function update($id, UpdateDomainRequest $request){
        return response()->json($this->service->updateDomain($id, $request->validated()));
    }

    public function destroy($id){
        return $this->service->deleteDomain($id);
    }
}
