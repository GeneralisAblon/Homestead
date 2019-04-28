<html>
<head>
<meta charset="utf-8">
<title>Produtos - {{$produto->titulo}}</title>

</head>

<body>

<h1>Produto - {{$produto->titulo}}</h1>
            <ul>
            <li><strong>SKU: </strong>{{$produto->sku}}</li>
            <li><strong>Preço: </strong>{{$produto->preco}}</li>
            <li><strong>Adicionado em:  </strong>{{$produto->create_at}}</li>
            
            <ul>
            <p>{{$produto->descricao}}</p>
            <a href="javascript:history.go(-1)">Voltar</a>

</body>

</html>










