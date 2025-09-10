<?php
session_start();

require_once 'config.php';
include 'views/partials/header.php';//cabecalho

$page = isset($_GET['page']) ? $_GET['page'] : 'login';

$user_is_logged_in = isset($_SESSION['user']);

if (!$user_is_logged_in && $page !== 'login' && $page !== 'cadastro') {
    $page = 'login';
}

if ($user_is_logged_in && ($page === 'login' || $page === 'cadastro') && !isset($_GET['editUser'])) {
    $page = 'lista_usuario';
}

switch ($page) {
    case 'cadastrar_produto':
        include 'views/cadastrar_produto.php';
        break;
    
    case 'cadastro':
        include 'views/cadastro.php';
        break;
    
    case 'lista_usuario':
        include 'views/lista_usuario.php';
        break;

    case 'login':
    default:
        include 'views/login.php';
        break;
}

include 'views/partials/footer.php';