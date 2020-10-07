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

Route::get('/home', function () {
    return view('home');
});

Route::get('/tipos', function () {
    return view('infos/tipos');
});

Route::get('/dicas', function () {
    return view('infos/dicas');
});

Route::get('/historia', function () {
    return view('infos/historia');
});

Route::get('/quem_somos', function () {
    return view('infos/quem_somos');
});

Route::get('/fale_conosco', function () {
    return view('infos/fale_conosco');
});

Route::get('/produtos', function () {
    return view('produtos');
});
Route::get('/produtores', function () {
    return view('produtores');
});

Route::get('/produtor', function () {
    return view('produtor');
});

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
Route::get('/meus_pedidos', function () {
    return view('meus_pedidos');
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
Route::get('/cad_ok', function () {
    return view('cad_ok');
});

Route::get('/cadastro_produtores', function () {
    return view('cadastro_produtores');
});
Route::get('/meus_produtos', function () {
    return view('meus_produtos');
});
Route::get('/cadastro_produtos', 'produtoController@cadastrarProduto');
Route::post('/cadastro_produtos', 'produtoController@cadastrarProduto');
