<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
//Rota para listar todos os usuarios
Route::get('/usuarios', [UsuarioController::class,'index'])->name('usuarios.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/usuarios/cadastro', [UsuarioController::class,'cadastro'])->name('usuarios.cadastro');

//Rota que direciona para o processamento do formulário
Route::post('/usuarios/novo', [UsuarioController::class,'novo'])->name('usuarios.novo');


//Rota para chamar tela de login
Route::get('/telalogin', [AppController::class, 
'telaLogin'])->name('tela.login'); 

//Rota para chamar a função de fazer login
Route::post('/login', [AppController::class, 'login'])->name('login');

//Rota para acessar a tela de alteração de usuario
Route::get('/usuario/alterar/{id}', [UsuarioController::class,'telaAlteracao'])->name('usuario.atualiza'); 

//Rota para alterar o cadastro do usuario
Route::post('/usuario/alterar/{id}', 
[UsuarioController::class,'alterar'])->name('usuario.alterar'); 

//Rota para excluir o usuario
Route::get('/usuario/excluir/{id}', 
[UsuarioController::class,'excluir'])->name('usuario.excluir'); 


//Criação dos treco de produto

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\produtos;
//Rota para listar todos os produto
Route::get('/produtos', [produtos::class,'index'])->name('produtos.index');

//rota que direciona para a página que tem o formulario de cadastro
Route::get('/produtos/cadastro', [produtos::class,'cadastro'])->name('produtos.cadastro');
 
//Rota que direciona para o processamento do formulário
Route::post('/produtos/novo', [produtos::class,'novo'])->name('produtos.novo');

//Rota para acessar a tela de alteração de produto
Route::get('/produtos/alterar/{id}', [produtos::class,'telaAlteracao'])->name('produtos.atualiza'); 

//Rota para alterar o cadastro do produto
Route::post('/produtos/alterar/{id}', 
[produtos::class,'alterar'])->name('produtos.alterar'); 

//Rota para excluir o produto
Route::get('/produtos/excluir/{id}', 
[produtos::class,'excluir'])->name('produtos.excluir'); 

