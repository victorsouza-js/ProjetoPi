@extends('layouts.log')

@section('title', 'Login - Power Suplementos')

@section('content')


    <div class="nav-login">
        <form>
            <img style="width: 200px; margin-left: 4vh;" src="{{asset('imgs/logo.png') }}">
            <input type="email" placeholder="E-mail">
            <input type="password" placeholder="Senha">
            <a href="{{asset('/cadastro')}}">Ainda não tem uma conta? Cadastre-se</a>
            <button type="submit">Entrar</button>
        </form>
    </div>


@endsection