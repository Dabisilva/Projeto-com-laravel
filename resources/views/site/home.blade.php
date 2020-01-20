
@extends('site.master.layout')

@section('content')
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
    @endsection
