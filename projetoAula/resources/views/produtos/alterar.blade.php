@extends('layouts.app')
@section('alterarProd')
    <h1>Alteração de Preco</h1>
    <form method="post" action="{{ route('produtos.alterar' , ['id' => $u->id]) }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" placeholder="Nome" value="{{ $u ->nome }}">
        <input type="text" name="preco" placeholder="preco" value="{{ $u ->preco }}">
        <input type="text" name="descricao" placeholder="descricao" value="{{ $u ->descricao }}">
        <input type="submit" value="Enviar">
    </form> 
@endsection