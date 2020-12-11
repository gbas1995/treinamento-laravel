<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller

{   
    //protected $request;
    public function __construct(Request $request){
        $this->request = $request;
        $this->middleware('auth')->only(['show,','index']);
    }

    public function index(){
        return "Listagem de produtos";
    }

    public function show($id = null){
       return "Mostrando o produto com id: {$id}";
    }

    /*public function edit($id = null){
        return "Produto na base de dados com id: {$id}";
    } */

    /*public function update(){
        //processamento do que veio do form html
        //request
        return "Produto na base de dados com id: {$id}";
    }  */

    public function create(){
        return "Form de criação do produto: ";
    }

    public function edit(){
        return "Formulário de edição de produto";
    }

    public function store(Request $request){
        return "Aqui eu salvo o formulário na base de dados";
    }

    public function update($id, Request $request){
        return "Aqui vou fazer o update na base";
    }

    public function destroy($id){
        return "Aqui é onde eu vou deletar um produto";
    }
}
