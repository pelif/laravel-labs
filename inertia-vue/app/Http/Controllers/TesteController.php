<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TesteController extends Controller
{
    public function index()    
    {
        sleep(2); 
        return Inertia::render('Home', [
            'name' => 'Pelif Elnida'
        ]); 
    }
}
