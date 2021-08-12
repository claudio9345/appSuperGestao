<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1', 
                'status' => 'N',
                'cnpj'=>'0',
                'ddd'=>'12',
                'telefone'=>'997241447'
            ],
            1 => [
                'nome' => 'fornecedor 2', 
                'status' => 'N', 
                'cnpj' => '00.000.000/000-00',
                'ddd'=>'35',
                'telefone'=>'999777884'
            ],
            2 => [
                'nome' => 'fornecedor 2', 
                'status' => 'N', 
                'cnpj' => '00.000.000/000-00',
                'ddd'=>'15',
                'telefone'=>'999777884'
            ]
        ];
        
        return view('app.fornecedor.index', compact('fornecedores'));
    }

}
