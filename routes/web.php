<?php

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

Route::get('foo', function () {
    return 'Hello World';
});

//'ProdutoController@index'
Route::name('produto.index')->get('/produtos', 'ProdutoController@index');

Route::name('produto.formulario')->get('/produto/formulario', 'ProdutoController@form');

Route::name('produto.editar')->get('/produto/{id}/editar', 'ProdutoController@editar');

Route::name('produto.salvar')->post('/produto/salvar', 'ProdutoController@salvar');

Route::name('produto.atualizar')->post('/produto/{id}/atualizar', 'ProdutoController@atualizar');

Route::name('produto.excluir')->get('/produto/{id}/excluir', 'ProdutoController@excluir');
