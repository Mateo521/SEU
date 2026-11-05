<?php

/**
 * Componente: Capacitaciones y diplomaturas 
 */


$args_capacitaciones = array(
    'post_type'      => 'capacitacion',
    'posts_per_page' => 3,
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
<section class="border-y border-neutral-200 bg-paper py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <div id="capacitaciones">
            <div class="flex items-end justify-between border-b border-neutral-200 pb-4">
                <h2 class="font-sans text-3xl font-semibold sm:text-4xl">Capacitaciones</h2>
                <a href="<?php echo esc_url(home_url('/capacitaciones')); ?>" class="text-sm font-medium text-seu underline-offset-4 hover:underline">Ver todas</a>
            </div>

            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                if ($query_capacitaciones->have_posts()) :
                    while ($query_capacitaciones->have_posts()) : $query_capacitaciones->the_post();


                        $sede = get_field('sede');
                        $sin_inscripciones = get_field('sin_inscripciones');
                ?>
                        <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">

                            <div class="relative aspect-[4/5] overflow-hidden bg-neutral-100">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-contain absolute inset-0')); ?>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-1 flex-col p-6">
                                <h3 class="text-xl font-semibold leading-snug"><?php class_exists('ACF') ? the_title() : esc_html(get_the_title()); ?></h3>

                                <?php if ($sede) : ?>
                                    <p class="mt-2 text-sm text-neutral-600">Sede: <?php echo esc_html($sede); ?></p>
                                <?php endif; ?>


                                <?php if ($sin_inscripciones) : ?>
                                    <span class="mt-6 inline-flex w-fit items-center justify-center rounded-sm bg-neutral-200 px-4 py-2 text-sm font-semibold text-neutral-500 cursor-not-allowed">
                                        Cupo lleno
                                    </span>
                                <?php else : ?>

                                    <button class="mt-6 inline-flex w-fit items-center justify-center rounded-sm bg-seu px-4 py-2 text-sm font-semibold text-white hover:bg-seu-dark transition" data-open="modalCapacitacion">
                                        Inscribirse
                                    </button>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-neutral-500 text-sm">Próximamente nuevas capacitaciones.</p>
                <?php endif; ?>
            </div>
        </div>


        <div id="diplomaturas" class="mt-20">
            <div class="flex items-end justify-between border-b border-neutral-200 pb-4">
                <h2 class="font-sans text-3xl font-semibold sm:text-4xl">Diplomaturas</h2>
                <a href="<?php echo esc_url(home_url('/diplomaturas')); ?>" class="text-sm font-medium text-seu underline-offset-4 hover:underline">Ver todas</a>
            </div>

            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                if ($query_diplomaturas->have_posts()) :
                    while ($query_diplomaturas->have_posts()) : $query_diplomaturas->the_post();


                        $terminos = get_the_terms(get_the_ID(), 'categoria_formacion');
                        $categoria_nombre = ($terminos && ! is_wp_error($terminos)) ? $terminos[0]->name : '';
                ?>
                        <article class="flex flex-col rounded-sm border border-neutral-200 bg-white transition hover:border-seu">

                            <div class="relative aspect-[5/3] overflow-hidden bg-neutral-100">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-contain absolute inset-0')); ?>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-1 flex-col p-6">

                                <?php if ($categoria_nombre) : ?>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-seu mb-2">
                                        <?php echo esc_html($categoria_nombre); ?>
                                    </span>
                                <?php endif; ?>

                                <h3 class="text-xl font-semibold leading-snug"><?php the_title(); ?></h3>

                                <div class="mt-3 flex-1 text-sm text-neutral-600 line-clamp-2">
                                    <?php the_excerpt(); ?>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="mt-6 font-medium text-seu underline-offset-4 hover:underline">
                                    Ver diplomatura
                                </a>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="text-neutral-500 text-sm">Próximamente nuevas diplomaturas.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>