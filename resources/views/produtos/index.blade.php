@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')     
    <h1>Produtos</h1>
        <ul>
        @foreach($produtos as $produtoapelido)
        <li><a href="/produtos/{{$produtoapelido->id}}">{{$produtoapelido->titulo}}</a></li>
        @endforeach
        </ul>
@endsection
