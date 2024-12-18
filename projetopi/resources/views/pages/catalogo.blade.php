@extends('layouts.prod')

@section ('title', ' Catalogo - PowerUp Suplementos')

@section('content')



    <script>
        let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

        function adicionarAoCarrinho(id, nome, preco) {
    const produto = { id, nome, preco };
    carrinho.push(produto);
    localStorage.setItem("carrinho", JSON.stringify(carrinho));
    atualizarContadorCarrinho();
}

        function atualizarContadorCarrinho() {
            document.getElementById("contador-carrinho").innerText = carrinho.length;
        }

        window.onload = atualizarContadorCarrinho;
    </script>

    <header>
        <div class="img-header">
            <img src="{{ asset('imgs/logo.png') }}">
        </div>
        <div class="h1-header">
            <h1>PowerUp Suplementos</h1>
        </div>
        <a class="ver-carrinho" href="{{ url('/carrinho') }}">Ver Carrinho <span id="contador-carrinho">0</span></a>

    </header>


    

    <main class="catalogo">
        <div class="produto">
            <img 
                src="https://cdn.awsli.com.br/600x450/968/968066/produto/36982274/creatina-max-titanium-300g-wokp9u5c7m.png"
                alt="Creatina Max 300g">
            <h2>Creatina Max 300g</h2>
            <p class="preco">R$ 83,00</p>
            <button onclick="adicionarAoCarrinho(1, 'Creatina Max 300g', 83)">Adicionar ao Carrinho</button>
        </div>
        </div>

        <div class="produto">
            <img src="https://www.jauserve.com.br/dw/image/v2/BFJL_PRD/on/demandware.static/-/Sites-jauserve-master/default/dw9fe43cef/7898944774254.png?sw=1800"
                alt="Whey Protein Max s:Chocolate 1kg">
            <h2>Whey Protein Max s:Chocolate 1kg</h2>
            <p class="preco">R$ 120,00</p>
            <button onclick="adicionarAoCarrinho(2, 'Whey Protein Max s:Chocolate 1kg', 120)">Adicionar ao
                Carrinho</button>
        </div>

        <div class="produto">
            <img src="https://www.jauserve.com.br/dw/image/v2/BFJL_PRD/on/demandware.static/-/Sites-jauserve-master/default/dw04c79d4b/7899941201804.png?sw=1800"
                alt="Whey Protein Max s:Cookies|Creme 1kg">
            <h2>Whey Protein Max s:Cookies 1kg</h2>
            <p class="preco">R$ 120,00</p>
            <button onclick="adicionarAoCarrinho(3, 'Whey Protein Max s:Cookies 1kg', 120)">Adicionar ao
                Carrinho</button>
        </div>
    </main>

<main class="catalogo">
 <div class="produto">
            <img src="https://www.gsuplementos.com.br/upload/produto/imagem/creatina-250g-creapure-growth-supplements-1.png"
                alt="Creatina Growth">
            <h2>Creatina Monohidratada Growth 300g</h2>
            <p class="preco">R$ 72,00</p>
            <button onclick="adicionarAoCarrinho(4, 'Creatina Monohidratada Growth 300g', 72)">Adicionar ao Carrinho</button>
        </div>

        <div class="produto">
            <img 
                src="https://www.gsuplementos.com.br/upload/produto/layout/71/creatina-monohidratada-100g-growth-supplements-v2.webp"
                alt="Creatina Growth">
            <h2>Creatina Monohidratada Growth 300g</h2>
            <p class="preco">R$ 72,00</p>
            <button onclick="adicionarAoCarrinho(5, 'Creatina Monohidratada Growth 300g', 72)">Adicionar ao Carrinho</button>
        </div>

            <div class="produto">
                <img 
                    src="https://www.gsuplementos.com.br/upload/produto/layout/174/vitamina-c-ultra-120-caps-growth-supplements.webp"
                    alt="Vitamina C Growth">
                <h2>Vitamina C Growth</h2>
                <p class="preco">R$ 83,00</p>
                <button onclick="adicionarAoCarrinho(6, 'Vitammina C Growth', 83)">Adicionar ao Carrinho</button>
            </div>
