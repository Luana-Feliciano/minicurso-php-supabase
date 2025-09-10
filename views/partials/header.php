<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pós-venda Supabase</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="assets/logo-telecontrol.png" alt="Telecontrol" height="35" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <?php if (isset($_SESSION['user'])): ?>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?page=cadastrar_produto">Produtos</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?page=lista_usuario">Usuarios</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <span class="fw-bold">
                        Bem vindo <?= $_SESSION['username'] ?? ''; ?>
                    </span>
                    <a class="nav-link" href="index.php?action=logout"> <i class="bi bi-box-arrow-right"></i> Sair </a>
                </div>
            <?php endif; ?>
        </div>
    </nav>

    <main class="container py-5 px-4">