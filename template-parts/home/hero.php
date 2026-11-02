<?php

/**
 * Componente: carr principal
 */
?>
<section aria-roledescription="carrusel" aria-label="Destacados" class="relative bg-neutral-950 text-white dark-surface">
    <div class="relative mx-auto min-h-[32rem] max-w-7xl overflow-hidden lg:min-h-[36rem]">

        <div class="slide absolute inset-0 grid items-end bg-gradient-to-br from-neutral-800 to-neutral-950" aria-label="1 de 3">
            <div class="px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-24">
                <div class="max-w-2xl">
                    <span class="inline-block rounded-sm border border-seu px-2 py-0.5 text-xs font-semibold uppercase tracking-wider text-seu bg-white">Inscripciones Abiertas</span>
                    <h1 class="mt-4 font-sans text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">Capacitaciones 2026</h1>
                    <p class="mt-5 max-w-xl text-lg text-neutral-200">Cursos cortos orientados a toda la comunidad en diversas áreas del conocimiento y la cultura.</p>
                    <a href="#capacitaciones" class="mt-8 inline-flex items-center gap-2 rounded-sm bg-seu px-6 py-3 font-medium text-white hover:bg-seu-dark">Inscribirse <svg class="h-5 w-5" aria-hidden="true">
                            <use href="#i-arrow" />
                        </svg></a>
                </div>
            </div>
        </div>

        <div class="slide absolute inset-0 grid items-end bg-gradient-to-br from-stone-800 to-neutral-950" aria-label="2 de 3" hidden>
            <div class="px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-24">
                <div class="max-w-2xl">
                    <span class="inline-block rounded-sm border border-white px-2 py-0.5 text-xs font-semibold uppercase tracking-wider text-white">Convocatoria 2027</span>
                    <h2 class="mt-4 font-sans text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">Proyectos de Extensión</h2>
                    <p class="mt-5 max-w-xl text-lg text-neutral-200">Presentá tu proyecto PEIS o PEII. Articulemos el conocimiento universitario con las necesidades sociales.</p>
                    <a href="#proyectos" class="mt-8 inline-flex items-center gap-2 rounded-sm bg-seu px-6 py-3 font-medium text-white hover:bg-seu-dark">Ver bases <svg class="h-5 w-5" aria-hidden="true">
                            <use href="#i-arrow" />
                        </svg></a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-6 left-4 flex items-center gap-2 sm:left-6 lg:left-8">
            <button type="button" id="prev" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 hover:bg-white hover:text-ink"><svg class="h-5 w-5 rotate-180" aria-hidden="true">
                    <use href="#i-arrow" />
                </svg></button>
            <button type="button" id="next" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 hover:bg-white hover:text-ink"><svg class="h-5 w-5" aria-hidden="true">
                    <use href="#i-arrow" />
                </svg></button>
            <span class="ml-3 text-sm tabular-nums text-neutral-300" id="count">1 / 2</span>
        </div>
    </div>
</section>