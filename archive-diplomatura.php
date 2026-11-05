<?php
/**
 *  muestra todas las diplomaturas 
 */
get_header(); 
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <header class="mb-12 border-b border-neutral-200 pb-6">
            <h1 class="font-sans text-4xl font-semibold sm:text-5xl text-seu">Diplomaturas</h1>
            <p class="mt-4 text-lg text-neutral-600 max-w-3xl">Trayectos formativos de pregrado y posgrado con certificación de la Universidad Nacional de San Luis, orientados al desarrollo territorial y profesional.</p>
        </header>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                
                
                $terminos = get_the_terms( get_the_ID(), 'categoria_formacion' );
                $categoria_nombre = ( $terminos && ! is_wp_error( $terminos ) ) ? $terminos[0]->name : '';
            ?>
                <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu shadow-sm hover:shadow-md">
                    
                    <div class="aspect-[16/10] bg-neutral-200 overflow-hidden relative border-b border-neutral-200">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover absolute inset-0 transition duration-300' ) ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    
                    <div class="flex flex-1 flex-col p-6">
                        <?php if ( $categoria_nombre ) : ?>
                            <span class="text-xs font-semibold uppercase tracking-wider text-seu mb-2">
                                <?php echo esc_html( $categoria_nombre ); ?>
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
                        
                        <a href="<?php the_permalink(); ?>" class="mt-auto inline-flex items-center gap-2 font-medium text-seu underline-offset-4 hover:underline">
                            Conocer más <svg class="size-4" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
                        </a>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p class="text-neutral-500 text-sm">No hay diplomaturas publicadas en este momento.</p>
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