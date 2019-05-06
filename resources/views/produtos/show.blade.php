@extends('layout.app')
@section('title', $produto->titulo)
@section('content')

    <h1>Produto - {{$produto->titulo}}</h1>   
    <div class="row">
        @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))
	    <div class="col-md-6">
		    <img src="{{url('img/produtos/'.md5($produto->id).'.jpg')}}" alt="Imagem Produto" class="img-fluid img-thumbnail">
	    </div>
        @endif
	    <div class="col-md-6">
            <ul>
                <li><strong>SKU: </strong>{{$produto->sku}}</li>
                <li><strong>Preço: </strong>R$ {{number_format($produto->preco,2,',','.')}}</li>
                <li><strong>Adicionado em: </strong>{{date("d/m/Y H:i", strtotime($produto->created_at))}}</li>
                <li><p>{{$produto->descricao}}</p></li>
            <ul>
	     </div>
    </div>
         <a class="btn btn-primary" href="/produtos/{{$produto->id}}/edit">Atualizar</a>
         <a class="btn btn-primary" href="/produtos/">Voltar</a>		 
 @endsection
