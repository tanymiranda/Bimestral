<?php

namespace App\Http\Controllers;

use App\Models\Register; 
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $usuarios = Register::list(); 
    
        return view('register.index', compact('usuarios')); 
    }
    

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
       
        return redirect()->route('usuarios.index')->with('success', 'Usuário cadastrado!');
    }
}