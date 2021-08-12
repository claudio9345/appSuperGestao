<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{
    public function teste(int $p1,int $p2){
        //echo "A soma de $p1 + $p2 é: ",$p1+$p2;

        /*Array associativo, usar {{$variavel}} na view
            return view('site.teste', ['x'=>$p1, 'y'=>$p2]);
        */

        /*Compact -> Mais usado
            return view('site.teste', compact('p1','p2'));
        */

        //with, primeiro parametro variavel na view e segundo o passado na rota
        return view('site.teste')->with('p1',$p1)->with('p2',$p2);
    }
}
