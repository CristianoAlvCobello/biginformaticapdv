<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Seo-->
    <meta name="author" content="Big Informática Pdv">
    <meta name="keywords" content="sistema de gestão,big informática,automação comercial,suporte,pdv,gestão comercial,revenda software,sistema de vendas,cupom fiscal,nota fiscal eletronica,nfe,nfce,sat,restaurante,sistema para restaurante,controle de estoque,speed, otimizar gestao empresa, comercio em geral, sistema comercial, pet shop, varejista, mercado e açougue">
    <meta itemprop="name" content="Big Informática Pdv">
    <meta property="og:title" content="Big Informática Pdv"> 
    <meta property="og:url" content="https://biginformaticapdv.com.br/<?php echo $arquivo?>">
    <meta property="og:image" content="https://biginformaticapdv.com.br/images/logo-inteira.jpg">
    <meta property="og:type" content="article">
    <meta property="og:description" content="Especializada em automação comercial e assistência técnica, a Big Informática fornece ao mercado soluções inovadoras em software para pequenas, médias e grandes empresas, além de um excelente suporte.">
    <meta property="og:site_name" content="Big Informática Sr">
    <meta property="og:locale" content="pt_BR">
    <meta name="description" content="<?php echo $descricao?>">
    <!--End Seo-->
    <!--FavIcon-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">
    <!--End FavIcon-->
    <title>Big Informática Pdv</title>
    <!--Links dinâmicos de CSS-->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="overflow-x-hidden">
    <header class="sticky top-0 z-50 bg-white shadow-xl transition-all duration-300">
        <nav>
            <div class="container mx-auto">
                <div class="flex justify-around items-center py-4">
                    <!-- Logo -->
                    <a href="index.php" class="flex items-center">
                        <img class="w-60" src="images/logo-inteira.png" alt="Big Informática Logo">
                    </a>

                    <!-- Menu desktop -->
                    <div class="hidden md:flex space-x-8 text-lg">
                        <a href="#inicio" class="font-semibold nav-link text-red-800">INÍCIO</a>
                        <a href="#recursos" class="font-semibold nav-link">RECURSOS</a>
                        <a href="#catalogo" class="font-semibold nav-link">CATALOGO ONLINE</a>
                        <a href="#maquininhas" class="font-semibold nav-link">MAQUININHAS</a>
                    </div>

                    <!-- Botão mobile -->
                    <button class="md:hidden transition-transform duration-300" id="mobile-menu-button">
                        <i id="menu-icon" class="bi bi-list text-4xl"></i>
                    </button>
                </div>

                <!-- Menu Mobile -->
                <div id="mobile-menu" class="md:hidden max-h-0 overflow-hidden opacity-0 transform scale-y-95 transition-all duration-300 ease-in-out">
                    <div class="flex flex-col space-y-2 px-4 py-2 text-xl">
                        <a href="#inicio" class="font-semibold nav-link text-red-800">INÍCIO</a>
                        <a href="#recursos" class="font-semibold nav-link">RECURSOS</a>
                        <a href="#catalogo" class="font-semibold nav-link">CATALOGO ONLINE</a>
                        <a href="#maquininhas" class="font-semibold nav-link">MAQUININHAS</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>