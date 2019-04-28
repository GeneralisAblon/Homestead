@extends('layout.app')
@section('title', $produto->titulo)
@section('content')     

<h1>Produto - {{$produto->titulo}}</h1>
            <ul>
            <li><strong>SKU: </strong>{{$produto->sku}}</li>
            <li><strong>Preço: </strong>{{$produto->preco}}</li>
            <li><strong>Adicionado em: </strong>{{$produto->create_at}}</li>            
            <ul>
            
            <p>
            {{$produto->descricao}}
            </p>
            <a href="javascript:history.go(-1)">Voltar</a>
 @endsection










