<?php 

namespace App\Repositories;

use App\Model\Client;

class ClientRepository 
{
    public $model;

    public function __construct(Client $model)
    {
        $this->model = $model;
    }

    public function all() 
    {
        return $this->model->all(); 
    }

    public function create($data) 
    {
        return $this->model->create($data); 
    }

    public function update($data, $client) {        
        $client->fill($data);
        $client->save(); 
    }
}