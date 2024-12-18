@extends('layouts.sob')

@section('title', 'Sobre - PowerUp Suplementos')

@section('content')


  <div class="div-sobre">
    <h2>Quem Somos</h2>
    <section class="missao-visao-valores">
      <h3>Missão</h3>
      <p>Fornecer produtos de alta qualidade para promover saúde e bem-estar.</p>

      <h3>Visão</h3>
      <p>Ser a principal referência no mercado de suplementos até 2030, impactando positivamente nossos clientes e o meio ambiente.</p>

      <h3>Valores</h3>
      <ul>
        <li>Integridade</li>
        <li>Comprometimento</li>
        <li>Inovação</li>
        <li>Respeito ao cliente</li>
      </ul>
    </section>
    <button class="btn-topo" onclick="scrollToTop()">Voltar ao Topo</button>
  </div>

  <script>
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>



@endsection
