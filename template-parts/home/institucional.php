<?php

/**
 * Componente: Institucional
 */
?>
<section id="institucional" class="bg-paper py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 md:grid-cols-2">
            <article class="group flex flex-col justify-between rounded-sm border border-neutral-200 bg-white p-8 hover:border-seu sm:p-10">
                <div>
                    <h3 class="font-sans text-2xl font-semibold">Institucional</h3>
                    <p class="mt-4 max-w-md text-neutral-600">Conocé la misión, las secretarías y el equipo que conforma la red de extensión universitaria en la UNSL.</p>
                </div>
                <a href="<?php echo esc_url(home_url('/institucional')); ?>" class="mt-8 inline-flex items-center gap-2 font-medium text-seu underline-offset-4 group-hover:underline">Nuestro equipo <svg class="h-5 w-5" aria-hidden="true">
                        <use href="#i-arrow" />
                    </svg></a>
            </article>
            <article class="group flex flex-col justify-between rounded-sm border border-neutral-200 bg-white p-8 hover:border-seu sm:p-10">
                <div>
                    <h3 class="font-sans text-2xl font-semibold">CAEX</h3>
                    <p class="mt-4 max-w-md text-neutral-600">Comisión Asesora de Extensión Universitaria, responsable de evaluar y orientar las políticas de vinculación.</p>
                </div>
                <a href="<?php echo esc_url(home_url('/caex')); ?>" class="mt-8 inline-flex items-center gap-2 font-medium text-seu underline-offset-4 group-hover:underline">Conocer más <svg class="h-5 w-5" aria-hidden="true">
                        <use href="#i-arrow" />
                    </svg></a>
            </article>
        </div>

        <div class="mt-10 flex h-6 overflow-hidden rounded-sm" aria-hidden="true">
            <span class="flex-1 bg-[#1F2449]"></span><span class="flex-1 bg-[#008D3B]"></span><span class="flex-1 bg-[#A5C614]"></span><span class="flex-1 bg-[#F4B318]"></span>
            <span class="flex-1 bg-[#ED6F03]"></span><span class="flex-1 bg-[#E42420]"></span><span class="flex-1 bg-[#972F70]"></span><span class="flex-1 bg-[#502773]"></span>
            <span class="flex-1 bg-[#4B707F]"></span><span class="flex-1 bg-[#996A16]"></span>
        </div>
    </div>
</section>