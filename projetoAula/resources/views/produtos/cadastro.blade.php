@extends('layouts.app')
@section('cadastroProd')
<h1>Cadastro de Produto</h1>
<form action="{{ route('produtos.novo')}}" method="post"> 
    @csrf 
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="preco" placeholder="preco">
    <input type="text" name="descricao" placeholder="descricao">
    <input type="submit" value="Enviar">
</form>
@endsection