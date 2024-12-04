@extends('layouts.cad')

@section('title', 'Cadastro - PowerUp Suplementos')

@section('content')


    <div class="nav-cad">

    <lottie-player
            src="{{ asset('animations/img-2.json') }}"
            background="transparent"
            speed="1"
            style="width: 600px; height: 500px; margin-top: 5vh;"
            loop
            autoplay>
        </lottie-player>
        
        <div class="form-cad">
        <form>
            <input type="text" placeholder="Usuário">
            <input type="email" placeholder="E-mail">
            <input type="password" placeholder="Senha">
            <input type="password" placeholder="Confirmar Senha">
            <a href="">Esqueceu sua senha?</a>
            <button type="submit">Concluir Cadastro</button>
        </form>
        </div>
    </div>


@endsection