<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title>Nosso Site - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('dist/css/bootstrap.min.css' ) }}">

</head>

<body>
    <div class="container">
         @yield('content')
    </div>
    <script type="text/javascript" scr="{{ URL::to( 'js/jquery.min.js' )}}"></script>
    <script type="text/javascript" scr="{{ URL::to( 'dist/js/bootstrap.min.js' ) }}"></script>



</body>
</html>