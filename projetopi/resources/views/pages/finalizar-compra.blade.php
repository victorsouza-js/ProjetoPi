@extends('layouts.finalize')

@section('title', 'Finalizar Compra - PowerUp Suplementos')

@section('content')


<script>

function exibirResumoCarrinho() {
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    const resumo = document.getElementById("lista-carrinho");
    let total = 0;

    resumo.innerHTML = "";
    carrinho.forEach(produto => {
        const subtotal = produto.preco * produto.quantidade;
        const item = document.createElement("li");
        item.innerText = `${produto.nome} - Quantidade: ${produto.quantidade} - Subtotal: R$ ${produto.preco.toFixed(2)}`;
        resumo.appendChild(item);
        total += produto.preco;
    });

    const totalElement = document.getElementById("total");
    totalElement.innerText = `Total: R$ ${total.toFixed(2)}`;

    document.getElementById("valor-pix").innerText = `R$ ${total.toFixed(2)}`;
}

function escolherPagamento(metodo) {
    const detalhesPix = document.getElementById("detalhes-pix");
    const detalhesBoleto = document.getElementById("detalhes-boleto");

    if (metodo === "pix") {
        detalhesPix.style.display = "block";
        detalhesBoleto.style.display = "none";
    } else if (metodo === "boleto") {
        detalhesPix.style.display = "none";
        detalhesBoleto.style.display = "block";
    }
}

window.onload = exibirResumoCarrinho;
</script>


<header>
        <h1>Finalizar Compra</h1>
        <a href="{{asset('/carrinho')}}">Voltar ao Seu Carrinho</a>
    </header>

    <main>
        <h2>Resumo da Compra</h2>
        <ul id="lista-carrinho"></ul>
        <p id="total"></p>

        <h2>Escolha o Método de Pagamento</h2>
        <button onclick="escolherPagamento('pix')">Pagar com Pix</button>
        <button onclick="escolherPagamento('boleto')">Pagar com Boleto</button>

        <div id="detalhes-pix" style="display: none;">
            <h3>Pagamento via Pix</h3>
            <p>Escaneie o QR Code abaixo com seu aplicativo bancário:</p>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Link_pra_pagina_principal_da_Wikipedia-PT_em_codigo_QR_b.svg/1200px-Link_pra_pagina_principal_da_Wikipedia-PT_em_codigo_QR_b.svg.png" alt="QR Code Pix" style="width: 100px;">
            <p>Total a pagar: <span id="valor-pix"></span></p>
        </div>

        <div id="detalhes-boleto" style="display: none;">
            <h3>Pagamento via Boleto</h3>
            <p>Geramos um boleto para você realizar o pagamento.</p>
            <button onclick="gerarBoleto()">Gerar Boleto</button>
        </div>

        <button id="finalizar-compra" style="margin-top: 20px;" onclick="finalizarCompra()">Finalizar Compra</button>

    </main>

    <script>
        function gerarBoleto() {
            alert("Boleto gerado com sucesso! Código de barras: 1234 5678 9012 3456 7890");
        }
    </script>

    <script>
        function finalizarCompra() {
            alert("Compra finalizada com sucesso!");
        }
    </script>

    <script>
        function finalizarCompra() {
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    
    if (carrinho.length === 0) {
        alert("Seu carrinho está vazio. Adicione itens antes de finalizar a compra.");
        return;
    }

    alert("Compra finalizada com sucesso! Obrigado por comprar na PowerUp Suplementos.");

    localStorage.removeItem("carrinho");
    window.location.href = "{{asset('/')}}"; 
}

    </script>


@endsection