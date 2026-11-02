<?php

/**
 * Componente: capacitaciones y diplomaturas
 */
?>
<section class="border-y border-neutral-200 bg-paper py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <div id="capacitaciones">
            <div class="flex items-end justify-between border-b border-neutral-200 pb-4">
                <h2 class="font-sans text-3xl font-semibold sm:text-4xl">Capacitaciones</h2>
                <a href="<?php echo esc_url(home_url('/capacitaciones')); ?>" class="text-sm font-medium text-seu underline-offset-4 hover:underline">Ver todas</a>
            </div>
            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">
                    <div class="aspect-[16/10] bg-neutral-200"></div>
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-xl font-semibold leading-snug">Introducción a la Gestión Cultural</h3>
                        <p class="mt-2 text-sm text-neutral-600">Sede: San Luis</p>
                        <button class="mt-6 inline-flex w-fit items-center justify-center rounded-sm bg-seu px-4 py-2 text-sm font-semibold text-white hover:bg-seu-dark" data-open="modalCapacitacion">Inscribirse</button>
                    </div>
                </article>
            </div>
        </div>


        <div id="diplomaturas" class="mt-20">
            <div class="flex items-end justify-between border-b border-neutral-200 pb-4">
                <h2 class="font-sans text-3xl font-semibold sm:text-4xl">Diplomaturas</h2>
                <a href="<?php echo esc_url(home_url('/diplomaturas')); ?>" class="text-sm font-medium text-seu underline-offset-4 hover:underline">Ver todas</a>
            </div>
            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">
                    <div class="aspect-[16/10] bg-neutral-200"></div>
                    <div class="flex flex-1 flex-col p-6">
                        <span class="text-xs font-semibold uppercase tracking-wider text-seu">Salud</span>
                        <h3 class="mt-2 text-xl font-semibold leading-snug">Diplomatura en Cuidados Comunitarios</h3>
                        <p class="mt-3 flex-1 text-sm text-neutral-600">Formación para el acompañamiento territorial.</p>
                        <a href="#" class="mt-6 font-medium text-seu underline-offset-4 hover:underline">Ver diplomatura</a>
                    </div>
                </article>
            </div>
        </div>

    </div>
</section>