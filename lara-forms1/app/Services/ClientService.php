<?php 

namespace App\Services;

use App\Repositories\ClientRepository; 

class ClientService
{
    private $repository;    

    /**
     * Dependence Injection on Constructor
     * 
     * @param App\Repositories\ClientRepository
     */
    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository; 
    }


    /**
     * Store Method 
     * 
     * @param \App\Http\Requests\ClientStore $request
     */
    public function store(\App\Http\Requests\ClientStore $request)     
    {
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter');         
        $this->repository->create($data);
    }


    /**
     * Update data of Client
     * 
     * @param App\Http\Requests\ClientStore $request
     * @param App\Model\Client $client
     * @return void
     */
    public function update(
        \App\Http\Requests\ClientStore $request, 
        \App\Model\Client $client) 
    {
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter');         
        $this->repository->update($data, $client); 
    }
    

}