</main>

<main class="catalogo">
    <div class="produto">
        <img src="https://acdn.mitiendanube.com/stores/002/218/616/products/crea1-abd8ff086c388782e017183634041853-1024-1024.png"
            alt="Whey Protein Max s:Chocolate 1kg">
        <h2>Creatina Dark Lab 300g</h2>
        <p class="preco">R$ 57,00</p>
        <button onclick="adicionarAoCarrinho(4, 'Creatina Dark Lab 300g', 57)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://lojamaxtitanium.vtexassets.com/arquivos/ids/157992/100-Whey-Pote-900g-LinhaDino-CarameloMacchiato.png?v=638483764696830000"
            alt="Whey Protein Max s:Caramelo">
        <h2>Whey Protein Max s:Caramelo</h2>
        <p class="preco">R$ 126,44</p>
        <button onclick="adicionarAoCarrinho(5, 'Whey Protein Max s:Caramelo', 126.44)">Adicionar ao Carrinho</button>
    </div>

        <div class="produto">
            <img 
                src="https://www.gsuplementos.com.br/upload/produto/layout/1500/haze-hardcore-pre-workout-growth-v3.webp"
                alt="Pré Treino Growth">
            <h2>Pré Treino Growth</h2>
            <p class="preco">R$ 88,00</p>
            <button onclick="adicionarAoCarrinho(6, 'Pré Treino Growth', 88)">Adicionar ao Carrinho</button>
        </div>
</main>

<main class="catalogo">
    <div class="produto">
        <img 
            src="https://lojamaxtitanium.vtexassets.com/arquivos/ids/155851/Horus_FrutasVermelhas_300g.png?v=637898128760000000"
            alt="Pré Treino Max s:Frutas Vermelhas">
        <h2>Pré Treino Max s:Frutas Vermelhas</h2>
        <p class="preco">R$ 95,00</p>
        <button onclick="adicionarAoCarrinho(7, 'Pré Treino Max s:Frutas Vermelhas', 95)">Adicionar ao
            Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://images.tcdn.com.br/img/img_prod/1017799/horus_300g_max_titanium_65_1_8b70aeac8f3a273a9ad44e29693b04a6.png"
            alt="Pré Treino Max s:Limão Yuzu">
        <h2>Pré Treino Max s:Limão Yuzu</h2>
        <p class="preco">R$ 76,60</p>
        <button onclick="adicionarAoCarrinho(8, 'Pré Treino Max s:Limão Yuzu', 76.60)">Adicionar ao
            Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://www.gsuplementos.com.br/upload/produto/layout/1069/insanity-300g-growth-supplements-v4.webp"
            alt="Pré Treino Insanity Growth s:Limão 300g">
        <h2>Pré Treino Insanity Growth s:Limão 300g</h2>
        <p class="preco">R$ 99,00</p>
        <button onclick="adicionarAoCarrinho(9, 'Pré Treino Insanity Growth s:Limão 300g', 99)">Adicionar ao
            Carrinho</button>
    </div>
</main>

