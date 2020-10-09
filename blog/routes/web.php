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

Route::get('/meus_produtos', 'produtoController@listarProdutos');

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
Route::get('/cadastro_produtores', function () {
    return view('cadastro_produtores');
});
Route::get('/teste', function () {
    return view('teste');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
