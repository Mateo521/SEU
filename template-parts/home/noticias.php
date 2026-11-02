<?php

/**
 * Componente: Noticias destacadas
 */
?>
<section id="noticias" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="mb-10 flex items-end justify-between border-b border-neutral-200 pb-4">
        <h2 class="font-sans text-3xl font-semibold sm:text-4xl">Noticias SEU</h2>
        <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="text-sm font-medium text-seu underline-offset-4 hover:underline">Ver todas</a>
    </div>
    <div class="grid gap-10 lg:grid-cols-5">

        <article class="group relative isolate flex min-h-[24rem] items-end overflow-hidden rounded-sm bg-neutral-800 lg:col-span-3">

            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
            <div class="p-6 text-white sm:p-8">
                <span class="inline-block rounded-sm bg-seu px-2 py-1 text-xs font-semibold">Institucional</span>
                <h3 class="mt-3 max-w-lg font-sans text-3xl font-semibold leading-tight"><a href="#" class="after:absolute after:inset-0 group-hover:underline underline-offset-4">La UNSL convoca a presentar Proyectos de Extensión de Interés Social para 2027</a></h3>
            </div>
        </article>

        <div class="lg:col-span-2">
            <ul class="divide-y divide-neutral-200">
                <li>
                    <article class="group flex gap-4 py-5 first:pt-0">
                        <div class="h-24 w-24 shrink-0 rounded-sm bg-neutral-200" aria-label="Miniatura"></div>
                        <div>
                            <p class="text-sm font-medium text-seu">Agenda Cultural</p>
                            <h3 class="mt-1 font-semibold leading-snug"><a href="#" class="group-hover:text-seu">Flavia Calderón trae sus canciones al ciclo La Canción con Sentido</a></h3>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="group flex gap-4 py-5">
                        <div class="h-24 w-24 shrink-0 rounded-sm bg-neutral-200" aria-label="Miniatura"></div>
                        <div>
                            <p class="text-sm font-medium text-seu">Interés General</p>
                            <h3 class="mt-1 font-semibold leading-snug"><a href="#" class="group-hover:text-seu">“Más allá de la realidad”: muestra colectiva del Taller de Arte Lotus</a></h3>
                        </div>
                    </article>
                </li>
                <li>
                    <article class="group flex gap-4 py-5">
                        <div class="h-24 w-24 shrink-0 rounded-sm bg-neutral-200" aria-label="Miniatura"></div>
                        <div>
                            <p class="text-sm font-medium text-seu">Institucional</p>
                            <h3 class="mt-1 font-semibold leading-snug"><a href="#" class="group-hover:text-seu">Candidaturas al Premio Rector Mauricio Amílcar López</a></h3>
                        </div>
                    </article>
                </li>
            </ul>
        </div>
    </div>
</section>