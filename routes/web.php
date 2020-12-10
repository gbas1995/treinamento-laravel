<?php

use Illuminate\Support\Facades\Route;

//Rotas agrupadas

Route::get('/login', function(){
    return "Fazer Login";
})->name('login');

Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){

        Route::namespace('Admin')->group(function(){

            Route::name('admin.')->group(function() {

                Route::get('/dashboard', 'TesteController@index')->name('dashboard');
            
                Route::get('/financeiro', 'TesteController@index')->name('financeiro');
                
                Route::get('/produtos', 'TesteController@index')->name('produtos');

                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            }); 
         });
    });
}); 


/*Route::group([
        'middleware' => [],
        'prefix' => 'admin',
        'namespace' => 'Admin'
    ], function(){

        Route::name('admin.')->group(function(){
            Route::get('/dashboard', 'TesteController@index')->name('admin.dashboard');

            Route::get('/financeiro', 'TesteController@index')->name('admin.financeiro');
            
            Route::get('/produtos', 'TesteController@index')->name('admin.produtos');

            Route::get('/', 'TesteController@index')->name('admin.home');

            Route:: get('/', function(){
            return redirect()->route('admin.dashboard');

            })->name('home');

        });
    });


    /*


    // Linha do Bahba
    //
    // Exemplo 3 de redirecionamento
    Route::get('/redirecionamento3', function() {
        return redirect()->route('url.nova');
    });
        
    /* Exemplo 2 de redirecionamento
    Route::redirect('rota_antiga', 'rota_nova');

        
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

    //Exemplo 2 de redirecinamento
    //Route:: redirect('rota_antiga', 'rota_nova'); */

    //exemplo 1 de redirecinamento

    /*Route:: get('/rota_antiga/{param}', function($param){
        return redirect("/rota_nova/" .  $param);

    }); */


    //Route::get('/rota_nova', function(){
      //  return "Rota nova!";
    //}) ->name('url.nova');

    /*Route::get('/produtos/{idProduto?}', function ($idProduto = "") {
        return "Lista de produtos: {$idProduto}";
    });*/


   // Route::get('/prodam', function () {
     //   return "Cheguei na rota da Prodam";
    //});

    //    Route::get('/teste', function () {
  //      return "Cheguei no teste";
   // });



  /* Route::get('/view2', function () {
    return view('welcome');
});

Route::match(['get','post'], '/certeira', function () {
    return "Deu Match";
}); */


Route::get('/', function () {
    return view('welcome');
}); 


//controllers 10/12/2020
//ProdutoController
Route::get('produtos', 'ProdutoController@index');
Route::get('produto/{id?}', 'ProdutoController@show');
Route::get('produtos/{id}/edit', 'ProdutoController@edit');
Route::put('produto', 'ProdutoController@update');
 