<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pós-venda Supabase | <?php echo $pageTitle ?? 'Início'; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">
        <i class="bi bi-box-seam"></i> Pós-Venda
    </a>
    <?php if (isset($_SESSION['user'])): ?>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </a>
            </li>
        </ul>
    <?php endif; ?>
  </div>
</nav>

<main class="container">