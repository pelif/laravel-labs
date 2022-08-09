<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UsersController extends Controller
{
    public function index() 
    {
        sleep(2); 
        return Inertia::render('Users/Index', [
            'users' => User::orderBy('name', 'asc')->get()
        ]); 
    }

    public function create() 
    {
        sleep(2); 
        return Inertia::render('Users/Create'); 
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255'
        ]); 

        $request->password = bcrypt($request->password); 

        $user = User::create($request->all());         
        return redirect()->route('users.index')->with('message', 'Usuário Cadastrado com sucesso!'); 
    }


}
