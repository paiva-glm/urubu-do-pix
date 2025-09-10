<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <h1 style="font-size: 50px;">Precisa de dinheiro fácil? chama o urubu do pix!</h1>
    </header>

    <main>
        @yield('content_body')
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados.</p>
    </footer>

</body>
</html>
