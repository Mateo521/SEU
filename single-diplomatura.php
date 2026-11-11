<?php

/**
 * Plantilla individual para cada Diplomatura
 */
get_header();
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <?php while (have_posts()) : the_post();

            $terminos = get_the_terms(get_the_ID(), 'categoria_formacion');
            $categoria_nombre = ($terminos && ! is_wp_error($terminos)) ? $terminos[0]->name : '';


            $campo_pdf = get_field('resolucion_pdf');
            $url_pdf = '';

            if (is_array($campo_pdf) && isset($campo_pdf['url'])) {
                $url_pdf = $campo_pdf['url'];
            } elseif (is_numeric($campo_pdf)) {
                $url_pdf = wp_get_attachment_url($campo_pdf);
            } elseif (is_string($campo_pdf)) {
                $url_pdf = $campo_pdf;
            }

        ?>
            <article class="overflow-hidden rounded-lg border border-neutral-200 bg-white shadow-sm">
                <div class="grid items-center gap-8 border-b border-neutral-200 bg-gradient-to-br from-white to-neutral-50 p-6 sm:gap-10 sm:p-10 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1.2fr)] lg:p-12">
                    <div class="order-2 lg:order-1">
                        <?php if ($categoria_nombre) : ?>
                            <span class="mb-5 inline-block rounded border border-neutral-200 bg-white px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-neutral-600 shadow-sm">
                                <?php echo esc_html($categoria_nombre); ?>
                            </span>
                        <?php endif; ?>
                        <h1 class="mb-6 font-sans text-xl font-semibold leading-tight text-ink sm:text-2xl lg:text-3xl">
                            <?php the_title(); ?>
                        </h1>
                        <?php if ($url_pdf) : ?>
                            <a href="<?php echo esc_url($url_pdf); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 rounded-md bg-seu px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-seu-dark focus:outline-none focus:ring-2 focus:ring-seu focus:ring-offset-2">
                                <svg class="size-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"></path>
                                </svg>
                                Descargar resolución
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="order-1 relative aspect-video overflow-hidden rounded-md border border-neutral-200 bg-neutral-100 shadow-sm lg:order-2">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', array('class' => 'absolute inset-0 h-full w-full object-contain')); ?>
                        <?php else : ?>
                            <div class="absolute inset-0 flex items-center justify-center text-sm text-neutral-500">
                                Imagen no disponible
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class=" max-w-7xl px-4 py-8 sm:px-12 sm:py-12">
                    <div class="prose prose-sm prose-neutral prose-a:text-seu hover:prose-a:text-seu-dark max-w-none text-neutral-700 sm:prose-base">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>