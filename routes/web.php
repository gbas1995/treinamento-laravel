<?php

use Illuminate\Support\Facades\Route;

//Rotas agrupadas

Route::get('/login', function(){
    return "Fazer Login";

})->name('login');

Route::middleware([])->group(function(){

    Route:: prefix('admin')->group(function(){

        /*Route::namespace('Admin')->group(function(){
            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'Admin\TesteController@index')->name('admin.dashboard');
        
                Route::get('/financeiro', 'Admin\TesteController@index')->name('admin.financeiro');
                
                Route::get('/produtos', 'Admin\TesteController@index')->name('admin.produtos');
        
                Route::get('/', 'Admin\TesteController@index')->name('admin.home');
        
                Route:: get('/', function(){
                return redirect()->route('admin.dashboard');
        
                 })->name('home');

            

            });

         });

    });
}); */

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function(){

    Route::name('admin.')->group(function(){
        Route::get('/dashboard', 'Admin\TesteController@index')->name('admin.dashboard');

        Route::get('/financeiro', 'Admin\TesteController@index')->name('admin.financeiro');
        
        Route::get('/produtos', 'Admin\TesteController@index')->name('admin.produtos');

        Route::get('/', 'Admin\TesteController@index')->name('admin.home');

        Route:: get('/', function(){
        return redirect()->route('admin.dashboard');

         })->name('home');

    });
});





// Linha do Bahba
//
// Exemplo 3 de redirecionamento
Route::get('/redirecionamento3', function() {
    return redirect()->route('url.nova');
});
    
/* Exemplo 2 de redirecionamento
Route::redirect('rota_antiga', 'rota_nova');
*/
    
// Exemplo 1 de redirecionamento
Route::get('/rota_antiga/{param}', function($param) {
    return redirect('rota_nova/' . $param);
});
        
Route::get('/rota_nova', function() {
   return 'rota_nova!';
})->name('url.nova');
// Papai que colocou ..        

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


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/view2', function () {
    return view('welcome');
});

Route::match(['get','post'], '/certeira', function () {
    return "Deu Match";
}); */
