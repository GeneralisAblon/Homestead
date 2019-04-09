<html>
<head>
<title>Produtos - echo="$produto->titulo" </title>

</head>
<body>
    
    <h1>Produtos - echo="$produto->titulo" </h1>
     <ul>


        <li><strong>SKU: </strong> echo="$produto->titulo" </li>
        <li><strong>Preço: </strong> echo="$produto->preco"  </li>
        <li><strong>Adicionado em: </strong> echo="$produto->create_at"  </li>

     </ul>
     
    <p><?php echo '$produto->descricao'?></p>
    <a href="javascript:history.go(-1)">Voltar</a>
</body>



</html>