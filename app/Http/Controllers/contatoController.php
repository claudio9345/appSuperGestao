<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function contato(Request $request){

       //$request->all(); Todo data
       //$request->input('nome'); Dado especifico
        return view('site.contato');
    }
}
