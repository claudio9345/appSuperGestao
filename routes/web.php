<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route:verboHttp('URL','Função de callback ou string que chama o controlador')

/* Verbos http:

GET
POST
PUT
PATCH
DELETE 
OPTIONS

*/

Route::get('/', 'principalController@principal')->name('site.index');

Route::get('/sobreNos', 'sobreNosController@sobreNos')->name('site.sobreNos');

Route::get('/contato', 'contatoController@contato')->name('site.contato');
Route::post('/contato', 'contatoController@contato')->name('site.contato');

Route::get('/login', function(){return 'login';})->name('site.login');

//agrupando rotas

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){return 'clientes';})->name('app.clientes');

    Route::get('/fornecedores', 'fornecedorController@index')->name('app.fornecedores');
    
    Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});



//Rota de fallback

    Route::fallback(function(){
        echo 'A rota acessada não existe. <a href"'.route('site.index').'">Clique Aqui</a> parar ir para o inicio';
    });

/*
Route::get('/teste/{p1}/{p2}', 'testeController@teste')->name('teste');

 Rotas para Redirecionamento

Route::get('/rota1', function(){echo 'rota1';})->name('site.rota1');
// Primeira forma, ideal colocar no Controller
Route::get('/rota2', function(){return redirect()->route('site.rota1');})->name('site.rota2');
//Segunda Forma
//Route::redirect('/rota2','/rota1');
*/


/* Exemplo Parametro variavel
Route::get('/contato/{nome}/{categoriaId?}'
*/

/* Exemplo de rota com regex
Route::get('/contato/{nome}/{categoriaId}', 
    function(
        string $name = "Desconhecido", 
        int $categoriaId = 1
    ){
        echo "Estamos Aqui: $name - $categoriaId";
    }
)->where("categoriaId","[0-9]+")->where("nome","[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ]+");
*/

