<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});