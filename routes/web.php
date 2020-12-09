<?php

use Illuminate\Support\Facades\Route;


Route::get('/produtos/{idProduto}', function ($idProduto) {
    return "Lista de produtos: {$idProduto}";
});


Route::get('/prodam', function () {
    return "Cheguei na rota da Prodam";
});

Route::get('/teste', function () {
    return "Cheguei no teste";
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/view2', function () {
    return view('welcome');
});

Route::match(['get','post'], '/certeira', function () {
    return "Deu Match";
});
