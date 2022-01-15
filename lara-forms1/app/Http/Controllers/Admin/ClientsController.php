<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = \App\Model\Client::all();        
        return view('admin.clients.index', ['clients' => $clients]);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.clients.create', ['client' => new \App\Model\Client()]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validate($request); 
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter'); 
        \App\Model\Client::create($data);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Model\Client $client)
    {        
        $this->_validate($request); 
        $data = $request->all();
        $data['defaulter'] = $request->has('defaulter'); 
        $client->fill($data); 
        $client->save();
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

    /**
     * Fields Form Validations 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function _validate(Request $request) {
        $maritalStatus = implode(array_keys(\App\Model\Client::MARITAL_STATUS)); 
        $this->validate($request, [
            'document_number' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date_birth' => 'required|date',
            'marital_status' => 'required|in:1,2,3',
            'sex' => 'required|in:m,M,f,F',
            'physical_desability' => 'max:255'
        ]);
    }
}
