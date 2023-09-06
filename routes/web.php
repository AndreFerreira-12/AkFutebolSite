<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\UsersController;

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

/*Route::get('/', function () {
    return view('index');
})->name('inicio');*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/adm-page', function () {
    return view ('adm-page'); 
})->name('adm-page');


/*Route::middleware('auth')->group(function()
{    //as rotas que estiverem aqui dentro acessarão usuarios logados

    Route::get('/gravar-usuario', [UsersController::class,'gravarUsuario'])->name('gravar-usuario');

});
//Rotas de cadastro e login
Route::post('/logar', [UsersController::class,'logar'])->name('logar');*/
Route::middleware('auth')->group(function() {

Route::post('/novo-usuario', [UsersController::class,'novoUsuario'])->name('novo-usuario');
Route::post('/logar', [UsersController::class,'logar'])->name('logar');
});

//rotas  Noticias
Route::get('/', [NoticiasController::class, 'index'])->name('inicio');

//Rotas de cadastro, envio e atualização
Route::get('/cadastro-noticia', [NoticiasController::class, 'abrirCadastro'])->name('cadastro-noticia');
Route::post('/enviar-noticia', [NoticiasController::class, 'cadastrarNoticia'])->name('enviar-noticia');
Route::post('/atualizar-noticia', [NoticiasController::class,'atualizarNoticia'])->name('atualizar-noticia');

//Rotas de consulta, edição e exclusão
Route::get('/consultar-noticia', [NoticiasController::class, 'consultarNoticia'])->name('consultar-noticia');
Route::get('/excluir-noticia/{id}',[NoticiasController::class,'excluirNoticia'])->name('excluir-noticia');
Route::get('/editar-noticia/{id}',[NoticiasController::class,'editarNoticia'])->name('editar-noticia');






