<html>
<head>
<title>Produtos </title>

</head>

<body>
    <h1>Produtos</h1>
        <ul>
        @foreach($produtos as $produto)
        <li><a href="/produtos/{{$produto->id}}">{{$produto->titulo}}</a></li>
        @endforeach
        </ul>

</body>

</html>