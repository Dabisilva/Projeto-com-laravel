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
<body id="corpoH">
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-orange">

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
                                <h1 class="text-orange" >Laravel</h1>
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
    <div id="H">
        <h1 class="text-orange">Laravel</h1>
        <p>
            Laravel é um Framework PHP utilizado para o desenvolvimento web, que utiliza a arquitetura MVC e tem como principal característica <br>
            ajudar a desenvolver aplicações seguras e performáticas de forma rápida,com código limpo e simples,<br>
            já que ele incentiva o uso de boas práticas de programação e utiliza o padrão PSR-2 como guia para estilo de escrita do código
        </p>
        <p>
            Para a criação de interface gráfica, o Laravel utiliza uma Engine de template chamada Blade,<br>
            que traz uma gama de ferramentas que ajudam a criar interfaces bonitas e funcionais de forma rápida e evitar a duplicação de código.
        </p>
        <p>
            Para se comunicar com um Banco de Dados o Laravel utiliza uma implementação simples do ActiveRecord<br>
            chamada de Eloquent ORM, que é uma ferramenta que traz várias funcionalidades para facilitar a inserção, atualização, busca e exclusão de registros.<br>
            Com configuração simples e pequena e com pouco código podemos configurar a conexão com Banco de Dados e trabalhar com ele.
        </p>

        <h1 class="text-roxobo">Bootstrap</h1>
        <p>
            Bootstrap é um framework front-end que facilita a vida dos desenvolvedores web a criar sites com <br>
            tecnologia mobile (responsivo) sem ter que digitar uma linha de CSS para “fazer e acontecer”.
        </p>
        <p>
            Além disso, o Bootstrap possui uma diversidade de componentes (plugins) em JavaScript (jQuery) que<br>
            auxiliam o designer a implementar: tooltip, menu-dropdown, modal, carousel, slideshow, entre outros<br>
            sem a menor dificuldade, apenas acrescentando algumas configurações no código, sem a necessidade<br>
            de criar scripts e mais scripts.
        </p>
        <p>
            Por exemplo, caso queira implementar um componente de tooltip em seu layout,<br>
            sem utilizar o Bootstrap, seria necessário:</p>
        <p>
            &bull; encontrar um plugin que tenha esse comportamento e que funcione com seu tema;<br>
            &bull; acrescentar o script ao html;<br>
            &bull; inicializar o plugin através de script;<br>
            &bull; por fim, criar uma estrutura baseada no plugin.
        </p>

        <h1 class="text-azulquery">Jquery</h1>
        <p>
            jQuery é uma biblioteca de funções JavaScript que interage com o HTML, desenvolvida para simplificar os scripts<br>
            interpretados no navegador do cliente. Usada por cerca de 74.4% dos 10 mil sites mais visitados do mundo,<br>
            jQuery é a mais popular das bibliotecas JavaScript.Esta biblioteca é um projeto da Fundação JS,<br>
            que por sua vez faz parte da Fundação Linux e seu desenvolvimento é realizado pelo time jQuery.
        </p>
        <p>
            utiliza a licença MIT em seu código-fonte. A sintaxe do jQuery foi desenvolvida para tornar mais simples a navegação<br>
            do documento HTML, a seleção de elementos DOM, criar animações, manipular eventos, desenvolver aplicações AJAX e criação de plugins sobre ela.<br>
            Tais facilidades permitem aos desenvolvedores criarem camadas de abstração para interações de baixo nível de modo <br>
            simplificado em aplicações web dinâmicas de grande complexidade
        </p>
    </div>

    <!-- FOOTER -->
    <div id="footer">
        <footer class="container">
            <p><a class="float-right btn btn-primary" href="">Topo</a></p>
            <p class="float-left text-white">&copy; {{ date('Y') }} Company &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <p class="float-md-none text-white">Twitter <a target="_blank" href="https://twitter.com/Dabisilva1">Davi Barbosa</a>/ GitHub<a target="_blank" href="https://github.com/Dabisilva"> Dabisilva</a></p>
        </footer>
    </div>
</main>

<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>
</body>
</html>
