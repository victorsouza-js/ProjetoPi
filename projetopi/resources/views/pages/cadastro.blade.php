@extends('layouts.cad')

@section('title', 'Cadastro - PowerUp Suplementos')

@section('content')


    <div class="nav-cad">
        <form>
            <img src="{{ asset('imgs/logo.png') }}" alt="">
            <input type="text" placeholder="Usuário">
            <input type="email" placeholder="E-mail">
            <input type="password" placeholder="Senha">
            <input type="password" placeholder="Confirmar Senha">
            <button type="submit">Concluir Cadastro</button>
        </form>
    </div>
</body>
</html>

@endsection