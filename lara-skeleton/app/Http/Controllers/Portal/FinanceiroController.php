<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FinanceiroController extends Controller
{
    public function dashboard() {        
        return view('portal.financeiro.dashboard');
    }

    public function faturas() {
        return view('portal.financeiro.faturas');
    }

    public function creditos() {
        return view('portal.financeiro.creditos'); 
    }
}
