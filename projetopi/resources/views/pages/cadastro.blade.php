@extends('layouts.cad')

@section('title', 'Cadastro - PowerUp Suplementos')

@section('content')
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="../assets/imgs/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>
<body>
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