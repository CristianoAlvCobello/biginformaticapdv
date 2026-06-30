<?php   
    include '../../includes/header.php';
    $arquivo = 'tutoriais';
?>
<div class="bg-gray-100 dark:bg-slate-950">
    <div class="max-w-5xl mx-auto px-6 py-8 dark:text-white rounded-md">

        <!-- Botão Voltar -->
        <button
            onclick="history.back()"
            class="inline-flex text-lg items-center gap-2 text-red-500 hover:text-red-600 font-medium transition mb-8 dark:text-red-300 dark:hover:text-red-400 cursor-pointer"
        aria-label="Voltar"
        >
    < Voltar
        </button>

        <!-- Título -->
        <h1 class="text-4xl font-bold mb-3">
            Excluir venda
        </h1>

        <!-- Descrição -->
        <p class="text-xl max-w-4xl mb-12">
            Neste tutorial veja como excluir uma venda realizada no Caixa do Navi Vendas.
        </p>

        <!-- Passo 1 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                1
            </div>

            <p class="text-xl">
                Na tela inicial do Navi Vendas, acesse o módulo <strong>Caixa</strong>.
            </p>
        </div>

        <!-- Imagem passo 1 -->
        <div class="overflow-hidden mb-8">
            <img
                src="images/5.png"
                alt="Tela de configurações"
                class="w-100 rounded-xl object-cover border-2 shadow-lg dark:border-slate-700 dark:shadow-black/40"
            >
        </div>

      <!-- Passo 2 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                2
            </div>

            <p class="text-xl">
                Clique no ícone do menu e escolha a opção <Strong>Buscar negociações</Strong>.
            </p>
        </div>
        <!-- Obs sobre passo 2 -->
        <div class="bg-white dark:bg-slate-800 border-l-4 border-red-600 pl-5 py-3 my-8">
            <p class="text-gray-700 text-lg leading-relaxed">
                O sistema mostrará as negociações do dia. É possível aprimorar a busca usando o filtro na lateral.
            </p>
        </div>
        
       <!-- Imagem passo 2 -->
        <div class="overflow-hidden mb-8">
            <img
                src="images/6.gif"
                alt="Tela de configurações"
                class="w-100 rounded-xl object-cover border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40"
            >
        </div>

        <!-- Passo 3 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                3
            </div>

            <p class="text-xl">
                Selecione a negociação que deseja excluir.
            </p>
        </div>
        <!-- Imagem passo 3 -->
        <div class="overflow-hidden mb-8">
            <img
                src="images/6.png"
                alt="Tela de configurações"
                class="rounded-xl object-cover border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40"
            >
        </div>

        <!-- Passo 4 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                4
            </div>

            <p class="text-xl">
                Clique no ícone do menu lateral direito e escolha a opção Excluir.
            </p>
        </div>

        <!-- Passo 5 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                5
            </div>

            <p class="text-xl">
                Confirme clicando novamente em <strong>Excluir</strong>.
            </p>
        </div>

        <!-- Imagem passo 5 -->
        <figure class="overflow-hidden mb-8">
            <img
                src="images/7.gif"
                alt="Tela de configurações"
                class="rounded-xl object-cover border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40"
            >
            <figcaption>A negociação aparecerá como <strong>Cancelada</strong></figcaption>
        </figure>

        <!-- Obs sobre fim do tutorial -->
        <div class="bg-white dark:bg-slate-800 border-l-4 border-red-600 pl-5 py-3 my-8">
            <p class="text-gray-700 text-lg leading-relaxed">
                Caso a venda com NFC-e emitida seja excluída em aproximadamente 30 minutos após a emissão, a nota será cancelada na Sefaz.
            </p>
        </div>
    </div>
</div>

<?php 
    include '../../includes/footer.php' 
?>