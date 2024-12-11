@extends('layouts.log')

@section('title', 'Login - Power Suplementos')

@section('content')


    <div class="nav-login">
    <form id="loginForm" onsubmit="return verificarLogin()">
            <img style="width: 200px; margin-left: 4vh;" src="{{asset('imgs/logo.png') }}">
            <input type="email" id="email" placeholder="E-mail" required>
            
            <div style="position: relative;">
            <input type="password" id="senha" placeholder="Senha" required>
            <span onclick="togglePasswordVisibility()" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                👁️
            </span>
        </div>
        
            <a href="{{asset('/cadastro')}}">Ainda não tem uma conta? Cadastre-se</a>
            <button type="submit">Entrar</button>
            <a href="{{asset('/')}}">Voltar para a pagina incial</a>
        </form>
    </div>


@endsection