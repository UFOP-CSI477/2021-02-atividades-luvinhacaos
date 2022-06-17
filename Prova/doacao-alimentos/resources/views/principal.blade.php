<!DOCTYPE html>
<html>

<head>
    <meta charset="UFT-8">
    <title>Controle de Doação de Alimentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/shared.css">
    <link rel="stylesheet" href="/css/principal.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f07396255a.js" crossorigin="anonymous"></script>

    @yield('links')
</head>

<body>
    <div class="layout">
        <div class="sidebar">
            <div class="sidebar-container container-titulo">
                <h1>Controle de Doações</h1>
            </div>
            <div class="sidebar-container2 container-conteudo d-flex flex-column justify-content-between">
                <div>
                    <nav>
                        <li><a href="/geral">Área Geral</a></li>
                        <li><a href="#">Área Administrativa</a></li>
                        <li><a href="/coletas" class="px-5">Coletas</a></li>
                        <li><a href="/entidades" class="px-5">Entidades</a></li>
                        <li><a href="/itens" class="px-5">Itens</a></li>
                    </nav>
                </div>
                <div>
                    <nav>
                        @if (!session('id'))
                            <li><a href="/login">Fazer Login</a></li>
                        @else
                            <li><a href="/desconectar">Sair</a></li>
                        @endif
                    </nav>
                </div>
            </div>
        </div>
        <div class="main">
            @yield('body')
        </div>
    </div>
</body>
</html>
