<?php
/**
 * Template Name: Convocatorias
 *  
 */
get_header(); 
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
       
        <header class="mb-12 border-b border-neutral-200 pb-8">
            <span class="inline-block rounded-sm border border-seu px-3 py-1 text-xs font-semibold uppercase tracking-wider text-seu mb-4">
                Proyectos de Extensión
            </span>
            <h1 class="font-sans text-3xl font-semibold sm:text-4xl text-ink leading-tight mb-4">
                Convocatorias
            </h1>
            <p class="text-neutral-600 max-w-3xl leading-relaxed text-base">
                Instancias de presentación, evaluación y aprobación de Proyectos de Extensión de Interés Social (PEIS), Proyectos de Extensión y Docencia (PED) y Proyectos de Interés Institucional (PEII).
            </p>
        </header>

       
        <section class="mb-20">
            <div class="rounded-sm border-2 border-seu bg-white p-8 sm:p-10 shadow-sm relative overflow-hidden">
               
                <div class="absolute top-0 right-0 bg-seu text-white text-xs font-bold uppercase tracking-wider px-4 py-2">
                    Convocatoria abierta
                </div>
                
                <h2 class="text-2xl font-semibold font-sans text-ink mb-4">Convocatoria a Proyectos de Extensión 2026-2027</h2>
                <p class="text-neutral-600 mb-8 max-w-3xl">
                    Se encuentra abierto el llamado para la presentación de nuevos Proyectos de Extensión. Invitamos a la comunidad universitaria a presentar propuestas orientadas a la promoción del desarrollo regional y la mejora de la calidad de vida de la población.
                </p>
                
                <div class="flex flex-wrap items-center gap-4">
                    
                    <button data-open="modalConvocatoria" class="inline-flex items-center gap-2 rounded-sm bg-seu px-6 py-3 font-semibold text-white transition hover:bg-seu-dark">
                        Formulario de inscripción
                    </button>
                    <a href="#" class="inline-flex items-center gap-2 font-medium text-seu hover:underline px-4 py-3">
                        Descargar bases y condiciones (PDF)
                    </a>
                </div>
            </div>
        </section>

       
        <section>
            <h2 class="text-2xl font-semibold font-sans text-ink mb-8 border-b border-neutral-200 pb-2">
                Archivo histórico de Convocatorias
            </h2>
            
            <div class="grid gap-6 lg:grid-cols-3">
                
            
                <article class="bg-white rounded-sm border border-neutral-200 p-6">
                    <h3 class="font-semibold text-lg text-ink mb-4">Convocatoria 2020</h3>
                    <ul class="space-y-3 text-sm text-neutral-600">
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Prórroga de la Convocatoria a PED hasta el 15/11/2019</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Convocatoria a Proyectos de Extensión de Interés Social</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Convocatoria a Proyectos de Extensión y Docencia</a></li>
                    </ul>
                </article>

                
                <article class="bg-white rounded-sm border border-neutral-200 p-6">
                    <h3 class="font-semibold text-lg text-ink mb-4">Convocatoria 2016</h3>
                    <ul class="space-y-3 text-sm text-neutral-600">
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Res. Nº 1617/16: Protocolización de Evaluadores Externos</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Res. Nº 279/16: Aprobación de Proyectos de Extensión</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Resolución de la Convocatoria, Bases y Formulario</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Res. Nº 280/16: Aprobación de Informes Finales</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Res. Nº 379/16: Altas y Bajas (1ª parte)</a></li>
                    </ul>
                </article>

                
                <article class="bg-white rounded-sm border border-neutral-200 p-6">
                    <h3 class="font-semibold text-lg text-ink mb-4">Convocatoria 2014</h3>
                    <ul class="space-y-3 text-sm text-neutral-600">
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Listado de Proyectos Aprobados</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Res. C.S. Nº 217/14: Aprobación de Proyectos</a></li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Anexo I, II y III (Bases, Formularios y Avales)</a></li>
                        <li class="pt-2 mt-2 border-t border-neutral-100 font-medium text-ink">Altas y Bajas (2014-2015):</li>
                        <li><a href="#" class="text-seu hover:underline inline-flex items-start gap-2">&bull; Res. CS Nº 210/15, 245/14 y 331/15</a></li>
                    </ul>
                </article>

            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>