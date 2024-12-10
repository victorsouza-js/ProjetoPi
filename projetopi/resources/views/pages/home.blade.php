@extends('layouts.app')

@section('title', 'Suplementos: Comprar suplementos é na PowerUp Suplementos!')

@section('content')



<h2 style="color: white; margin-left: 5vh; margin-top: 5vh;" id="welcome-message" class="animate__animated animate__fadeInDown"></h2>


<div class="div-nav">
<div class="base">
        <h1 >POWERUP</h1>
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


<div class="categories">
        <!-- Card Whey Protein -->
        <div class="category-card">
            <img src="https://i0.wp.com/vegashop.com.br/wp-content/uploads/2022/01/img2.png?fit=969%2C750&ssl=1" alt="Whey Protein">
            <div class="category-overlay">
                <div class="category-title">WHEY PROTEIN</div>
            </div>
        </div>

        <!-- Card Pré-Treino -->
        <div class="category-card">
            <img src="https://blog.darklabsuplementos.com.br/wp-content/uploads/2023/11/suplemento-pre-treino.png" alt="Pré-Treino">
            <div class="category-overlay">
                <div class="category-title">PRÉ-TREINO</div>
            </div>
        </div>

        <!-- Card Creatina -->
        <div class="category-card">
            <img src="https://static.farmabemfarmacia.com.br/produto/multifotos/110-2_DM.jpeg" alt="Creatina">
            <div class="category-overlay">
                <div class="category-title">CREATINA</div>
            </div>
        </div>
    </div>


<div id="beneficios">
    <img style="width: 183vh;" src="https://imgproxy2.cdn-retailhub.com/rs:fit/q:75/w:3840/format:webp/plain/https://cdn-retailhub.com/max-titanium/e8604831-2ac2-4d2c-8335-9bf86ed07129.jpg">
</div>



<div class="cont">
       
        <div class="product-card">
            <div class="discount">14% OFF</div>
            <img src="https://madrugaosuplementos.vtexassets.com/arquivos/ids/175481/creatina-titanium-300g-max-titanium_0.png?v=638539811370570000" alt="Iso Whey">
            <h2 class="product-title">Creatina Max 300g</h2>
            <div class="rating">⭐⭐⭐⭐☆ (135)</div>
            <p class="old-price">R$ 57,00</p>
            <p class="price">R$ 48,90</p>
            <p class="pix-price">R$ 45,90</p>
            <p class="payment-info">à vista no PIX</p>
            <a href="#" class="btn-cad">VER PRODUTO</a>
        </div>

      
        <div class="product-card">
            <div class="discount">41% OFF</div>
            <img src="https://acdn.mitiendanube.com/stores/002/218/616/products/crea1-abd8ff086c388782e017183634041853-1024-1024.png" alt="Top Whey 3W">
            <h2 class="product-title">Creatina Dark Lab 300g</h2>
            <div class="rating">⭐⭐⭐⭐☆ (162)</div>
            <p class="old-price">R$ 83,00</p>
            <p class="price">R$ 78,85</p>
            <p class="pix-price">R$ 74,85</p>
            <p class="payment-info">à vista no PIX</p>
            <a href="#" class="btn-cad">VER PRODUTO</a>
        </div>

        <div class="product-card">
            <div class="discount">35% OFF</div>
            <img src="https://lojamaxtitanium.vtexassets.com/arquivos/ids/157992/100-Whey-Pote-900g-LinhaDino-CarameloMacchiato.png?v=638483764696830000" alt="Top Whey 3W">
            <h2 class="product-title">Whey Protein Max</h2>
            <div class="rating">⭐⭐⭐⭐⭐ (206)</div>
            <p class="old-price">R$ 126,44</p>
            <p class="price">R$ 120,00</p>
            <p class="pix-price">R$ 115,00</p>
            <p class="payment-info">à vista no PIX</p>
            <a href="#" class="btn-cad">VER PRODUTO</a>
        </div>

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


