@extends('layouts.car')

@section('title', 'Seu Carrinho - PowerUp Suplementos')

@section('content')

    <script>
        function exibirCarrinho() {
            const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
            const listaCarrinho = document.getElementById("lista-carrinho");
            let total = 0;

            listaCarrinho.innerHTML = "";

            carrinho.forEach(produto => {
                const item = document.createElement("li");
                item.classList.add("item-carrinho");

                item.innerHTML = `
                    <span>${produto.nome}</span>
                    <span>R$ ${produto.preco.toFixed(2)}</span>
                `;

                listaCarrinho.appendChild(item);
                total += produto.preco;
            });

            document.getElementById("total").innerText = `Total: R$ ${total.toFixed(2)}`;
        }

        function limparCarrinho() {
            localStorage.removeItem("carrinho");
            exibirCarrinho();
        }

        window.onload = exibirCarrinho;

        function finalizarCompra() {
    const carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    if (carrinho.length === 0) {
        alert("O carrinho está vazio. Adicione itens antes de finalizar a compra.");
        return;
    }
    window.location.href = "../pages/finalizar-compra.html";
}


    </script>

    <div class="nav-carrinho">
        <header>
            <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/5087/5087784.png">
            <div class="volta-catalogo">
                <a href="{{url('/catalogo')}}">Voltar ao Catálogo</a> 
            </div>
        </header>
    
        <main>
            <ul id="lista-carrinho"></ul>
            <p id="total"></p>
            <button onclick="limparCarrinho()">Limpar Carrinho</button>
            <button onclick="finalizarCompra()">Finalizar Compra</button>
        </main>
    </div>
    
    <script>
        function finalizarCompra() {
            window.location.href = "{{asset('/finalizar')}}";
        }
    </script>


@endsection