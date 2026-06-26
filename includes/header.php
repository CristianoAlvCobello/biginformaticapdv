<?php
    $arquivo = basename($_SERVER['PHP_SELF']);
    if (!isset($base)) {
        $host = $_SERVER['HTTP_HOST'];
        
        // Se for produção, usar raiz do domínio
        if (strpos($host, 'biginformaticapdv.com.br') !== false) {
            $base = '';
        } else {
            // Se for local, usar /biginformaticapdv
            $base = '/biginformaticapdv';
        }
    }
?>

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
    <meta property="og:url" content="https://biginformaticapdv.com.br">
    <meta property="og:image" content="https://biginformaticapdv.com.br/assets/favicon-32x32.png">
    <meta property="og:type" content="article">
    <meta property="og:description" content="Especializada em automação comercial e assistência técnica, a Big Informática fornece ao mercado soluções inovadoras em software para pequenas, médias e grandes empresas, além de um excelente suporte.">
    <meta property="og:site_name" content="Big Informática Sr">
    <meta property="og:locale" content="pt_BR">
    <meta name="description" content="<?php echo $descricao?>">
    <!--End Seo-->
    <!--FavIcon-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $base; ?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $base; ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $base; ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $base; ?>/assets/site.webmanifest">
    <!--End FavIcon-->
    <title>Big Informática Pdv</title>
    <!--Links dinâmicos de CSS-->
    <link rel="stylesheet" href="<?php echo $base; ?>/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="overflow-x-hidden bg-white text-gray-900 transition-colors duration-300 dark:bg-slate-950 dark:text-slate-100">
    <header class="sticky top-0 z-50 bg-white shadow-xl transition-all duration-300 px-5 dark:bg-slate-950 dark:shadow-black/20">
        <nav>
            <div class="container mx-auto">
                <div class="flex justify-between items-center py-4">
                    <!-- Logo -->
                    <a href="<?php echo $base; ?>/index.php" class="flex items-center">
                        <img class="w-60 h-auto logo-color" src="<?php echo $base; ?>/images/logo_biginformatica-color-1.svg" alt="Big Informática Logo">
                        <img class="w-60 h-auto logo-white" src="<?php echo $base; ?>/images/logo_biginformatica-white.svg" alt="Big Informática Logo White">
                    </a>

                    <div class="hidden md:flex items-center gap-4">
                        <!-- Menu desktop -->
                        <div class="flex space-x-8 text-lg">
                            <a href="<?php echo $base; ?>/index.php#inicio" class="font-semibold nav-link">INÍCIO</a>
                            <a href="<?php echo $base; ?>/index.php#recursos" class="font-semibold nav-link">RECURSOS</a>
                            <a href="<?php echo $base; ?>/index.php#catalogo" class="font-semibold nav-link">CATALOGO ONLINE</a>
                            <a href="<?php echo $base; ?>/index.php#maquininhas" class="font-semibold nav-link">MAQUININHAS</a>
                            <a href="<?php echo $base; ?>/tutoriais.php" class="font-semibold nav-link">TUTORIAIS</a>
                        </div>
                        <!-- <button id="theme-toggle" data-theme-toggle class="mx-5 inline-flex items-center justify-center rounded-full border border-gray-200 bg-white px-3 py-2 text-gray-800 shadow-lg transition hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100 dark:hover:bg-slate-800" aria-label="Alternar modo escuro">
                            <i id="theme-icon" class="bi bi-moon-fill text-xl"></i>
                        </button> -->
                    </div>

                    <!-- Botão mobile -->
                    <button class="md:hidden transition-transform duration-300" id="mobile-menu-button">
                        <i id="menu-icon" class="bi bi-list text-4xl"></i>
                    </button>
                </div>

                <!-- Menu Mobile -->
                <div id="mobile-menu" class="md:hidden max-h-0 overflow-hidden opacity-0 transform scale-y-95 transition-all duration-300 ease-in-out bg-white dark:bg-slate-950">
                    <div class="flex flex-col space-y-2 px-4 py-2 text-xl">
                        <a href="<?php echo $base; ?>/index.php#inicio" class="font-semibold nav-link">INÍCIO</a>
                        <a href="<?php echo $base; ?>/index.php#recursos" class="font-semibold nav-link">RECURSOS</a>
                        <a href="<?php echo $base; ?>/index.php#catalogo" class="font-semibold nav-link">CATALOGO ONLINE</a>
                        <a href="<?php echo $base; ?>/index.php#maquininhas" class="font-semibold nav-link">MAQUININHAS</a>
                        <a href="<?php echo $base; ?>/tutoriais.php" class="font-semibold nav-link">TUTORIAIS</a>
                        <!-- <button id="theme-toggle-mobile" data-theme-toggle class="mt-4 inline-flex items-center justify-center rounded-full border border-gray-200 bg-white px-3 py-2 text-gray-800 shadow-sm transition hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-red-500 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-100 dark:hover:bg-slate-800" aria-label="Alternar modo escuro">
                            <i id="theme-icon-mobile" class="bi bi-moon-fill text-xl"></i>
                            <span class="ml-2 text-base">Alterar Tema</span>
                        </button> -->
                    </div>
                </div>
            </div>
        </nav>
    </header>