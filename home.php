<?php

/**
 * Plantilla: Noticias
 */
get_header();
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <header class="mb-12 border-b border-neutral-200 pb-6">
            <span class="inline-block rounded-sm border border-seu px-3 py-1 text-xs font-semibold uppercase tracking-wider text-seu mb-4">
                Secretaría de Extensión Universitaria
            </span>
            <h1 class="font-sans text-2xl font-semibold sm:text-3xl text-ink leading-tight mb-4">
                Noticias
            </h1>
            <p class="text-neutral-600 max-w-3xl leading-relaxed">
                Últimas novedades, convocatorias, actividades culturales e institucionales de nuestra secretaría.
            </p>
        </header>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php if (have_posts()) : while (have_posts()) : the_post();

                    $terminos = get_the_terms(get_the_ID(), 'categoria_noticia');
                    $cat_nombre = ($terminos && ! is_wp_error($terminos)) ? $terminos[0]->name : '';
            ?>
                    <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-[16/10] bg-neutral-100 overflow-hidden relative border-b border-neutral-200">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover absolute inset-0')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="flex flex-1 flex-col p-6">
                            <div class="flex items-center justify-between text-xs text-neutral-500 mb-2">
                                <?php if ($cat_nombre) : ?>
                                    <span class="font-semibold uppercase tracking-wider text-seu">
                                        <?php echo esc_html($cat_nombre); ?>
                                    </span>
                                <?php endif; ?>
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('d M, Y'); ?></time>
                            </div>

                            <h3 class="text-xl font-semibold leading-snug mb-3">
                                <a href="<?php the_permalink(); ?>" class="hover:text-seu transition">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="flex-1 text-sm text-neutral-600 line-clamp-3 mb-6">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="mt-auto inline-flex items-center font-medium text-seu underline-offset-4 hover:underline">
                                Leer noticia completa
                            </a>
                        </div>
                    </article>
                <?php endwhile;
            else : ?>
                <p class="text-neutral-500 text-sm col-span-full">No hay noticias publicadas en este momento.</p>
            <?php endif; ?>
        </div>

        <div class="mt-12">
            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => 'Anterior',
                'next_text' => 'Siguiente',
            )); ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>