<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body class="text-center">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link btn-lg" href="http://localhost/Projeto-com-laravel/public/home">Home</a>
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
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-left">

                        @if(date('H')>=0 && date('H')<=6)
                            <h4>Olá! Boa Madrugada :)</h4>
                        @elseif(date('H')>=7 && date('H')<=12)
                            <h4>Olá! Bom dia</h4>
                        @elseif(date('H')>=13 && date('H')<=18)
                            <h4>Olá! Boa Tarde</h4>
                        @else
                            <h4>Olá! Boa noite</h4>
                        @endif
                        <h1>Laravel</h1>
                        <h1>O framework PHP para artesãos da Web.</h1>
                        <p>O Laravel é uma estrutura de aplicativos da web com sintaxe expressiva e elegante. Já lançamos as bases - liberando você para criar sem suar as pequenas coisas.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Bootstrap.</h1>
                        <h1>A biblioteca de componentes front-end mais popular do mundo.</h1>
                        <p>Crie projetos responsivos HTML, CSS e JS para dispositivos móveis na Web.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>Jquery</h1>
                        <h1>jQuery mudou a maneira como milhões de pessoas escrevem JavaScript.</h1>
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


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">

                <h2>Instalar Bootstrap</h2>
                <p>Inclua os arquivos Sass e JavaScript de origem do Bootstrap via npm, Composer ou Meteor. As instalações gerenciadas por pacote não incluem documentação, mas incluem nosso sistema de construção e leia-me...</p>
                <p><a target="_blank" class="btn btn-secondary" href="https://getbootstrap.com/" role="button">Ver detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">

                <h2>Laravel Vapor</h2>
                <p>O Laravel Vapor é uma plataforma de implantação sem servidor para o Laravel, desenvolvida pela AWS. Inicie sua infraestrutura Laravel no Vapor e se apaixone pela simplicidade escalável dos servidores sem servidor...</p>
                <p><a target="_blank" class="btn btn-secondary" href="https://vapor.laravel.com/" role="button">Ver detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">

                <h2>Download do jQuery</h2>
                <p>Cópias compactadas e descompactadas dos arquivos jQuery estão disponíveis. O arquivo não compactado é melhor usado durante o desenvolvimento ou depuração; o arquivo compactado economiza largura de banda e melhora o desempenho na produção...</p>
                <p><a target="_blank" class="btn btn-secondary" href="https://jquery.com/download/" role="button">Ver detalhes &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p><a class="float-right btn btn-primary" href="">Topo</a></p>
        <p>Twitter <a target="_blank" href="https://twitter.com/Dabisilva1">Davi Barbosa</a>/ GitHub<a target="_blank" href="https://github.com/Dabisilva"> Dabisilva</a></p>
        <p class="float-left">&copy; {{ date('Y') }} Company</p>
    </footer>
</main>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
