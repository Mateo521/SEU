<?php

/**
 * Componente: Accesos frecuentes 
 */
?>

<section id="accesos-frecuentes" class="bg-paper py-20 sm:py-28 text-ink">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="mb-10 flex flex-col justify-between gap-4 border-b border-neutral-300 pb-6 sm:flex-row sm:items-end">
            <div>
                <span class="block text-base font-medium uppercase  text-seu">
                    Gestión y comunidad
                </span>
                <h2 class="mt-2 font-sans text-3xl font-light tracking-tight text-ink sm:text-4xl lg:text-5xl">
                    Accesos directos
                </h2>
            </div>
            <p class="max-w-sm text-sm leading-relaxed text-neutral-500 sm:text-right">
                Atajos principales a convocatorias, espacios culturales, programas de extensión y organismos vinculados.
            </p>
        </div>

        <div class="mb-12 grid grid-cols-2 gap-px border border-neutral-200 bg-neutral-200 sm:grid-cols-3 lg:grid-cols-6">

            <a href="<?php echo home_url('/becas-y-pasantias'); ?>" class="group flex min-h-[11rem] flex-col justify-between bg-white p-6 transition-colors duration-300 hover:bg-seu hover:text-white">
                <div class="flex items-start justify-between">
                    <span class="material-symbols-outlined text-[30px] text-[#39436f] transition-colors group-hover:text-white [font-variation-settings:'wght'_200]">school</span>
                    <span class="material-symbols-outlined text-[18px] text-[#39436f] transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                </div>
                <span class="mt-8 text-base font-normal tracking-tight">Becas</span>
            </a>

            <a href="<?php echo home_url('/centro-cultural'); ?>" class="group flex min-h-[11rem] flex-col justify-between bg-white p-6 transition-colors duration-300 hover:bg-seu hover:text-white">
                <div class="flex items-start justify-between">
                    <span class="material-symbols-outlined text-[30px] text-[#39436f] transition-colors group-hover:text-white [font-variation-settings:'wght'_200]">museum</span>
                    <span class="material-symbols-outlined text-[18px] text-[#39436f] transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                </div>
                <span class="mt-8 text-base font-normal tracking-tight">Centro Cultural</span>
            </a>

            <a href="<?php echo home_url('/convocatorias'); ?>" class="group flex min-h-[11rem] flex-col justify-between bg-white p-6 transition-colors duration-300 hover:bg-seu hover:text-white">
                <div class="flex items-start justify-between">
                    <span class="material-symbols-outlined text-[30px] text-[#39436f] transition-colors group-hover:text-white [font-variation-settings:'wght'_200]">campaign</span>
                    <span class="material-symbols-outlined text-[18px] text-[#39436f] transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                </div>
                <span class="mt-8 text-base font-normal tracking-tight">Convocatorias</span>
            </a>

            <a href="<?php echo home_url('/premios'); ?>" class="group flex min-h-[11rem] flex-col justify-between bg-white p-6 transition-colors duration-300 hover:bg-seu hover:text-white">
                <div class="flex items-start justify-between">
                    <span class="material-symbols-outlined text-[30px] text-[#39436f] transition-colors group-hover:text-white [font-variation-settings:'wght'_200]">workspace_premium</span>
                    <span class="material-symbols-outlined text-[18px] text-[#39436f] transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                </div>
                <span class="mt-8 text-base font-normal tracking-tight">Premios</span>
            </a>

            <a href="#" class="group flex min-h-[11rem] flex-col justify-between bg-white p-6 transition-colors duration-300 hover:bg-seu hover:text-white">
                <div class="flex items-start justify-between">
                    <span class="material-symbols-outlined text-[30px] text-[#39436f] transition-colors group-hover:text-white [font-variation-settings:'wght'_200]">groups</span>
                    <span class="material-symbols-outlined text-[18px] text-[#39436f] transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                </div>
                <span class="mt-8 text-base font-normal tracking-tight">Culturas Comunitarias</span>
            </a>

            <a href="#contacto" class="group flex min-h-[11rem] flex-col justify-between bg-white p-6 transition-colors duration-300 hover:bg-seu hover:text-white">
                <div class="flex items-start justify-between">
                    <span class="material-symbols-outlined text-[30px] text-[#39436f] transition-colors group-hover:text-white [font-variation-settings:'wght'_200]">mail</span>
                    <span class="material-symbols-outlined text-[18px] text-[#39436f] transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                </div>
                <span class="mt-8 text-base font-normal tracking-tight">Contáctanos</span>
            </a>

        </div>


        <div class="grid grid-cols-1 border border-neutral-200 lg:grid-cols-12">


            <div class="flex flex-col justify-between bg-seu p-8 text-white sm:p-10 lg:col-span-5">
                <div>
                    <div class="mb-6 flex items-center justify-between border-b border-white/15 pb-5">
                        <div>
                            <span class="block text-[11px] font-medium uppercase  text-neutral-400">
                                Extensión universitaria
                            </span>
                            <h3 class="mt-1 font-sans text-2xl font-light tracking-tight text-white">
                                Programas y proyectos
                            </h3>
                        </div>
                        <!--span class="material-symbols-outlined text-[28px] text-white/40 [font-variation-settings:'wght'_200]" aria-hidden="true">asterisk</span-->
                    </div>

                    <ul class="divide-y divide-white/10">
                        <li>
                            <a href="#" class="group flex items-center justify-between gap-4 py-3.5 text-sm text-neutral-300 transition hover:text-white">
                                <span class="font-normal">Proyectos de Extensión de Interés Institucional</span>
                                <span class="material-symbols-outlined shrink-0 text-[18px] text-neutral-500 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between gap-4 py-3.5 text-sm text-neutral-300 transition hover:text-white">
                                <span class="font-normal">Proyectos de Extensión de Interés Social</span>
                                <span class="material-symbols-outlined shrink-0 text-[18px] text-neutral-500 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between gap-4 py-3.5 text-sm text-neutral-300 transition hover:text-white">
                                <span class="font-normal">Proyectos de Extensión y Docencia</span>
                                <span class="material-symbols-outlined shrink-0 text-[18px] text-neutral-500 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between gap-4 py-3.5 text-sm text-neutral-300 transition hover:text-white">
                                <span class="font-normal">Representación de proyectos PED</span>
                                <span class="material-symbols-outlined shrink-0 text-[18px] text-neutral-500 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between gap-4 py-3.5 text-sm text-neutral-300 transition hover:text-white">
                                <span class="font-normal">Sitios y redes de proyectos</span>
                                <span class="material-symbols-outlined shrink-0 text-[18px] text-neutral-500 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="group flex items-center justify-between gap-4 py-3.5 text-sm text-neutral-300 transition hover:text-white">
                                <span class="font-normal">Proyectos Anteriores (Archivo)</span>
                                <span class="material-symbols-outlined shrink-0 text-[18px] text-neutral-500 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-white [font-variation-settings:'wght'_300]">north_east</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-8 border-t border-white/15 pt-6">
                    <a href="#" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-3 text-sm font-medium text-white transition hover:text-[#C9E7FF]">
                        <span class="border-b border-white/60 pb-0.5 group-hover:border-[#C9E7FF]">Puerta de entrada DOSPU</span>
                        <span class="flex size-8 items-center justify-center rounded-full bg-white text-neutral-950 transition group-hover:bg-[#C9E7FF]">
                            <span class="material-symbols-outlined text-[16px]">north_east</span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col bg-white p-8 sm:p-10 lg:col-span-7">
                <div class="mb-6 border-b border-neutral-200 pb-5">
                    <span class="block text-[11px] font-medium uppercase  text-neutral-500">
                        Red institucional
                    </span>
                    <h3 class="mt-1 font-sans text-2xl font-light tracking-tight text-ink">
                        Sitios relacionados
                    </h3>
                </div>

                <div class="grid flex-1 grid-cols-1 gap-px border border-neutral-200 bg-neutral-200 sm:grid-cols-2">

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/Ministerio_de_Cultura.jpg" alt="Logo Ministerio de Cultura Argentina" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">Ministerio de Cultura Argentina</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/SPU.jpg" alt="Logo Secretaría de Políticas Universitarias" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">Secretaría de Políticas Universitarias</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/REXUNI.png" alt="Logo Red Nacional de Extensión (REXUNI)" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">Red Nacional de Extensión (REXUNI)</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/Museo_Bellas_Artes.jpg" alt="Logo Museo Bellas Artes" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">Museo Bellas Artes</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/INAMU.png" alt="Logo INAMU" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">Instituto Nacional de la Música</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/INT.jpg" alt="Instituto Nacional de Teatro" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">Instituto Nacional de Teatro</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/AUGM.png" alt="Logo AUGM" class="h-10 w-auto shrink-0">
                            <span class="text-sm font-medium leading-snug text-ink">AUGM</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                    <a href="#" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between gap-3 bg-white p-4 transition-colors hover:bg-neutral-50">
                        <div class="flex items-center gap-3.5 min-w-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logos/Fondo_Nacional_de_Bellas_Artes.jpg" alt="Logo Fondo Nacional de las Artes" class="h-10 w-auto shrink-0">

                            <span class="text-sm font-medium leading-snug text-ink">Fondo Nacional de las Artes</span>
                        </div>
                        <span class="material-symbols-outlined shrink-0 text-[16px] text-neutral-400 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>