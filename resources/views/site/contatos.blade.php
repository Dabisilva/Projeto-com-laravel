<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">

</head>
<body id="corpo" class="text-center">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-orange">

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link btn-lg" href="{{route('site.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg" href="{{ route('site.sobre') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg" href="{{ route('site.contato') }}">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main">
    <hgroup id="H" class="container alert-success">
        <h1>Obrigado!</h1>
        <h2>Mensagem enviada com sucesso</h2>
    </hgroup>
    <div>
        <footer id="" class="container">
            <p class="float-left text-white">&copy; {{ date('Y') }} Company</p>
            <p class="float-md-none text-white">Twitter <a target="_blank" href="https://twitter.com/Dabisilva1">Davi Barbosa</a>/ GitHub<a target="_blank" href="https://github.com/Dabisilva"> Dabisilva</a></p>
        </footer>
    </div>
</main>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
