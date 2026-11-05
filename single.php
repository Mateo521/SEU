<?php
/**
 * Plantilla individual
 */
get_header();
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <?php while (have_posts()) : the_post();
            $terminos = get_the_terms(get_the_ID(), 'categoria_noticia');
            $cat_nombre = ($terminos && !is_wp_error($terminos)) ? $terminos[0]->name : '';
        ?>
            <article class="bg-white rounded-sm shadow-sm border border-neutral-200 overflow-hidden">


                <div class="p-8 sm:p-12 border-b border-neutral-200 bg-neutral-50/50">
                    <div class="flex items-center gap-4 text-xs font-semibold uppercase tracking-wider text-seu mb-4">
                        <span>Noticia Institucional</span>
                        <?php if ($cat_nombre) : ?>
                            <span>&bull;</span>
                            <span><?php echo esc_html($cat_nombre); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="font-sans text-3xl font-semibold sm:text-4xl lg:text-5xl text-ink leading-tight mb-4">
                        <?php the_title(); ?>
                    </h1>

                    <p class="text-sm text-neutral-500">
                        Publicado el <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('d \d\e F \d\e Y'); ?></time>
                    </p>
                </div>


                <div class="grid lg:grid-cols-3 gap-8 p-8 sm:p-12">


                    <div class="lg:col-span-2 prose prose-neutral max-w-none text-neutral-700">
                        <?php the_content(); ?>


                        <div class="mt-12 pt-8 border-t border-neutral-200">
                            <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="inline-flex items-center gap-2 font-medium text-seu hover:underline">
                                <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 12H5M12 19l-7-7 7-7"></path></svg>
                                Volver a Noticias
                            </a>
                        </div>
                    </div>


                    <aside class="space-y-6">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-[4/3] bg-neutral-100 rounded-sm overflow-hidden border border-neutral-200">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                            </div>
                        <?php endif; ?>

                        <div class="bg-neutral-50 rounded-sm border border-neutral-200 p-6">
                            <h3 class="text-lg font-semibold text-ink mb-4 border-b border-neutral-200 pb-2">Información</h3>
                            <dl class="space-y-4 text-sm">
                                <div>
                                    <dt class="font-semibold text-ink">Fecha de publicación</dt>
                                    <dd class="text-neutral-600 mt-1"><?php echo get_the_date('d/m/Y'); ?></dd>
                                </div>
                                <?php if ($cat_nombre): ?>
                                    <div>
                                        <dt class="font-semibold text-ink">Categoría</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($cat_nombre); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <div>
                                    <dt class="font-semibold text-ink">Compartir</dt>
                                    <dd class="text-neutral-600 mt-1 text-xs text-neutral-500">
                                        Copia el enlace de esta página para difundir la gacetilla institucional.
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </aside>

                </div>
            </article>
        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>