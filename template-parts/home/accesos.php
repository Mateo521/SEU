<?php

/**
 * Componente: Accesos frecuentes
 */
?>



<section id="accesos-frecuentes" class="bg-paper py-16 sm:py-24" style="font-family: 'Poppins', sans-serif;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-16">
            <div class="flex items-center gap-3 mb-8 border-b border-neutral-200 pb-4">
                <!--span class="h-6 w-1.5 bg-seu rounded-sm"></span-->
                <h2 class="font-sans text-2xl font-semibold text-ink sm:text-3xl">Accesos directos</h2>
            </div>

            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">

                <a href="<?php echo home_url('/becas-y-pasantias'); ?>" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <span class="material-symbols-outlined text-[28px] [font-variation-settings:'wght'_300]">school</span>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Becas</span>
                </a>

                <a href="#" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <span class="material-symbols-outlined text-[28px] [font-variation-settings:'wght'_300]">museum</span>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Centro Cultural</span>
                </a>

                <a href="<?php echo home_url('/convocatorias'); ?>" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <span class="material-symbols-outlined text-[28px] [font-variation-settings:'wght'_300]">campaign</span>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Convocatorias</span>
                </a>

                <a href="<?php echo home_url('/premios'); ?>" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <span class="material-symbols-outlined text-[28px] [font-variation-settings:'wght'_300]">workspace_premium</span>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Premios</span>
                </a>

                <a href="#" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <span class="material-symbols-outlined text-[28px] [font-variation-settings:'wght'_300]">groups</span>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Culturas Comunitarias</span>
                </a>

                <a href="#contacto" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <span class="material-symbols-outlined text-[28px] [font-variation-settings:'wght'_300]">mail</span>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Contáctanos</span>
                </a>

            </div>


        </div>

        <div class="grid gap-12 lg:grid-cols-2">


            <div class="rounded-sm border border-neutral-200 bg-white p-6 sm:p-8 shadow-sm">
                <h3 class="font-sans text-xl font-semibold text-ink mb-6 border-b border-neutral-100 pb-4">
                    Programas y proyectos
                </h3>

                <ul class="space-y-3">
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">chevron_right</span>
                            <span class="font-medium mt-0.5">Proyectos de Extensión de Interés Institucional</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">chevron_right</span>
                            <span class="font-medium mt-0.5">Proyectos de Extensión de Interés Social</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">chevron_right</span>
                            <span class="font-medium mt-0.5">Proyectos de Extensión y Docencia</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">chevron_right</span>
                            <span class="font-medium mt-0.5">Representación de proyectos PED</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">chevron_right</span>
                            <span class="font-medium mt-0.5">Sitios y redes de proyectos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">chevron_right</span>
                            <span class="font-medium mt-0.5">Proyectos Anteriores (Archivo)</span>
                        </a>
                    </li>
                    <li class="pt-2 border-t border-neutral-100">
                        <a href="#" target="_blank" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <span class="material-symbols-outlined text-[20px] shrink-0 text-neutral-400 group-hover:text-seu transition">open_in_new</span>
                            <span class="font-medium mt-0.5">Puerta de entrada DOSPU</span>
                        </a>
                    </li>
                </ul>


            </div>


            <div>
                <h3 class="font-sans text-xl font-semibold text-ink mb-6 border-b border-neutral-200 pb-4">
                    Sitios relacionados
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">account_balance</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Ministerio de Cultura Argentina</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">school</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Secretaría de Políticas Universitarias</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">hub</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Red Nacional de Extensión (REXUNI)</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">palette</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Museo Bellas Artes</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">music_note</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Instituto Nacional de la Música</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">theater_comedy</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Instituto Nacional de Teatro</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">public</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">AUGM</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <span class="material-symbols-outlined text-[20px]">star</span>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Fondo Nacional de las Artes</span>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>