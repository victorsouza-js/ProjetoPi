<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <div class="nav-bar">
            <img src="{{ asset('assets/imgs/logo.png') }}"> 
            <h2>PowerUp</h2>
        </div>
        <a href="{{ url('/') }}" class="navbar-link">Home</a> 
        <a href="{{ url('/contato') }}" class="navbar-link">Contato</a> 
        <a href="{{ url('/cadastro') }}" class="navbar-link">Cadastrar-se</a> 
        <a href="{{ url('/login') }}" class="navbar-link">Logar</a>
        <form class="d-flex" role="search">
            <input id="searchInput" class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
        </form>
    </div>
</nav>