@extends('layouts.log')

@section('title', 'Login - Power Suplementos')

@section('content')


    <div class="nav-login">
    <form id="loginForm" onsubmit="return verificarLogin()">
            <img style="width: 200px; margin-left: 4vh;" src="{{asset('imgs/logo.png') }}">
            <input type="email" id="email" placeholder="E-mail" required>
            <input type="password" id="senha" placeholder="Senha" required>
            <a href="{{asset('/cadastro')}}">Ainda não tem uma conta? Cadastre-se</a>
            <button type="submit">Entrar</button>
            <a href="{{asset('/')}}">Voltar para a pagina incial</a>
        </form>
    </div>


@endsection