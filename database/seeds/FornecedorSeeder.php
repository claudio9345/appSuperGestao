<?php

use Illuminate\Database\Seeder;
use App\fornecedor;

class fornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new fornecedor();
        $fornecedor->nome = 'Elisa Sanches';
        $fornecedor->uf = 'RJ';
        $fornecedor->email = 'borboleta@sh.com.br';
        $fornecedor->save();

        fornecedor::create([
            'nome'=> 'Piper Perri',
            'uf'=>'USA',
            'email'=>'smallblonde@rking.com'
        ]);
    }
}
