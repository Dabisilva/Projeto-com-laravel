<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

</head>
<body id="corpo" class="text-center">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-orange">

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link btn-lg" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg" href="/sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg" href="/contato">Contato</a>
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
