@extends('layouts.admin')

@section ('title', ' ADMIN PAGE - PowerUp Suplementos')

@section('content')

<div class="admin-container">
      
       <lottie-player
            src="{{ asset('animations/img.json') }}"
            background="transparent"
            speed="1"
            style="width: 400px; height: 300px; margin-top: 11vh;"
            loop
            autoplay>
        </lottie-player>
        
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