<html>
<head>
<title>Produtos - {{$produtos[1]->titulo}}</title>

</head>
<body>
    @foreach($produtos as $p)
    <h1>Produtos - {{$p->titulo}} </h1>
     <ul>


        <li><strong>SKU: </strong> {{$p->titulo}} </li>
        <li><strong>Preço: </strong> {{$p->preco}}  </li>
        <li><strong>Adicionado em: </strong> {{$p->create_at}}  </li>

     </ul>
     
    <p>{{$p->descricao}}</p>
    @endforeach
    <a href="javascript:history.go(-1)">Voltar</a>
</body>



</html>
s