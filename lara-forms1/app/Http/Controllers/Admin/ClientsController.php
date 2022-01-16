<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientStore;
use App\Repositories\ClientRepository;
use App\Services\ClientService;

class ClientsController extends Controller
{    
    private $service; 
    private $repository; 

    public function __construct(ClientService $service, ClientRepository $client)
    {
        $this->service = $service;
        $this->repository = $client;            
    }

    public function list() 
    {        
        dump($this->repository->all());
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('admin.clients.index', ['clients' => $this->repository->all()]);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.clients.create', ['client' => $this->repository->model]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStore $request)
    {        
        $this->service->store($request); 
        return redirect()->route('clients.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Model\Client $client 
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Model\Client $client)
    {
        return view('admin.clients.show', compact('client')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Model\Client $client)
    {        
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Model\Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientStore $request, \App\Model\Client $client)
    {               
        $this->service->update($request, $client);
        return redirect()->route('clients.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Client $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Model\Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index'); 
    }
    
}
