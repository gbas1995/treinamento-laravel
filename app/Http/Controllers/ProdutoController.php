<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = ['Produto 01', 'Produto 02', 'Produto 03'];
        return $produtos;
    }

    public function show($id = null){
       return "Mostrando o produto com id: {$id}";
    }

    public function edit($id = null){
        return "Produto na base de dados com id: {$id}";
    }

    public function update(){
        //processamento do que veio do form html
        //request
        return "Produto na base de dados com id: {$id}";
    }
}
