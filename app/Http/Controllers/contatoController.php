<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;

class contatoController extends Controller
{
    public function contato(Request $request){
        $motivo_contatos = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];
        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contato' => $motivo_contatos]);
    }

    public function salvar(Request $request){

        $request->validate([
            'nome' => 'required|min:2|max:50',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);
        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');
        $contato->save();


        
         return view('site.contato');
     }
}
