@extends('layouts.app')

@section('title', 'Home - PowerUp Suplementos')

@section('content')


    <div class="div-nav">
        <img src="https://hidromaniafitness.com.br/musculacao/images/musculacao.png">
        <div class="base">
            <h2>POWERUP</h2>
            <h3>Suplementos</h3>
            <a class="nav-button" href="{{ url('/catalogo') }}">Confira Nossos Produtos</a>
        </div>
    </div>

    <div class="sobre-nav">
        <h1>SOBRE A POWERUP SUPLEMENTOS</h1>
        <div class="linha"></div>
        <img src="{{ asset('imgs/logo.png') }}">
        <p>Acreditamos que a saúde é um pilar essencial na vida de qualquer pessoa. Nossa missão é fornecer não só produtos que atendam às suas necessidades, mas também informação de qualidade para que você se sinta seguro(a) em cada escolha.</p>
        <a href="{{ url('/sobre') }}">Saiba Mais</a>
    </div>

    

@endsection