@extends('admin.layouts.app')

@section('title', 'Editar um produto')

@section('content')
    <h1>Editar produto {{$id}}</h1>

    <form action="{{ route('produtos.update', $id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="descrição" placeholder="Descrição do produto">
        <button type="submit"> Enviar </button>
    </form>
    
@endsection
