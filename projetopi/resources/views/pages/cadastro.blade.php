@extends('layouts.cad')

@section('title', 'Cadastro - PowerUp Suplementos')

@section('content')


    <div class="nav-cad">
        
        <div class="cad">
        <img src="{{ asset('imgs/logo.png') }}">
        </div>
        
        <div class="form-cad">
        <form>
            <input type="text" placeholder="Usuário">
            <input type="email" placeholder="E-mail">
            <input type="password" placeholder="Senha">
            <input type="password" placeholder="Confirmar Senha">
            <a href="">Esqueceu sua senha?</a>
            <a id="concluir" href="{{ url('/sucesso') }}">Concluir Cadastro</a>
            </form>
        </div>
    </div>


@endsection