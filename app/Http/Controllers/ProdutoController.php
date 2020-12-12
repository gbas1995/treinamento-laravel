<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller

{   
    //protected $request;
    /*public function __construct(Request $request){
        $this->request = $request;
        $this->middleware('auth')->only(['show,','index']);
    }*/

    public function index(){

        $teste = 123;
        $produtos  = ['Xbox Series X', 'Galaxy Note,', 'Tv 65', 'Macbook'];
        $mensagem = "Produto enviado com sucesso";
       // return "Listagem de produtos";

        return view('admin.pages.produtos.index', compact('teste','produtos', 'mensagem'));
    }

    public function show($id = null){
       
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
        return view('admin.pages.produtos.create');
    }

    public function edit($id){

        return view('admin.pages.produtos.edit', compact('id'));
    }

    public function store(Request $request){
        dd('Cadastrando..');
    }

    public function update($id, Request $request){
        
        dd('Salvando a edição...');
    }

    public function destroy($id){
        return "Aqui é onde eu vou deletar um produto";
    }
}
