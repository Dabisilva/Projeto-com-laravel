@extends('site.master.layout')

@section('content')
    <div id="formC">
    <form id="borda" class="bg-cinza">
        <h1 class="h3 mb-3 font-weight-normal text-black-50">Dê sua opinião</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="" class="form-control" placeholder="Email">
        <fieldset>
            <label for="msg" class="sr-only"></label>
            <textarea name="msg" id="msg" cols="103" rows="10" placeholder="Escreva uma mensagem"></textarea>
        </fieldset>
        <a id="botao" class="btn btn-lg btn-primary mb-3" href="{{route('site.contatos')}}">Confirmar</a>
    </form>
    </div>

@endsection
