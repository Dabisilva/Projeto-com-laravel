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
                    <a class="nav-link btn-lg bg-bl" href="http://localhost/Projeto-com-laravel/public/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg" href="http://localhost/Projeto-com-laravel/public/sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-lg" href="http://localhost/Projeto-com-laravel/public/contato">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div id="myCarousel" class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-left">

                        <h1 class="text-orange">Laravel</h1>
                        <h2>O framework PHP para artesãos da Web.</h2>
                        <p>O Laravel é uma estrutura de aplicativos da web com sintaxe expressiva e elegante. Já lançamos as bases - liberando você para criar sem suar as pequenas coisas.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="text-roxobo">Bootstrap.</h1>
                        <h2>A biblioteca de componentes front-end mais popular do mundo.</h2>
                        <p>Crie projetos responsivos HTML, CSS e JS para dispositivos móveis na Web.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="text-azulquery">Jquery</h1>
                        <h2>jQuery mudou a maneira como milhões de pessoas escrevem JavaScript.</h2>
                        <p>O jQuery é uma biblioteca JavaScript rápida, pequena e rica em recursos. Isso simplifica muito o processo de passagem e manipulação de documentos HTML, manipulação de eventos, animação e Ajax com uma API fácil de usar que funciona em vários navegadores.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="formC">
    <form class="bg-cinza">
        <h1 class="h3 mb-3 font-weight-normal text-black-50">Dê sua opinião</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="" class="form-control" placeholder="Email">
        <fieldset>
            <label for="msg" class="sr-only"></label>
            <textarea name="msg" id="msg" cols="103" rows="10" placeholder="Escreva uma mensagem"></textarea>
        </fieldset>
        <button class="btn btn-lg btn-primary " type="submit">Confirmar</button>
    </form>
    </div>

    <div id="footerC">
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
