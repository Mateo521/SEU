<?php
/**
 * Plantilla: Archivo de proyectos
 */
get_header(); 
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <header class="mb-12 border-b border-neutral-200 pb-8">
            <span class="inline-block rounded-sm border border-seu px-3 py-1 text-xs font-semibold uppercase tracking-wider text-seu mb-4">
                Secretaría de Extensión Universitaria
            </span>
            <h1 class="font-sans text-3xl font-semibold sm:text-4xl text-ink leading-tight mb-6">
                Proyectos de Extensión Universitaria
            </h1>
            <p class="text-neutral-700 leading-relaxed max-w-7xl text-base mb-4">
                Los Proyectos de Extensión Universitaria se orientan a la promoción del desarrollo regional y a la mejora de la calidad de vida de la población. En la nueva normativa se presentan tres modalidades de participación: Proyectos de Extensión de Interés Social, Proyectos de Extensión y Docencia, y Proyectos de Extensión de Interés Institucional.
            </p>
            <p class="text-neutral-600 leading-relaxed max-w-7xl text-sm mb-4">
                La constitución de estos dispositivos supone reconocer a la sociedad en todas sus dimensiones, desde sua complejidad, diversidad de actores, problemáticas, demandas y potencialidades; generar espacios de comunicación para el trabajo conjunto e interdisciplinario en la identificación de problemas y la puesta en marcha de proyectos de intervención; propiciar la incorporación curricular de la extensión; promover una metodología participativa de los distintos actores sociales involucrados en las instancias de formación, ejecución y evaluación de cada proyecto.
            </p>
            

            <div class="mt-6 inline-flex flex-wrap items-center gap-2 text-sm text-neutral-600 bg-neutral-50 border border-neutral-200 p-3 rounded-sm">
                <span class="font-semibold text-ink">Normativa general de proyectos:</span>
                <a href="#" target="_blank" class="text-seu hover:underline font-medium">Ord. CS 29/17</a>
                <span>|</span>
                <a href="#" target="_blank" class="text-seu hover:underline font-medium">Modificatoria Ord. CS 64/19</a>
            </div>
        </header>

        <section class="mb-16">
            <h2 class="text-2xl font-semibold font-sans text-ink mb-6 border-b border-neutral-200 pb-2">
                Modalidades de Participación
            </h2>
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="bg-white p-6 rounded-sm border border-neutral-200 shadow-sm">
                    <h3 class="font-semibold text-lg text-seu mb-1">Proyectos PEII</h3>
                    <p class="text-sm text-neutral-600">Proyectos de Extensión de Interés Institucional</p>
                </div>
                <div class="bg-white p-6 rounded-sm border border-neutral-200 shadow-sm">
                    <h3 class="font-semibold text-lg text-seu mb-1">Proyectos PEIS</h3>
                    <p class="text-sm text-neutral-600">Proyectos de Extensión de Interés Social</p>
                </div>
                <div class="bg-white p-6 rounded-sm border border-neutral-200 shadow-sm">
                    <h3 class="font-semibold text-lg text-seu mb-1">Proyectos PED</h3>
                    <p class="text-sm text-neutral-600">Proyectos de Extensión y Docencia</p>
                </div>
                <div class="bg-white p-6 rounded-sm border border-neutral-200 shadow-sm">
                    <h3 class="font-semibold text-lg text-neutral-700 mb-1">Histórico</h3>
                    <p class="text-sm text-neutral-600">Proyectos Anteriores y archivo institucional</p>
                </div>
            </div>
        </section>

        <section class="mb-20">
            <h2 class="text-2xl font-semibold font-sans text-ink mb-6 border-b border-neutral-200 pb-2">
                Clasificación de proyectos
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Educación</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Hábitat</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Salud</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Derechos humanos</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Sistema productivo</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Sistema social y solidario</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Género</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center">
                    <span class="font-medium text-sm text-neutral-800">Cuidado del medio ambiente</span>
                </div>
                <div class="bg-neutral-50 border border-neutral-200 p-4 rounded-sm text-center col-span-2 sm:col-span-1">
                    <span class="font-medium text-sm text-neutral-800">Energías renovables</span>
                </div>
            </div>
        </section>

        <div class="border-t border-neutral-200 pt-12">
            <h2 class="text-2xl font-semibold font-sans text-ink mb-8">Proyectos vigentes</h2>
            
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                    $terminos = get_the_terms( get_the_ID(), 'tipo_proyecto' );
                    $tipo_proyecto = ( $terminos && ! is_wp_error( $terminos ) ) ? $terminos[0]->name : '';
                ?>
                    <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">
                        
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="aspect-[16/10] bg-neutral-100 overflow-hidden relative border-b border-neutral-200">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover absolute inset-0' ) ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="flex flex-1 flex-col p-6">
                            <?php if ( $tipo_proyecto ) : ?>
                                <span class="text-xs font-semibold uppercase tracking-wider text-seu mb-2">
                                    <?php echo esc_html( $tipo_proyecto ); ?>
                                </span>
                            <?php endif; ?>
                            
                            <h3 class="text-xl font-semibold leading-snug mb-3">
                                <a href="<?php the_permalink(); ?>" class="hover:text-seu transition">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            
                            <div class="flex-1 text-sm text-neutral-600 line-clamp-3 mb-6">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="mt-auto inline-flex items-center font-medium text-seu underline-offset-4 hover:underline">
                                Ver proyecto
                            </a>
                        </div>
                    </article>
                <?php endwhile; else : ?>
                    <p class="text-neutral-500 text-sm col-span-full">No hay proyectos publicados en este momento.</p>
                <?php endif; ?>
            </div>
            

            <div class="mt-12">
                <?php the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => 'Anterior',
                    'next_text' => 'Siguiente',
                ) ); ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>