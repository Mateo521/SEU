<?php

/**
 * Componente: Agendas cultural e institucional
 */
?>
<section id="agendas" class="bg-paper py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-end justify-between gap-4 border-b border-neutral-200 pb-4">
            <h2 class="font-sans text-3xl font-semibold sm:text-4xl">Agendas</h2>
            <button class="flex items-center gap-2 rounded-sm border border-seu px-4 py-2 text-sm font-semibold text-seu hover:bg-seu hover:text-white transition">Activar notificaciones</button>
        </div>

        <div class="mt-8">
            <div class="flex gap-6 border-b border-neutral-200" role="tablist">
                <button id="tab-cultural" class="tab-btn active -mb-px border-b-2 border-seu pb-3 font-semibold text-ink" aria-selected="true">Agenda Cultural</button>
                <button id="tab-institucional" class="tab-btn -mb-px border-b-2 border-transparent pb-3 font-semibold text-neutral-500 hover:text-ink" aria-selected="false">Agenda Institucional</button>
            </div>


            <div id="panel-cultural" class="mt-6 divide-y divide-neutral-200">
                <article class="flex gap-6 py-5">
                    <time class="flex w-16 shrink-0 flex-col items-center text-center"><span class="text-3xl font-semibold text-seu">15</span><span class="text-sm font-medium uppercase text-neutral-600">Nov</span></time>
                    <div>
                        <h3 class="text-lg font-semibold">Exposición de Arte Local</h3>
                        <p class="text-sm text-neutral-600">Centro Cultural UNSL · 18:00 hs</p>
                    </div>
                </article>
                <article class="flex gap-6 py-5">
                    <time class="flex w-16 shrink-0 flex-col items-center text-center"><span class="text-3xl font-semibold text-seu">22</span><span class="text-sm font-medium uppercase text-neutral-600">Nov</span></time>
                    <div>
                        <h3 class="text-lg font-semibold">Obra de Teatro Comunitario</h3>
                        <p class="text-sm text-neutral-600">Auditorio Mauricio López · 21:00 hs</p>
                    </div>
                </article>
            </div>


            <div id="panel-institucional" class="mt-6 divide-y divide-neutral-200 hidden">
                <article class="flex gap-6 py-5">
                    <time class="flex w-16 shrink-0 flex-col items-center text-center"><span class="text-3xl font-semibold text-seu">10</span><span class="text-sm font-medium uppercase text-neutral-600">Nov</span></time>
                    <div>
                        <h3 class="text-lg font-semibold">Reunión CAEX</h3>
                        <p class="text-sm text-neutral-600">Rectorado · 10:00 hs</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>