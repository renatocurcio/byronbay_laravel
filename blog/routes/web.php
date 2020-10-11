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

Route::get('/tipos', function () {
    return view('infos.tipos');
});

Route::get('/dicas', function () {
    return view('infos.dicas');
});

Route::get('/historia', function () {
    return view('infos.historia');
});

Route::get('/quem_somos', function () {
    return view('infos.quem_somos');
});

Route::get('/fale_conosco', function () {
    return view('infos.fale_conosco');
});

Route::get('/home', 'openController@home');

Route::get('/produtos', 'openController@visualizarProdutos');

Route::get('/produto/{id}','openController@verProduto');

Route::get('/produtores', 'openController@visualizarProdutores');

Route::get('/produtor/{id}', 'openController@verProdutor');

Route::get('/carrinho', function () {
    return view('carrinho');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dados_cliente', function () {
    return view('dados_cliente');
});
Route::get('/editar_clientes', function () {
    return view('editar_clientes');
});

Route::get('/pedidos', function () {
    return view('pedidos');
});
Route::get('/produto', function () {
    return view('produto');
});
Route::get('/ped_ok', function () {
    return view('ped_ok');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/cadastro_cliente', function () {
    return view('cadastro_cliente');
});
Route::post('/cad_ok', function () {
    return view('cad_ok');
});

Route::get('/produtores/meus_produtos/{produtor}', 'produtoController@listarProdutos');

Route::get('/produtos/cadastro', 'produtoController@cadastrar');
Route::post('/produtos/cadastro', 'produtoController@cadastrar');

Route::get('/produtos/editar/{produto}','produtoController@editar');
Route::post('/produtos/editar/{produto}','produtoController@atualizar');

Route::get('/deletar/{produto}', 'produtoController@deletar');

Route::get('/produtores/cadastro', 'produtoresController@cadastrar');
Route::post('/produtores/cadastro', 'produtoresController@cadastrar');

Route::get('/produtores/dados', function(){
    return view('produtores.dados');
});

Route::get('/produtores/dados/{produtor}', 'produtoresController@visualizar');

Route::get('/produtores/editar/{produtor}','produtoresController@editar');
Route::post('/produtores/editar/{produtor}','produtoresController@atualizar');

Route::get('/produtores/produtos/cadastro/{produtor}', 'produtoController@cadastrar');
// Route::post('/produtores/produtos/cadastro/{produtor}', 'produtoController@cadastrar');
