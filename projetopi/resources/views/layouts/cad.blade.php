<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('imgs/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PowerUp Suplementos')</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>
<body>
 

    <main>
        @yield('content')
    </main>


    <script>
    function salvarDadosCadastro(event) {
        event.preventDefault(); 

        const usuario = document.getElementById('usuario').value.trim();
        const email = document.getElementById('email').value.trim();
        const senha = document.getElementById('senha').value.trim();
        const confirmarSenha = document.getElementById('confirmarSenha').value.trim();

        if (!usuario || !email || !senha || !confirmarSenha) {
            alert('Por favor, preencha todos os campos.');
            return;
        }

        if (senha !== confirmarSenha) {
            alert('As senhas não coincidem.');
            return;
        }

        
        localStorage.setItem('email', email);
        localStorage.setItem('senha', senha);

       
        window.location.href = "{{ url('/login') }}";
    }
</script>

</body>
</html>