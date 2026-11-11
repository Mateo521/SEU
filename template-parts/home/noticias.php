<?php

/**
 * Componente: Noticias destacadas
 */
?>
<section id="noticias" class="mx-auto max-w-7xl px-4 py-20 sm:px-6 lg:px-8">
    <div class="mb-10 flex items-end justify-between border-b border-neutral-200 pb-4">
        <h2 class="font-sans text-2xl font-semibold sm:text-3xl">Noticias SEU</h2>
        <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="text-sm font-medium text-seu underline-offset-4 hover:underline">Ver todas</a>
    </div>
    <?php
    $noticias_query = new WP_Query([
        'post_type'           => 'post',
        'post_status'         => 'publish',
        'posts_per_page'      => 4,
        'ignore_sticky_posts' => true,
    ]);

    if ($noticias_query->have_posts()) :
        $noticias_query->the_post();
        $categorias = get_the_category();
        ?>
        <div class="grid gap-10 lg:grid-cols-5">
            <article class="group relative isolate flex min-h-[24rem] items-end overflow-hidden rounded-sm bg-neutral-800 lg:col-span-3">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'absolute inset-0 h-full w-full object-cover', 'alt' => '']); ?>
                <?php endif; ?>
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                <div class="relative z-10 p-6 text-white sm:p-8">
                    <span class="inline-block rounded-sm bg-seu px-2 py-1 text-xs font-semibold"><?php echo esc_html(!empty($categorias) ? $categorias[0]->name : __('Noticias', 'seu')); ?></span>
                    <h3 class="mt-3 max-w-lg font-sans text-2xl font-semibold leading-tight"><a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0 group-hover:underline underline-offset-4"><?php echo esc_html(get_the_title()); ?></a></h3>
                </div>
            </article>

            <div class="lg:col-span-2">
                <ul class="divide-y divide-neutral-200">
                    <?php while ($noticias_query->have_posts()) : $noticias_query->the_post(); ?>
                        <?php $categorias = get_the_category(); ?>
                        <li>
                            <article class="group flex gap-4 py-5 first:pt-0">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('thumbnail', ['class' => 'h-24 w-24 shrink-0 rounded-sm object-cover', 'alt' => '']); ?>
                                <?php else : ?>
                                    <div class="h-24 w-24 shrink-0 rounded-sm bg-neutral-200" aria-hidden="true"></div>
                                <?php endif; ?>
                                <div>
                                    <p class="text-sm font-medium text-seu"><?php echo esc_html(!empty($categorias) ? $categorias[0]->name : __('Noticias', 'seu')); ?></p>
                                    <h3 class="mt-1 font-semibold leading-snug"><a href="<?php the_permalink(); ?>" class="group-hover:text-seu"><?php echo esc_html(get_the_title()); ?></a></h3>
                                </div>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    <?php else : ?>
        <p><?php esc_html_e('Todavía no hay noticias para mostrar.', 'seu'); ?></p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</section>