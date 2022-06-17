<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Suprema - HTML5</title>
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/stylecat.css">
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/sidebar.js"></script>
</head>

<body>

    <header class="navbar navbar-expand-sm navbar-dark text-light">
       @include('topbar')
    </header>
    <div>
        <div>
            @include('navContent')
        </div>
        <main id="contenido">
            @include('categoriadetailsMain')
        </main>
    </div>
    <footer>
        @include('footer')
    </footer>
</body>
</html>
