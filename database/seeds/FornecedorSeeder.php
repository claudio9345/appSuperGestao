<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
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
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'borboleta@gmail.com';
        $fornecedor->save();

        fornecedor::create([
            'nome' => 'Piper Perri',
            'email' => 'loirinhaPequena@gmail.com',
            'uf' => 'RJ'
        ]);

    }
}