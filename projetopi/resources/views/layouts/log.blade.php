<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('imgs/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PowerUp Suplementos')</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
 

    <main>
        @yield('content')
    </main>


    <script>
   
    window.onload = function () {
        const email = localStorage.getItem('email');
        const senha = localStorage.getItem('senha');

        if (email) {
            document.getElementById('email').value = email;
        }

        if (senha) {
            document.getElementById('senha').value = senha;
        }
    };

    function verificarLogin() {
        const email = document.getElementById('email').value.trim();
        const senha = document.getElementById('senha').value.trim();

        if (!email || !senha) {
            alert('Por favor, preencha todos os campos.');
            return false;
        }

       
        const emailArmazenado = localStorage.getItem('email');
        const senhaArmazenada = localStorage.getItem('senha');

        if (email === emailArmazenado && senha === senhaArmazenada) {
            alert('Login bem-sucedido!');
            return true; 
        } else {
            alert('E-mail ou senha incorretos.');
            return false;
        }
    }
</script>

</body>
</html>