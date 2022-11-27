<?php

namespace App\Http\Controllers;

use App\Models\Organizador;
use Illuminate\Http\Request;

class OrganizadorController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        return Organizador::create($request->all());
    }

    public function show($id){
        return Organizador::find($id);
    }
}
