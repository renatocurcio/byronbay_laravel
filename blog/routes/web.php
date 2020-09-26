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