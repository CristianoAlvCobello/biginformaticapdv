<?php   
    $arquivo = basename(__FILE__);
    include 'includes/header.php';
?>
<div class="bg-gray-100 dark:bg-slate-950">
    <main class="max-w-7xl mx-auto px-4 py-8 bg-gray-100">
        <div class="grid lg:grid-cols-[280px_1fr] gap-8">

            <!-- Sidebar -->
            <aside class="lg:sticky lg:top-34 h-fit">
                <div class="bg-white rounded-md border-2 border-red-600 p-5">

                    <h2 class="text-xl font-bold text-red-500 mb-4 border-b-2 border-red-600 pb-3">
                        Tutoriais
                    </h2>

                    <nav id="sidebar-menu" class="space-y-2">
                        <!-- Gerado via JS -->
                    </nav>

                </div>
            </aside>

            <!-- Conteúdo -->
            <section>
                <!-- Pesquisa -->
                <div class="bg-white mb-10 sticky top-0 z-10">
                    <div class="relative">
                        <input
                            type="text"
                            id="searchInput"
                            placeholder="Pesquisar tutoriais..."
                            class="w-full border-2 border-red-600 focus:border-red-600 focus:ring-2 focus:ring-red-200 rounded-md px-4 py-3 outline-none"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="absolute right-4 top-3.5 w-5 h-5 text-red-600"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 105.5 5.5a7.5 7.5 0 0011.15 11.15z"/>
                        </svg>
                    </div>
                </div>

                <div id="tutorials-container" class="space-y-12">
                    <!-- Gerado via JS -->
                </div>

            </section>

        </div>
    </main>
</div>

<?php 
    include 'includes/footer.php' 
?>