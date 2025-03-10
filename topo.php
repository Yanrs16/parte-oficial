<?php
// topo.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XP dos Sabores Hambúrgueria</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../site/pagina.css">
    <link rel="shortcut icon" href="../img/logo.jpeg" type="image/x-icon">
    <script defer src="carousel.js"></script>
</head>
<body class="bg-light">

<header class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <img src="../img/logo.jpeg" alt="Logo" class="me-3" style="height: 60px;">
            <h1 class="h3 mb-0">XP dos Sabores Hambúrgueria</h1>
        </div>
        <div>
            <a href="../area cadastro/login.html" class="btn btn-outline-light me-2">Entrar</a>
            <a href="carrinho.html" class="btn btn-warning">🛒 Carrinho</a>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="../site/pagina_inicial.html">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="../site/cardapio.html">Cardápio</a></li>
                <li class="nav-item"><a class="nav-link" href="../site/promocoes.html">Promoções</a></li>
                <li class="nav-item"><a class="nav-link" href="../site/pedidos.html">Pedidos</a></li>
                <li class="nav-item"><a class="nav-link" href="https://maps.app.goo.gl/B6CgcHHWp972QABZ7">Localização</a></li>
            </ul>
        </div>
    </div>
</nav>
