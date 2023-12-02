@extends('layouts.app')
@section('login')

<div class="container"> 
    <form action="{{ route('login') }}" method="post"> @csrf 
    <div class="form-group">
    <label for="usuario">Nome do Produto</label>
    <input type="text" class="form-control" id="usuario" 
    placeholder="Digite seu usuário" name="login">
</div>

<div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" 
    placeholder="Digite sua senha">
</div>
<button type="submit" class="btn btn-primary">Entrar</button>

</form>
</div>