<div class="cards-container">

      <img src="https://imgproxy2.cdn-retailhub.com/rs:fit/q:75/w:1200/format:webp/plain/https://cdn-retailhub.com/max-titanium/476e5eb5-c992-4508-81de-60c8ef3192bb.jpg" alt="Benefícios da creatina" class="benefits-image">

    <div class="products-section">
      <div class="product">
        <img src="https://integralmedica.vtexassets.com/arquivos/ids/166741/165359-auto-auto.png?v=638563018421900000">
        <h3>Creatina Integral Médica 300g</h3>
        <p class="price-old">R$ 71,00</p>
        <p class="price-new">R$ 67,90</p>
        <p class="price-pix">R$ 66,90 à vista no PIX</p>
        <button id="ver-produto">Ver Produto</button>
      </div>
      <div class="product">
        <img src="https://acdn.mitiendanube.com/stores/002/218/616/products/creatine-500g-frente-e4c1b5f9d7588d780e17291691384703-1024-1024.png">
        <h3>Creatina Dark Lab 500g</h3>
        <p class="price-old">R$ 84,90</p>
        <p class="price-new">R$ 80,00</p>
        <p class="price-pix">R$ 78,65 à vista no PIX</p>
        <button id="ver-produto">Ver Produto</button>
      </div>
      <div class="product">
        <img src="https://www.gsuplementos.com.br/upload/produto/layout/70/big-creatina-creapure-growth-v2.webp">
        <h3>Creatina Growth 250g</h3>
        <p class="price-old">R$ 63,00</p>
        <p class="price-new">R$ 61,39</p>
        <p class="price-pix">R$ 58,32 à vista no PIX</p>
        <button id="ver-produto">Ver Produto</button>
      </div>
    </div>

  </div>


  <div class="cards-container">

    <div class="products-section">
      <div class="product">
        <img src="https://d2vq4s943o8cb4.cloudfront.net/Custom/Content/Products/50/62/5062966_100-whey-protein-max-titanium-4443_m1_637437988301914683.png">
        <h3>Whey Protein Max 900g s:Chocolate</h3>
        <p class="price-old">R$ 120,00</p>
        <p class="price-new">R$ 115,90</p>
        <p class="price-pix">R$ 100,00 à vista no PIX</p>
        <button id="ver-produto">Ver Produto</button>
      </div>
      <div class="product">
        <img src="https://cdn.awsli.com.br/2500x2500/2335/2335458/produto/282603079/100--whey-900g-baunilha-xfqgeajll1.png">
        <h3>Whey Protein Integral 900g s:Baunilha</h3>
        <p class="price-old">R$ 115,00</p>
        <p class="price-new">R$ 100,00</p>
        <p class="price-pix">R$ 95,99 à vista no PIX</p>
        <button id="ver-produto">Ver Produto</button>
      </div>
      <div class="product">
        <img src="{{asset('imgs/whey.png')}}">
        <h3>Whey Protein Max 900g s:Morango</h3>
        <p class="price-old">R$ 120,00</p>
        <p class="price-new">R$ 115,00</p>
        <p class="price-pix">R$ 100,00 à vista no PIX</p>
        <button id="ver-produto">Ver Produto</button>
      </div>
    </div>

    <img style="margin-left: 7vh;" src="https://imgproxy2.cdn-retailhub.com/rs:fit/q:75/w:1200/format:webp/plain/https://cdn-retailhub.com/max-titanium/6071340b-438e-4062-a236-946fea08e4bc.jpg" alt="Benefícios da creatina" class="benefits-image">

  </div>

  <a id="saiba-mais" href="{{asset('/saiba-mais')}}">Saiba Mais</a>


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
   
    const backToTopButton = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 200) {
            backToTopButton.style.display = 'block';
        } else {
            backToTopButton.style.display = 'none';
        }
    });

    backToTopButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>


<script>
    const messages = ["Bem-vindo(a) à PowerUp!", "Encontre os melhores suplementos!", "Cuide da sua saúde com a gente!"];
let index = 0;

function changeMessage() {
    document.getElementById('welcome-message').textContent = messages[index];
    index = (index + 1) % messages.length;
}

setInterval(changeMessage, 3000);
changeMessage();

</script>


@endsection