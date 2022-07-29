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
ROute::get('/contato/{nome}/{categoria_id}', 
    function(
        string $nome,
        int $categoria_id = 1,
    ){
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id','[0-9]+')->where('nome','[a-zA-Z]+');