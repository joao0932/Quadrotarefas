<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Quadro de Tarefas')</title>

    <!-- Link para o CSS Global -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Navbar ou cabeçalho (se necessário) -->
    <header>
        <nav>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/tarefas">Mostrar Tarefas</a></li>
                <li><a href="/tarefas/create">Adicionar Tarefa</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content') <!-- O conteúdo da página será inserido aqui -->
    </div>

    <!-- Rodapé ou outras informações -->
    <footer>
        <p>&copy; 2024 Quadro de Tarefas. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
