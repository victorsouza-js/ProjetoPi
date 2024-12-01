<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home'); // Página inicial
});

Route::get('/contato', function () {
    return view('pages/contato'); // Página de contato
});

Route::get('/cadastro', function () {
    return view('pages/cadastro'); // Página de cadastro
});

Route::get('/login', function () {
    return view('pages/login'); // Página de login
});

Route::get('/sobre', function () {
    return view('pages/sobre'); // Página de sobre
});

Route::get('/catalogo', function () {
    return view('pages/catalogo'); // Página de produtos
});

Route::get('/carrinho', function () {
    return view('pages/carrinho'); // Página de carrinho
});

Route::get('/admin', function(){
    return view('admin/adm');
});