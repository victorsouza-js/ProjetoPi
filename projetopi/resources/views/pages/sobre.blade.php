@extends('layouts.sob')

@section('title', 'Sobre - PowerUp Suplementos')

@section('content')
<link rel="stylesheet" href="{{ asset('css/sobre.css') }}">


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="x-icon" href="../assets/imgs/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre a PowerUp Suplementos</title>
  <link rel="stylesheet" href="../assets/css/sobre.css">
</head>

<body>
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
</body>

</html>


@endsection
