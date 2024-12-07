@extends('layouts.app')

@section('title', 'Home - PowerUp Suplementos')

@section('content')


<div class="div-nav">
<div class="base">
        <h1>POWERUP</h1>
        <h2>Suplementos</h2>
        <p>Os melhores suplementos você encontra aqui!</p>
        <a class="nav-button" href="{{ url('/catalogo') }}">Confira Nossos Produtos</a>
    </div>
    <img src="https://hidromaniafitness.com.br/musculacao/images/musculacao.png">
    
</div>

<div class="sobre-nav">
    <h1>SOBRE A POWERUP SUPLEMENTOS</h1>
    <div class="linha"></div>
    <img src="{{ asset('imgs/logo.png') }}">
    <p>Acreditamos que a saúde é um pilar essencial na vida de qualquer pessoa. Nossa missão é fornecer não só produtos que atendam às suas necessidades, mas também informação de qualidade para que você se sinta seguro(a) em cada escolha.</p>
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
            <img src="{{ asset('imgs/banner-1.jpg') }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imgs/banner-2.jpg') }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{asset('imgs/banner-3.jpg') }}" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('imgs/banner-4.jpg') }}" class="d-block w-100">
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

<div class="ofertas">
    <h1>PROMOÇÕES ESPECIAIS</h1>
    <div class="linha"></div>
    <div class="offer-item">
        <img src="https://cdn.awsli.com.br/600x450/968/968066/produto/36982274/creatina-max-titanium-300g-wokp9u5c7m.png" alt="Oferta">
        <h3>Creatina Max 300g 20% OFF</h3>
        <p>De R$83,00 por R$74,90</p>
        <a href="pages/catalogo.html" class="btn btn-primary">Comprar Agora</a>
    </div>
    <div class="offer-item">
        <img src="https://cdn.awsli.com.br/300x300/250/250305/produto/300619857/insane-clown---demons-01-viaefzua6l-ty3c4akwxw.png" alt="Oferta">
        <h3>Pré Treino Insany Clow 10% OFF</h3>
        <p>De R$124,00 por R$95,00</p>
        <a href="pages/catalogo.html" class="btn btn-primary">Comprar Agora</a>
    </div>
    <div class="offer-item">
        <img src="https://www.gsuplementos.com.br/upload/produto/imagem/creatina-100g-creapure-growth-supplements-1.png" alt="Oferta">
        <h3>Creatina Monohidratada 300g 10% OFF</h3>
        <p>De R$72,00 por R$62,00</p>
        <a href="pages/catalogo.html" class="btn btn-primary">Comprar Agora</a>
    </div>
</div>

<div id="beneficios">
    <img style="width: 183vh;" src="https://imgproxy2.cdn-retailhub.com/rs:fit/q:75/w:3840/format:webp/plain/https://cdn-retailhub.com/max-titanium/e8604831-2ac2-4d2c-8335-9bf86ed07129.jpg">
</div>


<div class="grid-container">
    <div class="grid-item">
        <img src="https://img.odcdn.com.br/wp-content/uploads/2021/08/shutterstock_1861917607.jpg" alt="Ganho de Massa">
        <div class="overlay-text">GANHO DE MASSA</div>
    </div>
    <div class="grid-item">
        <img src="https://blog.lionfitness.com.br/wp-content/uploads/2018/10/muscula%C3%A7%C3%A3o-benef%C3%ADcios.jpg" alt="Emagrecimento">
        <div class="overlay-text">SAÚDE</div>
    </div>
    <div class="grid-item">
        <img src="https://blog.gsuplementos.com.br/wp-content/uploads/2019/11/312844-como-escolher-o-tipo-de-treino-ideal-para-alcancar-seus-objetivos-scaled.jpg" alt="Melhora da Autoestima">
        <div class="overlay-text">ENERGIA</div>
    </div>
    <div class="grid-item">
        <img src="https://engenhariadocorpo.com.br/wp-content/uploads/2024/03/Modelo-de-Imagem-para-Blog-1-3.png" alt="Definição Muscular">
        <div class="overlay-text">RESULTADOS</div>
    </div>
</div>



<div class="container">
    <div class="card">
        <img src="{{ asset('imgs/img-banner-1.jpg') }}">
        <div class="overlay">
            <h2>SUPLEMENTOS</h2>
            <h3>VITAMINAS</h3>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('imgs/img-banner-2.jpg') }}">
        <div class="overlay">
            <h2>SUPLEMENTOS</h2>
            <h3>AMINOÁCIDOS</h3>
        </div>
    </div>
    <div class="card">
        <img src="{{ asset('imgs/img-banner-3.jpg') }}">
        <div class="overlay">
            <h2>SUPLEMENTOS</h2>
            <h3>PROTEÍNAS</h3>
        </div>
    </div>
</div>


<div class="faq">
    <h1>PERGUNTAS FREQUENTES</h1>
    <div class="linha"></div>
    <details>
        <summary>Quais formas de pagamento são aceitas?</summary>
        <p>Aceitamos cartões de crédito, boleto bancário e Pix.</p>
    </details>
    <details>
        <summary>Quanto tempo leva para entregar?</summary>
        <p>O prazo de entrega é de 3 a 7 dias úteis, dependendo da sua localização.</p>
    </details>
</div>


<div class="newsletter">
    <h2>Inscreva-se na nossa Newsletter</h2>
    <p>Receba as melhores ofertas e novidades direto no seu email.</p>
    <form action="newsletter.php" method="post">
        <input type="email" name="email" placeholder="Digite seu email" required>
        <button type="submit" class="btn btn-success">Inscrever-se</button>
    </form>
</div>

<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>

  <button id="back-to-top" class="btn btn-primary">↑</button>


  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>

<script>
    // Seleciona o botão
    const backToTopButton = document.getElementById('back-to-top');

    // Mostrar ou ocultar o botão ao rolar a página
    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    // Rolar suavemente até o topo quando o botão for clicado
    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>



@endsection