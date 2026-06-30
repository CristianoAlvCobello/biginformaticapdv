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
            Configurar abertura de gaveta
        </h1>

        <!-- Descrição -->
        <p class="text-xl max-w-4xl mb-12">
            Para utilizar gaveta de dinheiro é necessário que ela
            esteja conectada a uma impressora via cabo <br>RJ-35, pois o comando de
            abertura é feito através da impressora.
        </p>

        <!-- Passo 1 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                1
            </div>

            <p class="text-xl">
                Na tela inicial, acesse o módulo
                <strong>Configurações.</strong>
            </p>
        </div>

        <!-- Imagem passo 1 -->
        <div class="rounded-xl overflow-hidden border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40 mb-8">
            <img
                src="images/1.png"
                alt="Tela de configurações"
                class="w-full object-cover"
            >
        </div>

      <!-- Passo 2 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                2
            </div>

            <p class="text-xl">
                Acesse a opção
                <strong>Impressora.</strong>
            </p>
        </div>

       <!-- Imagem passo 2 -->
        <div class="rounded-xl overflow-hidden border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40 mb-8">
            <img
                src="images/2.png"
                alt="Tela de configurações"
                class="w-full object-cover"
            >
        </div>
        <!-- Obs sobre passo 2 -->
        <div class="bg-white dark:bg-slate-800 border-l-4 border-red-600 pl-5 py-3 my-8">
            <p class="text-gray-700 text-lg leading-relaxed">
                Caso a impressora não esteja configurada, ative a opção
                <strong>Habilitar impressão</strong> e configure de acordo com a sua
                impressora.
                <a
                    href="#"
                    class="text-red-500 hover:text-red-600 font-medium underline underline-offset-2"
                >
                    Clique aqui
                </a>
                para conferir o tutorial de impressão.
            </p>
        </div>

        <!-- Passo 3 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                3
            </div>

            <p class="text-xl">
                Habilite a opção
                <strong>Habilitar gaveta de dinheiro.</strong>
            </p>
        </div>
        <!-- Imagem passo 3 -->
        <div class="rounded-xl overflow-hidden border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40 mb-8">
            <img
                src="images/3.png"
                alt="Tela de configurações"
                class="w-full object-cover"
            >
        </div>

        <!-- Passo 4 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                4
            </div>

            <p class="text-xl">
                Selecione o modelo da sua impressora.
            </p>
        </div>
        <!-- Imagem passo 4 -->
        <div class="rounded-xl overflow-hidden border-2 border-gray-600 shadow-lg dark:border-slate-700 dark:shadow-black/40 mb-8">
            <img
                src="images/4.png"
                alt="Tela de configurações"
                class="w-full object-cover"
            >
        </div>

        <!-- Obs sobre passo 4 -->
        <p class="text-lg">Com ela selecionada, ficará disponível a seleção do comando de abertura do modelo escolhido.</p>
        <div class="bg-white dark:bg-slate-800 border-l-4 border-red-600 pl-5 py-3 my-8">
            <p class="text-gray-700 text-lg leading-relaxed">
                Cada marca usa um comando de abertura diferente. Caso a marca da sua impressora não esteja entre as listadas, clique em Personalizado e escreva o comando na caixa de resposta: Comando de abertura da gaveta.
            </p>
        </div>
        <div class="bg-white dark:bg-slate-800 border-l-4 border-red-600 pl-5 py-3 my-8">
            <p class="text-gray-700 text-lg leading-relaxed">
                Equipamentos Específicos:
                ‍<strong>a.</strong> Com a marca da impressora “Elgin M8” ou “M10”, selecione o modelo <strong>Personalizado</strong> e utilize o comando <strong>27,112,0,50</strong>.
                <strong>b.</strong> Com a marca da impressora “Elgin”, selecione o modelo <strong>Personalizado</strong> e utilize o comando <strong>27,112,0,100,127</strong>.
            </p>
        </div>

        <!-- Passo 5 -->
        <div class="flex items-start gap-4 mb-8">
            <div
                class="w-8 h-8 rounded-full border-3 border-red-300 flex items-center justify-center text-md font-medium  flex-shrink-0 dark:border-slate-900 dark:text-slate-100">
                5
            </div>

            <p class="text-xl">
                Conclua as configurações clicando em <strong>Salvar</strong> (✓) no canto superior direito.
            </p>
        </div>
    </div>
</div>

<?php 
    include '../../includes/footer.php' 
?>