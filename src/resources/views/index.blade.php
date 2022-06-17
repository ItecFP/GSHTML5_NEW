<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía Suprema - HTML5</title>
    <link rel="stylesheet" href="/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/stylecat.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/navbar.js"></script>
</head>
<body class="container-fluid m-0 p-0">
    <header class="navbar sticky-top navbar-expand-sm navbar-dark text-light">
       @include('topbar')
    </header>
    <main class="row">

        <span><h1>Juanh</h1></span>
        <span>Alberto</span>
        <span>Ignacio</span>
        <span>kike</span>
        <span>Pozo</span>
        <span>Ruben</span>
        <span>dani</span>
        <span>Jose Antonio</span>
        @include('presentacion')
        @include('categoriagrid')
    </main>
    <footer class="footer">
        @include('footer')
    </footer>
</body>
</html>
