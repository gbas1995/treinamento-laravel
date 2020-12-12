@extends('admin.layouts.app')

@include('admin.includes.alert', ['content' => $mensagem])

<hr    />

@section('title', 'Gestão de Produtos')
    
@section('content')

    <h1>Exibindo os produtos</h1>

    <a href="{{ route('produtos.create') }}">Cadastrar</a> <br   />
    <a href="{{ route('produtos.edit', 4) }}">Editar</a>

    @component('admin.components.card')
        @slot('title')
            <h1>Título do Card</h1>
        @endslot

        Conteúdo do Card
    @endcomponent

    <hr   />

    @if ($teste == 123)
        O valor é igual
    @else
        O valor é diferente 
    @endif

    <br  />

    @isset($var2) 
        Esta variável exite
    @else
        Esta variável não existe
    @endisset

    <br  />

    @empty($testeArr) 
        É um array vazio
    @else
        Este array não é vazio
    @endempty

    @auth
        <p>Autenticado </p>
    @else
        <p>Não autenticado </p>
    @endauth

    @guest
        <p>Este aqui também não está logado (autenticado) </p>
    @endguest

    @switch($teste)
        @case(321)
            Este valor está correto e é {{$teste}}
            @break
        @case(123)
            Este valor agora é {{$teste}}
            @break
        @default
            Não foi nenhum dos valores esperados
    @endswitch

    @if(isset($produtos))
    @foreach ($produtos as $produto)
        <p class="@if($loop->last) last @endif">{{ $produto }}</p>
    @endforeach
        
    @endif
    
@endsection

<style>
    .last {
        background: #CCC;
    }
</style>


