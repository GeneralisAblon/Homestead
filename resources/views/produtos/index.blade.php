@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')       
    <h1>Produtos</h1>
        <ul>
        @foreach($produtos as $produtoapelido)
        <li><a href="{{ URL::to('produtos')}}/{{$produtoapelido->id}}">{{$produtoapelido->titulo}}</a></li>
        @endforeach
        </ul>
        <a href="/produtos/create" class="btn btn-primary">Cadastrar produto</a>
@endsection
   