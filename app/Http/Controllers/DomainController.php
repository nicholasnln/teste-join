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
        try{
            return response()->json($this->service->createDomain($request->validated()));
        } catch (\Exception $e){
            return response()->json([
                'error' => 'Erro ao cadastrar domínio',
                'message' => $e->getMessage()], $e->getCode());
        }
    }

    public function show($id){
        $domain = $this->service->getDomain($id);
        return response()->json($domain);
    }

    public function update($id, UpdateDomainRequest $request){
        return response()->json($this->service->updateDomain($id, $request->validated()));
    }

    public function destroy($id){
        return $this->service->deleteDomain($id);
    }
}
