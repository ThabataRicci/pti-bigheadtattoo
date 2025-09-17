<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?> | BIG HEAD TATTOO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="p-3">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand logo-cabecalho" href="index.php">
                <img src="imagens/logo.png" alt="Logo Big Head Tattoo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfólio</a></li>
                    <li class="nav-item"><a class="nav-link" href="artista.php">O Artista</a></li>
                    
                    <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'tatuador'): ?>
                        <li class="nav-item"><a class="nav-link" href="dashboard-tatuador.php">Meu Painel</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="agenda.php">Agenda</a></li>
                    <?php endif; ?>
                </ul>

                <ul class="navbar-nav d-flex flex-row align-items-center">
                    <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                        <li class="nav-item">
                            <a class="nav-link me-2" href="configuracoes.php" title="Configurações">
                                <i class="bi bi-gear-fill fs-5"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Sair</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<?php if (isset($_SESSION['loggedin']) && $_SESSION['user_role'] == 'cliente'): ?>
    <div class="submenu-cliente">
        <div class="container d-flex justify-content-center">
            <a href="dashboard-cliente.php">Painel Inicial</a>
            <a href="agendamentos-cliente.php">Agendamentos</a>
        </div>
    </div>
<?php endif; ?>