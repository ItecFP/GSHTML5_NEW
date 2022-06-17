<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/styleContent.css">
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/navbar.js"></script>
    <title>Etiqueta {{$tagdata["Name"]}}</title>
</head>
<body>
    <header class="navbar sticky-top navbar-expand-sm navbar-dark text-light">
        
        @include('topbar')
        
    </header>
    <aside class="sticky-top">

        @include('navContent')

    </aside>     
    <main>
        
        @include('tagDetailContent')
       
    </main>
</body>
</html>