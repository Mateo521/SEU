<?php
/**
 * Componente: Accesos frecuentes
 */
?>

<section id="accesos-frecuentes" class="bg-paper py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <div class="mb-16">
            <div class="flex items-center gap-3 mb-8 border-b border-neutral-200 pb-4">
                <!--span class="h-6 w-1.5 bg-seu rounded-sm"></span-->
                <h2 class="font-sans text-2xl font-semibold text-ink sm:text-3xl">Accesos directos</h2>
            </div>
            
            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">
                
                <a href="<?php echo home_url('/becas-y-pasantias'); ?>" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 14v7"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Becas</span>
                </a>

                
                <a href="#" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Centro Cultural</span>
                </a>

                
                <a href="<?php echo home_url('/convocatorias'); ?>" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Convocatorias</span>
                </a>

            
                <a href="<?php echo home_url('/premios'); ?>" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Premios</span>
                </a>

            
                <a href="#" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <span class="text-sm font-semibold text-ink transition-colors group-hover:text-seu">Culturas Comunitarias</span>
                </a>

            
                <a href="#contacto" class="group flex flex-col items-center justify-center rounded-sm border border-neutral-200 bg-white p-6 text-center transition-all hover:-translate-y-1 hover:border-seu hover:shadow-sm">
                    <div class="mb-3 rounded-full bg-neutral-50 p-3 text-neutral-400 transition-colors group-hover:bg-[#C9E7FF] group-hover:text-seu">
                        <svg class="size-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
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
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                            <span class="font-medium">Proyectos de Extensión de Interés Institucional</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                            <span class="font-medium">Proyectos de Extensión de Interés Social</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                            <span class="font-medium">Proyectos de Extensión y Docencia</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                            <span class="font-medium">Representación de proyectos PED</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                            <span class="font-medium">Sitios y redes de proyectos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"></path></svg>
                            <span class="font-medium">Proyectos Anteriores (Archivo)</span>
                        </a>
                    </li>
                    <li class="pt-2 border-t border-neutral-100">
                        <a href="#" class="group flex items-start gap-3 rounded-sm p-2 text-sm text-neutral-600 transition hover:bg-neutral-50 hover:text-seu">
                            <svg class="mt-0.5 size-4 shrink-0 text-neutral-400 group-hover:text-seu transition" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            <span class="font-medium">Puerta de entrada DOSPU</span>
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
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Ministerio de Cultura Argentina</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 14l9-5-9-5-9 5 9 5zm0 0v7"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Secretaría de Políticas Universitarias</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Red Nacional de Extensión (REXUNI)</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Museo Bellas Artes</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Instituto Nacional de la Música</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Instituto Nacional de Teatro</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">AUGM</span>
                    </a>

                    <a href="#" target="_blank" class="flex items-center gap-3 rounded-sm border border-neutral-200 bg-neutral-50 p-3 transition hover:border-seu hover:bg-white">
                        <div class="flex size-10 shrink-0 items-center justify-center rounded-sm bg-white border border-neutral-100 text-neutral-400 shadow-sm">
                            <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        </div>
                        <span class="text-sm font-semibold text-ink leading-tight">Fondo Nacional de las Artes</span>
                    </a>

                </div>
            </div>
            
        </div>
    </div>
</section>