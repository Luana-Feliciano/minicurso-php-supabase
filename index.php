<?php
require 'config.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'login';

$user_is_logged_in = isset($_SESSION['user']);

// if (!$user_is_logged_in && $page !== 'login' && $page !== 'cadastro') {
//     $page = 'login';
// }

// if ($user_is_logged_in && $page === 'login') {
//     $page = 'dashboard';
// }

include 'views/partials/header.php';//cabecalho

switch ($page) {
    case 'dashboard':
        $pageTitle = 'Dashboard de Produtos';
        include 'views/dashboard.php';
        break;

    case 'cadastrar_produto':
        $pageTitle = 'Novo Produto';
        include 'views/cadastrar_produto.php';
        break;
    
    case 'cadastro':
        $pageTitle = 'Cadastro';
        include 'views/cadastro.php';
        break;
    
     case 'lista_usuario':
        $pageTitle = 'Listagem de Usuários';
        include 'views/lista_usuario.php';
        break;

    case 'login':
    default:
        $pageTitle = 'Login';
        include 'views/login.php';
        break;
}

include 'views/partials/footer.php';