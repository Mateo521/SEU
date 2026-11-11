<?php
/**
 *  muestra todas las capacitaciones (/capacitaciones/)
 */
get_header(); 
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <header class="mb-12 border-b border-neutral-200 pb-6">
            <h1 class="font-sans text-3xl font-semibold sm:text-5xl text-seu">Capacitaciones</h1>
            <p class="mt-4 text-lg text-neutral-600 max-w-3xl">Explorá todos los cursos y talleres abiertos a la comunidad.</p>
        </header>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                $sede = get_field('sede');
                $sin_inscripciones = get_field('sin_inscripciones');
            ?>
                <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">
                    <div class="aspect-[3.2/4] bg-neutral-200 overflow-hidden relative">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-contain absolute inset-0' ) ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="flex flex-1 flex-col p-6">
                        <h3 class="text-xl font-semibold leading-snug">
                            <a href="<?php the_permalink(); ?>" class="hover:text-seu transition"><?php the_title(); ?></a>
                        </h3>
                        <?php if ( $sede ) : ?>
                            <p class="mt-2 text-sm text-neutral-600">Sede: <?php echo esc_html( $sede ); ?></p>
                        <?php endif; ?>
                        
                        <?php if ( $sin_inscripciones ) : ?>
                            <span class="mt-6 inline-flex w-fit items-center justify-center rounded-sm bg-neutral-200 px-4 py-2 text-sm font-semibold text-neutral-500 cursor-not-allowed">
                                Cupo lleno
                            </span>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="mt-6 inline-flex w-fit items-center justify-center rounded-sm bg-seu px-4 py-2 text-sm font-semibold text-white hover:bg-seu-dark transition">
                                Ver detalles
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p class="text-neutral-500 text-sm">No hay capacitaciones publicadas en este momento.</p>
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
</main>

<?php get_footer(); ?>