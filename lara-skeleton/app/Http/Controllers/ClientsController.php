<?php

namespace App\Http\Controllers;

use App\Model\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function listAll() {
        $clients = Client::all();
        return view('portal.client.list', compact('clients'));
    }

    public function formRegister() {
        return view('portal.client.create'); 
    }

    public function create(Request $request) {
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();

        return redirect()->to('/portal/client');

    }

    public function formEdit($id) {
        $client = Client::find($id);        
        if(!$client) {
            abort(404); 
        }
        return view('portal.client.edit', compact('client')); 
    }

    public function update(Request $request, $id) {
        $client = Client::find($id);
        if(!$client) {
            abort(404); 
        }
        $client->name = $request->get('name'); 
        $client->email = $request->get('email');
        $client->save(); 

        return redirect()->to('/portal/client');
    }

    public function delete($id) {
        $client = Client::find($id); 
        if(!$client) {
            abort(404); 
        }
        $client->delete();
        return redirect()->to('/portal/client');
    }

    public function cadastrar() {
        $produto = 'MOTO E5'; 
        $id = 112233;
        return view('cadastrar')
                ->with('produto', $produto)
                ->with('id', $id); 
    }

    public function forif($value) {
        return view('forif')
            ->with('value', $value)
            ->with('myArray', [
                'valor1', 
                'valor2',
                'valor3',
                'valor4'
            ]); 
    }

    public function blade() {
        $produto = 'MOTO E5'; 
        $id = 112233;

        return view('test')
                ->with('produto', $produto)
                ->with('id', $id)
                ->with('test', 'Tenho Valor'); 
    } 


}
