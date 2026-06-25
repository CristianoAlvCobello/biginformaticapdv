<?php   
    $arquivo = basename(__FILE__);
    include 'includes/header.php';
?>

    <main class="min-h-[70vh] flex items-center justify-center bg-gray-100 px-4 py-16">
        <div class="max-w-3xl rounded-3xl border border-slate-200 bg-white p-10 text-center shadow-slate-200/60">
            <h1 class="text-4xl font-bold text-red-600 mb-4">Tutoriais em construção</h1>
            <p class="mx-auto mb-8 max-w-2xl text-lg leading-8">
                Estamos preparando conteúdos novos para você. Os tutoriais ainda estão sendo feitos, mas logo teremos materiais completos e atualizados.
            </p>
            <div class="flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
                <button type="button" onclick="history.back()" class="cursor-pointer rounded-full bg-red-600 px-8 py-3 text-base font-semibold text-white transition hover:bg-slate-700">
                    Voltar
                </button>
            </div>
        </div>
    </main>

<?php 
    include 'includes/footer.php' 
?>