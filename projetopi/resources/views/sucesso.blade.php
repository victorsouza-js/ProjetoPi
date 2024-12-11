@extends('layouts.app')

@section('title', 'Sucesso! - PowerUp Suplementos')

@section('content')
<div class="success-message">
  <h2>Cadastro finalizado com sucesso!</h2>
  <p>Seja bem-vindo(a) à PowerUp Suplementos!</p>
  <div class="voltar">
  <a href="{{ url('/login') }}">Voltar para a página de login</a>
  </div>
</div>
@endsection