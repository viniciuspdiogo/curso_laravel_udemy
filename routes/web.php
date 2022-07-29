<?php

use App\Http\Controllers\{
    ContatoController,
    PrincipalController,
    SobreNosController,
};
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


Route::get('/',[PrincipalController::class,"principal"]);
Route::get('/sobre-nos',[SobreNosController::class,"sobreNos"]);
Route::get('/contato',[ContatoController::class,"contato"]);
ROute::get('/contato/{nome}/{assunto}/{mensagem}', function(string $nome,string $assunto, string $mensagem){
    echo "Estamos aqui: $nome - $assunto - $mensagem";
});