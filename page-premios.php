<?php

/**
 * Template Name: Premios Institucionales
 * 
 */
get_header();
?>


<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <header class="mb-16 border-b border-neutral-200 pb-10 text-center">
            <span class="inline-block rounded-sm border border-seu px-3 py-1 text-xs font-semibold uppercase tracking-wider text-seu mb-4">
                Secretaría de Extensión Universitaria
            </span>
            <h1 class="font-sans text-4xl font-semibold sm:text-5xl text-ink leading-tight mb-4">
                Premios Institucionales
            </h1>
            <p class="text-neutral-600 max-w-2xl mx-auto leading-relaxed text-lg">
                Reconocimientos otorgados por la Universidad Nacional de San Luis a la trayectoria cultural, artística y a la defensa de los Derechos Humanos.
            </p>
        </header>


        <nav class="mb-16 flex flex-wrap justify-center gap-4">
            <a href="#polo-godoy-rojo" class="rounded-sm bg-neutral-100 px-6 py-3 text-sm font-semibold text-neutral-700 hover:bg-seu hover:text-white transition">
                Premio Polo Godoy Rojo
            </a>
            <a href="#mauricio-amilcar-lopez" class="rounded-sm bg-neutral-100 px-6 py-3 text-sm font-semibold text-neutral-700 hover:bg-seu hover:text-white transition">
                Premio Mauricio Amílcar López
            </a>
        </nav>

        <div class="space-y-24">


            <section id="polo-godoy-rojo" class="scroll-mt-32">
                <div class="grid lg:grid-cols-12 gap-12 items-start">


                    <div class="lg:col-span-4 lg:sticky lg:top-32">
                        <h2 class="text-3xl font-sans font-semibold text-ink mb-6">Premio Polo Godoy Rojo</h2>
                        <div class="prose prose-neutral text-neutral-600 mb-8">
                            <p>Este premio se ha consolidado a lo largo de sus ediciones, destacándose por su contribución a distinguir la tarea de los artistas en San Luis, en variados rubros y categorías.</p>
                            <p>La primera edición estuvo destinada a reconocer el aporte en Letras, inspirada en la memoria del gran escritor puntano. Luego se entregó en reconocimiento a las Danzas, Fotografía, Escultura, Música, Teatro y Pintura.</p>
                        </div>

                        <?php
                        $polo_bases_url = get_field('polo_bases_url');
                        if ($polo_bases_url) :
                        ?>
                            <a href="<?php echo esc_url($polo_bases_url); ?>" target="_blank" class="inline-flex items-center gap-2 rounded-sm border-2 border-seu px-6 py-3 font-semibold text-seu hover:bg-seu hover:text-white transition w-full justify-center sm:w-auto">
                                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                                Bases para propuestas
                            </a>
                        <?php endif; ?>
                    </div>


                    <div class="lg:col-span-8">
                        <div class="bg-white border border-neutral-200 rounded-sm shadow-sm p-6 sm:p-8 overflow-hidden">
                            <h3 class="text-lg font-semibold text-ink mb-6 pb-4 border-b border-neutral-100">
                                Histórico de premiados
                            </h3>
                            
                        
                            <div class="overflow-x-auto 
                                        [&_table]:w-full [&_table]:text-left [&_table]:text-sm [&_table]:text-neutral-600 [&_table]:border-collapse
                                        [&_thead]:bg-neutral-50 [&_thead]:text-ink 
                                        [&_th]:px-4 [&_th]:py-3 [&_th]:font-semibold [&_th]:border-b [&_th]:border-neutral-200
                                        [&_td]:px-4 [&_td]:py-3 [&_td]:border-b [&_td]:border-neutral-100
                                        [&_tr:hover]:bg-neutral-50/50 [&_tr]:transition">
                                <?php 
                                $polo_tabla = get_field('polo_tabla_historico');
                                if ($polo_tabla) {
                                    echo $polo_tabla;  
                                } else {
                                    echo '<p class="text-neutral-500 italic">La tabla de ganadores se actualizará pronto.</p>';
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


            <hr class="border-neutral-200">


            <section id="mauricio-amilcar-lopez" class="scroll-mt-32">
                <div class="grid lg:grid-cols-12 gap-12 items-start">

                    <div class="lg:col-span-4 lg:sticky lg:top-32">
                        <h2 class="text-3xl font-sans font-semibold text-ink mb-6">Premio Rector Mauricio Amílcar López</h2>
                        <div class="prose prose-neutral text-neutral-600 mb-8">
                            <p>Otorgado anualmente a la persona o institución que se haya destacado en la defensa y promoción de los Derechos Humanos.</p>
                            <p>El premio lleva el nombre del primer Rector de la UNSL, filósofo, profesor y persona ejemplar víctima de la dictadura militar, secuestrado y desaparecido el 1 de enero de 1977. La Universidad asume esta tarea en fidelidad a su memoria y labor.</p>
                        </div>

                        <?php
                        $lopez_resolucion_url = get_field('lopez_resolucion_url');
                        if ($lopez_resolucion_url) :
                        ?>
                            <a href="<?php echo esc_url($lopez_resolucion_url); ?>" target="_blank" class="inline-flex items-center gap-2 rounded-sm bg-neutral-100 px-6 py-3 font-semibold text-neutral-700 hover:bg-neutral-200 transition w-full justify-center sm:w-auto border border-neutral-200">
                                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                                Ver Resolución
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="lg:col-span-8">
                        <div class="bg-white border border-neutral-200 rounded-sm shadow-sm p-6 sm:p-8 overflow-hidden">
                            <h3 class="text-lg font-semibold text-ink mb-6 pb-4 border-b border-neutral-100">
                                Histórico de premiados
                            </h3>

                            <div class="overflow-x-auto 
                                        [&_table]:w-full [&_table]:text-left [&_table]:text-sm [&_table]:text-neutral-600 [&_table]:border-collapse
                                        [&_thead]:bg-neutral-50 [&_thead]:text-ink 
                                        [&_th]:px-4 [&_th]:py-3 [&_th]:font-semibold [&_th]:border-b [&_th]:border-neutral-200
                                        [&_td]:px-4 [&_td]:py-3 [&_td]:border-b [&_td]:border-neutral-100
                                        [&_tr:hover]:bg-neutral-50/50 [&_tr]:transition">
                                <?php
                                $lopez_tabla = get_field('lopez_tabla_historico');
                                if ($lopez_tabla) {
                                    echo $lopez_tabla;
                                } else {
                                    echo '<p class="text-neutral-500 italic">La tabla de ganadores se actualizará pronto.</p>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</main>

<?php get_footer(); ?>