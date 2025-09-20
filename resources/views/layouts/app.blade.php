<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="https://www.shutterstock.com/shutterstock/photos/2372798331/display_1500/stock-vector-vector-illustration-of-vulture-silhouette-2372798331.jpg">
    <title>@yield('title', 'Minha Aplicação')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

    <header>
        <h1 style="font-size: 50px;">Precisa de dinheiro fácil? chama o urubu do pix!</h1>
    </header>

    <main>
        @yield('content_body')
    </main>

    <footer>
        <p>&copy; 2025 - Todos os direitos reservados. Urubu enterprise LTDA.</p>
    </footer>

</body>
</html>
