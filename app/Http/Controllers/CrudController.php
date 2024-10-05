<?php

namespace App\Http\Controllers;

use App\Models\Task; 
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $financeiros = Task::list(); 
    
        return view('financeiro.index', compact('financeiros')); 
    
    }
    public function create()
    {
        return view('financeiro.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('financeiro.index')->with('success', 'Registrado com sucesso!');
    }
}
