@extends('layouts.cad')

@section('title', 'Cadastro - PowerUp Suplementos')

@section('content')


    <div class="nav-cad">
        
        <div class="cad">
        <img src="{{ asset('imgs/logo.png') }}">
        </div>
        
        <div class="form-cad">
        <form id="cadastroForm" onsubmit="salvarDadosCadastro(event)">
            <input type="text" id="usuario" placeholder="Usuário" required>
            <input type="email" id="email" placeholder="E-mail" required>
            <input type="password" id="senha" placeholder="Senha" required>
            <input type="password" id="confirmarSenha" placeholder="Confirmar Senha" required>
            <a href="">Esqueceu sua senha?</a>
            <button type="submit" id="concluir">Concluir Cadastro</button>
            </form>
        </div>
    </div>



@endsection