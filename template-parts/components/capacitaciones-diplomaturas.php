<?php

/**
 * Componente: Capacitaciones y Diplomaturas
 */

$args_capacitaciones = array(
    'post_type'      => 'capacitacion',
    'posts_per_page' => 4,
    'post_status'    => 'publish',
);
$query_capacitaciones = new WP_Query($args_capacitaciones);

$args_diplomaturas = array(
    'post_type'      => 'diplomatura',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
);
$query_diplomaturas = new WP_Query($args_diplomaturas);
?>

<section class="border-t border-neutral-200 bg-white py-6 text-ink" style="font-family: 'Poppins', sans-serif;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <div id="capacitaciones">
            <div class="mb-10 flex flex-col justify-between gap-4 border-b border-neutral-300 pb-6 sm:flex-row sm:items-end">
                <div>

                    <h2 class="mt-2 font-sans text-3xl font-light tracking-tight text-ink sm:text-4xl lg:text-5xl">
                        Capacitaciones
                    </h2>
                </div>
                <a href="<?php echo esc_url(home_url('/capacitaciones')); ?>" class="group inline-flex items-center gap-1.5 border-b border-neutral-900 pb-0.5 text-sm font-medium text-ink transition hover:border-seu hover:text-seu">
                    <span>Ver todas</span>
                    <span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">north_east</span>
                </a>
            </div>

            <?php if ($query_capacitaciones->have_posts()) : ?>
                <div class="grid grid-cols-1 gap-px border border-neutral-200 bg-neutral-200 sm:grid-cols-2 lg:grid-cols-4">
                    <?php
                    while ($query_capacitaciones->have_posts()) : $query_capacitaciones->the_post();
                        $sede              = get_field('sede');
                        $sin_inscripciones = get_field('sin_inscripciones');
                    ?>
                        <article class="group relative flex flex-col bg-white transition-colors duration-300 hover:bg-neutral-50">

                            <div class="relative aspect-[2/3] w-full overflow-hidden border-b border-neutral-200 bg-neutral-100 p-3">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'h-full w-full object-contain transition duration-500 ')); ?>
                                <?php else : ?>
                                    <div class="flex h-full w-full items-center justify-center text-neutral-300">
                                        <span class="material-symbols-outlined text-[40px] [font-variation-settings:'wght'_200]">school</span>
                                    </div>
                                <?php endif; ?>

                                <?php if ($sin_inscripciones) : ?>
                                    <span class="absolute top-3 left-3 bg-neutral-950 px-2.5 py-1 text-[10px] font-medium uppercase tracking-wider text-white">
                                        Cupo lleno
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-1 flex-col p-5">
                                <h3 class="text-base font-medium leading-snug text-ink transition-colors group-hover:text-seu">
                                    <a class="focus:outline-none" href="<?php the_permalink(); ?>">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <?php if ($sede) : ?>
                                    <p class="mt-3 flex items-center gap-1.5 text-base text-neutral-500">
                                        <span class="material-symbols-outlined text-[15px] text-neutral-400 [font-variation-settings:'wght'_300]">location_on</span>
                                        <span><?php echo esc_html($sede); ?></span>
                                    </p>
                                <?php endif; ?>

                                <div class="mt-auto flex items-center justify-between border-t border-neutral-200 pt-4 text-base">
                                    <?php if ($sin_inscripciones) : ?>
                                        <span class="font-medium uppercase tracking-wider text-neutral-400">Inscripción cerrada</span>
                                    <?php else : ?>
                                        <span class="font-medium text-ink transition-colors group-hover:text-seu">Inscribirse</span>
                                        <span class="material-symbols-outlined text-[16px] text-neutral-400 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php else : ?>
                <div class="border border-neutral-200 bg-neutral-50 p-8 text-sm text-neutral-500">
                    Próximamente nuevas capacitaciones.
                </div>
            <?php endif; ?>
        </div>

        <div id="diplomaturas" class="mt-24">
            <div class="mb-10 flex flex-col justify-between gap-4 border-b border-neutral-300 pb-6 sm:flex-row sm:items-end">

                <h2 class="mt-2 font-sans text-3xl font-light tracking-tight text-ink sm:text-4xl lg:text-5xl">
                    Diplomaturas
                </h2>

                <a href="<?php echo esc_url(home_url('/diplomaturas')); ?>" class="group inline-flex items-center gap-1.5 border-b border-neutral-900 pb-0.5 text-sm font-medium text-ink transition hover:border-seu hover:text-seu">
                    <span>Ver todas</span>
                    <span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">north_east</span>
                </a>
            </div>

            <?php if ($query_diplomaturas->have_posts()) : ?>
                <div class="grid grid-cols-1 gap-px border border-neutral-200 bg-neutral-200 sm:grid-cols-2 lg:grid-cols-3">
                    <?php
                    while ($query_diplomaturas->have_posts()) : $query_diplomaturas->the_post();
                        $terminos         = get_the_terms(get_the_ID(), 'categoria_formacion');
                        $categoria_nombre = ($terminos && !is_wp_error($terminos)) ? $terminos[0]->name : '';
                    ?>
                        <article class="group relative flex flex-col bg-white transition-colors duration-300 hover:bg-neutral-50">

                            <div class="relative aspect-[16/9] w-full overflow-hidden border-b border-neutral-200 bg-neutral-100">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'h-full w-full object-cover transition duration-500  ')); ?>
                                <?php else : ?>
                                    <div class="flex h-full w-full items-center justify-center text-neutral-300">
                                        <span class="material-symbols-outlined text-[40px] [font-variation-settings:'wght'_200]">workspace_premium</span>
                                    </div>
                                <?php endif; ?>

                                <?php if ($categoria_nombre) : ?>
                                    <span class="absolute top-3 left-3 bg-neutral-950 px-2.5 py-1 text-[10px] font-medium uppercase tracking-wider text-white">
                                        <?php echo esc_html($categoria_nombre); ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-1 flex-col p-6">
                                <h3 class="text-lg font-medium leading-snug text-ink transition-colors group-hover:text-seu">
                                    <a class="focus:outline-none" href="<?php the_permalink(); ?>">
                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div class="mt-2.5 mb-6 line-clamp-2 text-sm leading-relaxed text-neutral-500">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="mt-auto flex items-center justify-between border-t border-neutral-200 pt-4 text-base">
                                    <span class="font-medium text-ink transition-colors group-hover:text-seu">Ver diplomatura</span>
                                    <span class="material-symbols-outlined text-[16px] text-neutral-400 transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 group-hover:text-seu">north_east</span>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php else : ?>
                <div class="border border-neutral-200 bg-neutral-50 p-8 text-sm text-neutral-500">
                    Próximamente nuevas diplomaturas.
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>