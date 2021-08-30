<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Dillion Harper';
        $contato->email = 'oculos@sh.com';
        $contato->telefone = '12999777788';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Goza no meu oculos';
        $contato->save();
        */

        factory(SiteContato::class,100)->create();
    }
}
