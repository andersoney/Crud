<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/all.css">
        <title>{{config('app.name')}} - @yield('title')</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/all.js">
        </script>
         @yield('scripts')
        
    </head>
    <body>
        <header>Header onde terá a logomarca</header>
        <section class="menu">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/mapa">Mapa</a></li>
                <li><a href="#contato">Contate-nos</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </section>
        <section class="conteudo scroll">
            @yield('conteudo')
        </section>
        <footer>
            Aqui a nota de rodapé
        </footer>
    </body>
</html>
