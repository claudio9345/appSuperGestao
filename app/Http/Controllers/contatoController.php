<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class contatoController extends Controller
{
    public function contato(Request $request){

       //$request->all(); Todo data
       //$request->input('nome'); Dado especifico

       $contato = new SiteContato();
       $contato->nome = $request->input('nome');
       $contato->telefone = $request->input('telefone');
       $contato->email = $request->input('email');
       $contato->motivo_contato = $request->input('motivo_contato');
       $contato->mensagem = $request->input('mensagem');
       print_r($contato->getAttributes());
       $contato->save();
        return view('site.contato');
    }
}
