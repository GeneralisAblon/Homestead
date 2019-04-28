<html>
<head>
<title>Produtos </title>

</head>

<body>
     
    <h1>Produtos</h1>
        <ul>
        @foreach($produtos as $produtoapelido)
        <li><a href="/produtos/{{$produtoapelido->id}}">{{$produtoapelido->titulo}}</a></li>
        @endforeach
        </ul>

</body>

</html>
