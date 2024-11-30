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
        <img src="{{ asset('assets/imgs/logo.png') }}">
        <p>Acreditamos que a saúde é um pilar essencial na vida de qualquer pessoa...</p>
        <a href="{{ url('/sobre') }}">Saiba Mais</a>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src=" assets/imgs/banner-1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="assets/imgs/banner-2.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="assets/imgs/banner-3.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="assets/imgs/banner-4.jpg" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


@endsection