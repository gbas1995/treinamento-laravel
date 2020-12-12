@extends('admin.layouts.app')

@section('title', 'cadastrar novo produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    <form action="{{ route('produtos.store')}}" method="POST">
        @csrf
        
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="descrição" placeholder="Descrição do produto">
        <button type="submit"> Enviar </button>
    </form>
    
@endsection
