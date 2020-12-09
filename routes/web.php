<?php

use Illuminate\Support\Facades\Route;


//exemplo 3 de redirecionamento

Route:: get('/redirecionamento3', function(){
	return redirect()->route('url.nova');
});

/*//Exemplo 2 de redirecinamento
Route:: redirect('rota_antiga', 'rota_nova'); */

//exemplo 1 de redirecinamento

/*Route:: get('/rota_antiga/{param}', function($param){
	return redirect("/rota_nova/" .  $param);

}); */


Route::get('/rota_nova', function(){
	return "Rota nova!";
}) ->name('url.nova');

/*Route::get('/produtos/{idProduto?}', function ($idProduto = "") {
    return "Lista de produtos: {$idProduto}";
});*/


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
