@extends('site.master.layout')

@section('content')
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

    </div>

@endsection
