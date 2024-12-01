@extends('layouts.admin')

@section ('title', ' ADMIN PAGE - PowerUp Suplementos')

@section('content')

<div class="admin-container">
       <div class="img-admin">
        <img src="{{ asset('imgs/logo.png') }}">
       </div>
       <div class="container">
        <form>
            <h1>Login</h1>
            <input type="text" placeholder="Usuario">
            <input type="text" placeholder="ID Cadastro">
            <input type="password" placeholder="Senha">
            <a href="">Esqueceu a senha?</a>
            <button type="submit">Entrar</button>
        </form>
       </div>
    </div>

@endsection