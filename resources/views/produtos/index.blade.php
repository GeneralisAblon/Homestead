@extends('layouts.app')
@section('title', 'Lista de Produtos')
@section('content')
    
    @if($message = Session::get('success'))
    <div class='alert alert-success'>
    {{$message}}        
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="{{url('produtos/busca')}}">
                @csrf 
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="busca" name="busca" placeholder="Procurar produto no site..." value="{{$buscar}}">
                        <div class="input group-append">
                           <button class="btn btn-outline-secondary">Buscar</button>
                        </div>
                </div>  
            </form> 
        </div>
    </div>


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img_produtos/rel_1.jpg" height="350px" width="1200px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img_produtos/rel_1.jpg" height="350px" width="1200px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/img_produtos/rel_1.jpg" height="350px" width="1200px" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
    <div class="row">
        @foreach($produtos as $produto)
        <div class="col-md-3">            
            @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))	    
		        <img src="{{url('img/produtos/'.md5($produto->id).'.jpg')}}" alt="Imagem Produto" class="img-fluid img-thumbnail">	    
            @endif
            <h4 class="text-center"><a href="{{ URL::to('produtos')}}/{{$produto->id}}">{{$produto->titulo}}</a></h4>  
            @if(Auth::check())          
            <div class="mb-3">                
                <form method="POST" action="{{action('ProdutosController@destroy',$produto->id)}}">
                @csrf                
	            <input type="hidden" name="_method" value="DELETE">
                <a class="btn btn-primary" href="{{url::to('produtos/'.$produto->id.'/edit')}}">Atualizar</a>
                <button class="btn btn-danger">Excluir</button>
            </div>
            @endif
        </div>        
        @endforeach
        </div>
        <br>
        <a href="/produtos/create" class="btn btn-primary">Cadastrar produto</a>
        <br>
        <br>
    {{$produtos->links()}}
@endsection
