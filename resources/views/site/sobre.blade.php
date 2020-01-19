<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto com Frameworks</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
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
    <div id="carroselS">
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
                        <p>Uma estrutura de aplicativos da web com sintaxe expressiva e elegante. Já lançando as bases - liberando você para criar sem suar as pequenas coisas.</p>
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
                        <h2>Mudando a maneira como milhões de pessoas escrevem JavaScript.</h2>
                        <p>Uma biblioteca leve, rápida e cheia de recursos para Javascript.</p>
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
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div id="sobre" class="position-relative">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">

                <h2>Instalar Bootstrap</h2>
                <p>Inclua os arquivos Sass e JavaScript de origem do Bootstrap via npm, Composer ou Meteor. As instalações gerenciadas por pacote não incluem documentação, mas incluem nosso sistema de construção e leia-me...</p>
                <p><a target="_blank" class="btn btn-roxobo" href="https://getbootstrap.com/" role="button">Ver detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">

                <h2>Laravel Vapor</h2>
                <p>O Laravel Vapor é uma plataforma de implantação sem servidor para o Laravel, desenvolvida pela AWS. Inicie sua infraestrutura Laravel no Vapor e se apaixone pela simplicidade escalável dos servidores sem servidor...</p>
                <p><a target="_blank" class="btn btn-Vapor" href="https://vapor.laravel.com/" role="button">Ver detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">

                <h2>Download do jQuery</h2>
                <p>Cópias compactadas e descompactadas dos arquivos jQuery estão disponíveis. O arquivo não compactado é melhor usado durante o desenvolvimento ou depuração; o arquivo compactado economiza largura de banda e melhora o desempenho na produção...</p>
                <p><a target="_blank" class="btn btn-azulquery" href="https://jquery.com/download/" role="button">Ver detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Laravel <span class="text-muted">uma comunidade criada para pessoas como você.</span></h2>
                <p class="lead">Seja você um desenvolvedor solo ou uma equipe de 20 pessoas, começar é simples, graças à nossa grande comunidade.</p>
            </div>
            <div class="col-md-5">
                <img width="500" height="500" src="{{ asset('img/laravel.png') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Bootstrap <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Descubra o Bootstrap, o framework mais conhecido do mundo para criar sites responsivos e mobile, comece com o BootstrapCDN e nosso template inicial.Documentação e exemplos de utilitários de texto comuns para controle de alinhamento, quebra de linha, espessura, etc.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img width="500" height="500" src="{{ asset('img/bootstrap.png') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Jquery<span class="text-muted">Checkmate.</span></h2>
                <p class="lead">O jQuery é uma biblioteca JavaScript rápida, pequena e rica em recursos. Isso simplifica muito o processo de passagem e manipulação de documentos HTML, manipulação de eventos, animação e Ajax com uma API fácil de usar que funciona em vários navegadores.</p>
            </div>
            <div class="col-md-5">
                <img width="500" height="500" src="{{ asset('img/jquery.png') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

    <div id="footer">
    <footer class="container">
        <p><a class="float-right btn btn-primary" href="">Topo</a></p>
            <p class="float-left text-white">&copy; {{ date('Y') }} Company</p>
            <p class="float-md-none text-white">Twitter <a target="_blank" href="https://twitter.com/Dabisilva1">Davi Barbosa</a>/ GitHub<a target="_blank" href="https://github.com/Dabisilva"> Dabisilva</a></p>
    </footer>
    </div>
</main>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
