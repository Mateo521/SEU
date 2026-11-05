<?php
/**
 * Componente: Capacitaciones y diplomaturas (Glassmorphism & Compacto)
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

<!-- Sección principal con fondo gris suave y destellos azules para el efecto Glass -->
<section class="relative overflow-hidden bg-slate-50 py-12">
    <!-- Destellos decorativos de fondo -->
    <div class="pointer-events-none absolute -top-40 -right-40 h-96 w-96 rounded-full bg-blue-300/20 blur-3xl"></div>
    <div class="pointer-events-none absolute top-40 -left-20 h-72 w-72 rounded-full bg-slate-300/30 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- ==========================================
             SECCIÓN 1: CAPACITACIONES
             ========================================== -->
        <div id="capacitaciones">
            <div class="mb-6 flex items-end justify-between border-b border-slate-200/60 pb-3">
                <h2 class="text-2xl font-semibold tracking-tight text-slate-800 sm:text-3xl">Capacitaciones</h2>
                <a href="<?php echo esc_url(home_url('/capacitaciones')); ?>" class="text-sm font-medium text-blue-600 underline-offset-4 hover:underline">Ver todas</a>
            </div>

            <!-- Grilla compacta de 4 columnas -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php
                if ($query_capacitaciones->have_posts()) :
                    while ($query_capacitaciones->have_posts()) : $query_capacitaciones->the_post();
                        $sede = get_field('sede');
                        $sin_inscripciones = get_field('sin_inscripciones');
                ?>
                        <!-- Tarjeta Glass -->
                        <article class="group flex flex-col overflow-hidden rounded border border-white/60 bg-white/40 shadow-sm backdrop-blur-md transition-all duration-300  hover:bg-white/60 hover:shadow-md hover:border-blue-200/50">
                            
                            <!-- Imagen Duotono Azul -->
                            <div class="relative aspect-[2/3] w-full overflow-hidden">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'absolute inset-0 h-full w-full object-contain    transition duration-500  group-hover:opacity-80')); ?>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-1 flex-col p-4">
                                <h3 class="mb-2 text-base font-semibold leading-snug text-slate-800 transition group-hover:text-blue-700">
                                    <a class="focus:outline-none" href="<?php the_permalink(); ?>">
                                        <span class="absolute inset-0"></span>
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <?php if ($sede) : ?>
                                    <p class="mb-3 text-xs text-slate-500">Sede: <?php echo esc_html($sede); ?></p>
                                <?php endif; ?>

                                <div class="mt-auto border-t border-slate-200/50 pt-3">
                                    <?php if ($sin_inscripciones) : ?>
                                        <span class="text-[11px] font-bold uppercase tracking-wide text-slate-400">Cupo lleno</span>
                                    <?php else : ?>
                                        <span class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-600 transition group-hover:text-blue-800">
                                            Inscribirse 
                                            <svg class="h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                                            </svg>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="col-span-full text-sm text-slate-500">Próximamente nuevas capacitaciones.</p>
                <?php endif; ?>
            </div>
        </div>

        <div id="diplomaturas" class="mt-16">
            <div class="mb-6 flex items-end justify-between border-b border-slate-200/60 pb-3">
                <h2 class="text-2xl font-semibold tracking-tight text-slate-800 sm:text-3xl">Diplomaturas</h2>
                <a href="<?php echo esc_url(home_url('/diplomaturas')); ?>" class="text-sm font-medium text-blue-600 underline-offset-4 hover:underline">Ver todas</a>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php
                if ($query_diplomaturas->have_posts()) :
                    while ($query_diplomaturas->have_posts()) : $query_diplomaturas->the_post();
                        $terminos = get_the_terms(get_the_ID(), 'categoria_formacion');
                        $categoria_nombre = ($terminos && !is_wp_error($terminos)) ? $terminos[0]->name : '';
                ?>

                        <article class="group flex flex-col overflow-hidden rounded border border-white/60 bg-white/40 shadow-sm backdrop-blur-md transition-all duration-300  hover:bg-white/60 hover:shadow-md hover:border-blue-200/50">

                            <div class="relative w-full overflow-hidden    aspect-[16/9]">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium_large', array('class' => 'absolute inset-0 h-full w-full object-cover  transition duration-500  group-hover:opacity-80')); ?>
                                <?php endif; ?>

                                <?php if ($categoria_nombre) : ?>
                                    <span class="absolute top-3 left-3 rounded-md bg-white/80 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-blue-800 shadow-sm backdrop-blur-sm">
                                        <?php echo esc_html($categoria_nombre); ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="flex flex-1 flex-col p-5">
                                <h3 class="mb-2 text-lg font-semibold leading-tight text-slate-800 transition group-hover:text-blue-700">
                                    <a class="focus:outline-none" href="<?php the_permalink(); ?>">
                                        <span class="absolute inset-0"></span>
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div class="line-clamp-2 text-xs text-slate-500">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="mt-4 flex items-center text-xs font-semibold text-blue-600 transition group-hover:text-blue-800">
                                    Ver diplomatura 
                                    <svg class="ml-1 h-3.5 w-3.5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M13 6l6 6-6 6"></path>
                                    </svg>
                                </div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <p class="col-span-full text-sm text-slate-500">Próximamente nuevas diplomaturas.</p>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>