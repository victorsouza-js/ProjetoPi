@extends('layouts.cont')

@section('title', 'Contato - PowerUp Suplementos')

@section('content')


    
<div class="div-contato">
    <h2>Contate-nos</h2>
    <form action="/enviar" method="post">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
     <div class="button-enviar">
      <button type="submit">Enviar</button>
     </div>
    </form>
    <div class="redes-sociais">
      <p>Ou nos encontre nas redes sociais:</p>
      <a href="https://facebook.com" target="_blank">Facebook</a> |
      <a href="https://instagram.com" target="_blank">Instagram</a> |
      <a href="https://linkedin.com" target="_blank">Twitter</a>
    </div>
</div>



@endsection