<main class="catalogo">
    <div class="produto">
        <img 
            src="https://acdn.mitiendanube.com/stores/002/218/616/products/venom-300g-9ea73d50790849f7f217186327181341-1024-1024.png"
            alt="Pré Treino Venom 300g">
        <h2>Pré Treino Venom 300g</h2>
        <p class="preco">R$ 99,95</p>
        <button onclick="adicionarAoCarrinho(10, 'Pré Treino Venom 300g', 99.95)">Adicionar ao
            Carrinho</button>
    </div>
    
    <div class="produto">
        <img 
            src="https://integralmedica.vtexassets.com/arquivos/ids/166741-800-auto?v=638563018421900000&width=800&height=auto&aspect=true"
            alt="Creatina IntegralMédica 300g">
        <h2>Creatina IntegralMédica 300g</h2>
        <p class="preco">R$ 71,00</p>
        <button onclick="adicionarAoCarrinho(11, 'Creatina IntegralMédica 300g', 71)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://novidadesaudavel.vteximg.com.br/arquivos/ids/159243-470-470%20/Whey-Protein-Concentrado-100--Puro-Baunilha-Integralmedica-Pote-907g.png?v=638422372476570000"
            alt="Whey Protein IntegralMédica s:Baunilha 900g">
        <h2>Whey Protein IntegralMédica s:Baunilha 900g</h2>
        <p class="preco">R$ 115,00</p>
        <button onclick="adicionarAoCarrinho(12, 'Whey Protein IntegralMédica s:Baunilha 900g', 115)">Adicionar ao
            Carrinho</button>
    </div>
</main>

<main class="catalogo">
    <div class="produto">
        <img 
            src="https://acdn.mitiendanube.com/stores/002/218/616/products/100-whey-900g-d5d55ba923699200ef17193468054520-480-0.png"
            alt="Whey Protein Dark Lab 900g">
        <h2>Whey Protein Dark Lab 900g</h2>
        <p class="preco">R$ 105,95</p>
        <button onclick="adicionarAoCarrinho(10, 'Whey Protein Dark Lab 900g', 105.95)">Adicionar ao
            Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://www.jauserve.com.br/dw/image/v2/BFJL_PRD/on/demandware.static/-/Sites-jauserve-master/default/dwe80728c5/7896438200890.png?sw=1800"
            alt="Creatina Probiotica 300g">
        <h2>Creatina Probiotica 300g</h2>
        <p class="preco">R$ 64,00</p>
        <button onclick="adicionarAoCarrinho(11, 'Creatina Probiotica 300g', 64)">Adicionar ao Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://cdn.awsli.com.br/300x300/250/250305/produto/300619857/insane-clown---demons-01-viaefzua6l-ty3c4akwxw.png"
            alt="Pré Treino Insany Clow">
        <h2>Pré Treino Insany Clow</h2>
        <p class="preco">R$ 124,00</p>
        <button onclick="adicionarAoCarrinho(12, 'Pré Treino Insany Clow', 124)">Adicionar ao
            Carrinho</button>
    </div>
</main>

<main class="catalogo">
    <div class="produto">
        <img 
            src="https://images.tcdn.com.br/img/img_prod/920697/insane_clown_350g_demons_lab_1905_1_f298e862276fa17d9bfb9cf6a6d8c1f4.png"
            alt="Pré Treino Insany Clow">
        <h2>Pré Treino Insany Clow</h2>
        <p class="preco">R$ 124,00</p>
        <button onclick="adicionarAoCarrinho(13, 'Pré Treino Insany Clow', 124)">Adicionar ao
            Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://images.tcdn.com.br/img/img_prod/1014635/insane_clown_350g_blue_vanilla_demons_lab_937_1_f6b7a913b33be3d856efdaca8eb89cd3.png"
            alt="Pré Treino Insany Clow">
        <h2>Pré Treino Insany Clow</h2>
        <p class="preco">R$ 124,00</p>
        <button onclick="adicionarAoCarrinho(14, 'Pré Treino Insany Clow', 124)">Adicionar ao
            Carrinho</button>
    </div>

    <div class="produto">
        <img 
            src="https://acdn.mitiendanube.com/stores/002/757/372/products/752161c32fcde5592cbf994259c143a9-6fe9e93aee14e3bfec17083397145190-480-0.png"
            alt="Pré Treino Insany Clow">
        <h2>Pré Treino Insany Clow</h2>
        <p class="preco">R$ 124,00</p>
        <button onclick="adicionarAoCarrinho(15, 'Pré Treino Insany Clow', 124)">Adicionar ao
            Carrinho</button>
    </div>
</main>
        



@endsection