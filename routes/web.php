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

Route::get('/', function () {
    return view('welcome');
});

// retorna o token para realizar um post
Route::get('/token', function (Request $request) {
    return  csrf_token();
});

// busca a rota para salvar o cliente
Route::post('/cliente_salvar', 'ClienteController@salvar');

//busca a rota para listar os clientes.
Route::get('/cliente_listar', 'ClienteController@listar');

//busca a rota para listar o cliente por id
Route::get('/cliente_por_id/{id}', 'ClienteController@buscaClientePorId');

//busca a rota para deletar o cliente por id
Route::get('/cliente_delete/{id}', 'ClienteController@deletar');

