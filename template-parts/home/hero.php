<?php

/**
 * Componente: Hero editorial + carruseles
 */

$hoy = date('Ymd');

$query_noticias  = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 8));
$query_formacion = new WP_Query(array('post_type' => array('capacitacion', 'diplomatura'), 'posts_per_page' => 8));

$query_destacado = new WP_Query(array(
    'post_type'      => 'evento_agenda',
    'posts_per_page' => 1,
    'meta_key'       => 'fecha_evento',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'meta_query'     => array(
        array(
            'key'     => 'fecha_evento',
            'value'   => $hoy,
            'compare' => '>=',
            'type'    => 'DATE'
        )
    )
));

if (!$query_destacado->have_posts()) {
    $query_destacado = new WP_Query(array(
        'post_type'      => array('capacitacion', 'post'),
        'posts_per_page' => 1,
    ));
}

$destacado_titulo = 'Agenda y Actividades SEU';
$destacado_meta   = 'Consultá el cronograma vigente';
$destacado_link   = home_url('/agendas');
$destacado_img    = '';

if ($query_destacado->have_posts()) {
    $query_destacado->the_post();
    $destacado_titulo = get_the_title();
    $destacado_link   = get_permalink();
    $destacado_img    = get_the_post_thumbnail_url(get_the_ID(), 'large');

    $fecha_raw = get_field('fecha_evento');
    $hora      = get_field('hora_evento');
    if ($fecha_raw) {
        $destacado_meta = date_i18n('j \d\e M', strtotime($fecha_raw)) . ($hora ? ', ' . $hora : '');
    } else {
        $destacado_meta = get_the_date('j \d\e F, Y');
    }
    wp_reset_postdata();
}
?>

<section class="overflow-hidden bg-neutral-950 text-white">

    <div class="relative flex min-h-screen flex-col justify-between bg-neutral-950">

        <div class="relative flex flex-1 flex-col justify-between px-6 py-8 sm:px-10 lg:px-14 lg:py-10 min-h-[70vh]">


            <video
                class="absolute inset-0 z-0 h-full w-full object-cover"
                poster="https://www.unsl.edu.ar/assets/imagenes/poster.webp"
                muted
                loop
                autoplay
                playsinline
                preload="metadata"
                aria-label="Video de presentación institucional"
                fetchpriority="high">
                <source src="https://www.unsl.edu.ar/assets/videos/video-4-mb.mp4" media="(max-width: 768px)" type="video/mp4">
                <source src="https://www.unsl.edu.ar/assets/videos/video-4.mp4" media="(min-width: 769px)" type="video/mp4">
            </video>


            <div class="absolute inset-0 z-10 bg-gradient-to-r from-black/75 via-black/35 to-black/65" aria-hidden="true"></div>
            <div class="absolute inset-0 z-10 bg-gradient-to-t from-black/60 via-transparent to-black/30" aria-hidden="true"></div>


            <div class="relative z-20 my-auto flex flex-col justify-end gap-10 py-14 lg:flex-row lg:items-end lg:py-16">

                <!--div class="max-w-3xl">
                    <h1 class="font-sans text-4xl font-light  tracking-tight text-white sm:text-5xl lg:text-2xl xl:text-5xl">
                        Consolidar la relación entre la Universidad y la Sociedad
                    </h1>
                    <p class="mt-6 max-w-xl text-lg font-light leading-relaxed text-neutral-200 sm:text-xl">
                        Formación, cultura, territorio y transferencia de conocimientos desde la UNSL.
                    </p>
                </div-->

                <div class="flex flex-col items-start gap-8 lg:items-end lg:text-right">
                    <nav aria-label="Accesos rápidos" class="flex flex-wrap gap-x-6 gap-y-2 text-sm font-medium text-neutral-200 lg:flex-col lg:gap-y-2.5">
                        <a href="#noticias" class="transition hover:text-white">Noticias</a>
                        <a href="<?php echo home_url('/capacitaciones'); ?>" class="transition hover:text-white">Formación</a>
                        <a href="<?php echo home_url('/agendas'); ?>" class="transition hover:text-white">Agendas</a>
                        <a href="<?php echo home_url('/centro-cultural'); ?>" class="transition hover:text-white">Centro Cultural</a>
                    </nav>

                    <a href="#noticias" class="group inline-flex items-center gap-3 text-sm font-medium text-white transition hover:text-seu">
                        <span>Explorá novedades</span>
                        <span class="flex size-9 items-center justify-center rounded-full bg-white text-neutral-950 transition group-hover:bg-seu group-hover:text-white">
                            <span class="material-symbols-outlined text-[18px]">south_east</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>

        <div class="relative z-20 grid grid-cols-1 border-t border-white/10 lg:grid-cols-12">

            <div class="grid grid-cols-1 bg-black sm:grid-cols-12 lg:col-span-5">
                <div class="relative hidden sm:block sm:col-span-4 bg-neutral-900">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/images/UNSL_-5-7.jpg"
                        alt="Centro Cultural UNSL"
                        class="h-full w-full object-cover">
                </div>
                <div class="flex flex-col justify-between p-6 sm:col-span-8 sm:p-8">
                    <span class="font-serif text-4xl leading-none text-white/80" aria-hidden="true">&ldquo;</span>

                    <p class="mt-3 text-sm leading-relaxed text-neutral-300">
                        Promueve, auspicia y gestiona experiencias de formación, actividades artísticas y académicas, y la ejecución de proyectos que propician la transferencia de conocimientos y herramientas a partir del trabajo de campo de integrantes de la comunidad universitaria, en respuesta a necesidades y problemáticas de distintos sectores de la sociedad.
                    </p>
                </div>
            </div>

            <a href="<?php echo esc_url($destacado_link); ?>" class="group relative min-h-[14rem] overflow-hidden bg-neutral-900 lg:col-span-3">
                <?php if ($destacado_img) : ?>
                    <img
                        src="<?php echo esc_url($destacado_img); ?>"
                        alt="<?php echo esc_attr($destacado_titulo); ?>"
                        class="h-full w-full object-cover transition-transform duration-500 group-">
                <?php else : ?>
                    <img
                        src="https://www.unsl.edu.ar/assets/imagenes/poster.webp"
                        alt="Actividades SEU"
                        class="h-full w-full object-cover transition-transform duration-500 group-">
                <?php endif; ?>
                <div class="absolute inset-0 flex items-center justify-center bg-black/25 transition group-hover:bg-black/40">
                    <span class="flex size-12 items-center justify-center rounded-full border border-white/70 bg-black/40 text-white backdrop-blur-sm transition group-hover:scale-110">
                        <span class="material-symbols-outlined text-[24px]">arrow_outward</span>
                    </span>
                </div>
            </a>

            <div class="relative flex flex-col justify-between bg-white p-6 text-neutral-950 sm:p-8 bg-svg-politicas lg:col-span-4">
                <div>
                    <span class="text-base font-semibold uppercase tracking-wider text-seu">Próximo destacado</span>
                    <h2 class="mt-2 font-sans text-2xl font-normal leading-tight tracking-tight text-neutral-950 sm:text-3xl line-clamp-2">
                        <?php echo esc_html($destacado_titulo); ?>
                    </h2>
                    <p class="mt-2 text-sm text-neutral-500">
                        <?php echo esc_html($destacado_meta); ?>
                    </p>
                </div>

                <div class="mt-6 flex items-end justify-between">
                    <a href="<?php echo esc_url($destacado_link); ?>" class="inline-flex items-center gap-1.5 border-b border-neutral-950 pb-0.5 text-sm font-medium text-neutral-950 transition hover:border-seu hover:text-seu">
                        Ver detalle
                        <!--span class="material-symbols-outlined text-[16px]">north_east</span-->
                    </a>
                    <!--span class="material-symbols-outlined text-[36px] text-neutral-900 [font-variation-settings:'wght'_200]" aria-hidden="true">asterisk</span-->
                </div>
            </div>

        </div>
    </div>


    <!--div id="noticias" class="mx-auto max-w-7xl space-y-16 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
        <?php if ($query_noticias->have_posts()) : ?>
            <div>
                <div class="mb-6 flex items-center justify-between">
                    <h2 class="font-sans text-2xl font-semibold text-white tracking-tight">Noticias Institucionales</h2>
                    <a href="<?php echo home_url('/noticias'); ?>" class="text-sm font-medium text-neutral-300 hover:text-white transition">Ver todas &rarr;</a>
                </div>

                <div class="swiper swiper-seccion relative px-2">
                    <div class="swiper-wrapper pb-4">
                        <?php while ($query_noticias->have_posts()) : $query_noticias->the_post(); ?>
                            <div class="swiper-slide !w-[85vw] sm:!w-[22rem] h-auto">
                                <a href="<?php the_permalink(); ?>" class="group flex h-full flex-col rounded bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white/10 hover:border-white/30 transition-all duration-300 overflow-hidden">
                                    <div class="relative h-48 w-full overflow-hidden bg-neutral-800 shrink-0">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-500')); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="flex flex-1 flex-col p-5">
                                        <h3 class="font-sans text-lg font-semibold leading-snug text-white group-hover:text-seu transition-colors line-clamp-2">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="mt-2 text-sm text-neutral-300 line-clamp-2">
                                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>

                    <div class="swiper-button-prev !text-white !left-0 after:!text-2xl drop-shadow-md"></div>
                    <div class="swiper-button-next !text-white !right-0 after:!text-2xl drop-shadow-md"></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($query_formacion->have_posts()) : ?>
            <div>
                <div class="mb-6 flex items-center justify-between">
                    <h2 class="font-sans text-2xl font-semibold text-white tracking-tight">Formación</h2>
                    <a href="<?php echo home_url('/capacitaciones'); ?>" class="text-sm font-medium text-neutral-300 hover:text-white transition">Ver todas &rarr;</a>
                </div>

                <div class="swiper swiper-seccion relative px-2">
                    <div class="swiper-wrapper pb-4">
                        <?php while ($query_formacion->have_posts()) : $query_formacion->the_post();
                            $tipo = get_post_type();
                            $badge = ($tipo === 'diplomatura') ? 'Diplomatura' : 'Capacitación';
                        ?>
                            <div class="swiper-slide !w-[85vw] sm:!w-[22rem] h-auto">
                                <a href="<?php the_permalink(); ?>" class="group flex h-full flex-col rounded bg-white/5 backdrop-blur-md border border-white/10 hover:bg-white/10 hover:border-white/30 transition-all duration-300 overflow-hidden">
                                    <div class="relative h-48 w-full overflow-hidden bg-neutral-800 shrink-0">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover transition-transform duration-500')); ?>
                                        <?php endif; ?>
                                        <div class="absolute top-3 left-3">
                                            <span class="rounded-sm bg-seu/90 px-2 py-1 text-base font-bold uppercase tracking-wider text-white backdrop-blur-md shadow-sm">
                                                <?php echo $badge; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-1 flex-col p-5">
                                        <h3 class="font-sans text-lg font-semibold leading-snug text-white group-hover:text-seu transition-colors line-clamp-2">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="mt-4 flex items-center text-sm font-medium text-neutral-400 group-hover:text-white transition-colors">
                                            Inscripciones abiertas
                                            <span class="material-symbols-outlined ml-1 text-[16px]">chevron_right</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <div class="swiper-button-prev !text-white !left-0 after:!text-2xl drop-shadow-md"></div>
                    <div class="swiper-button-next !text-white !right-0 after:!text-2xl drop-shadow-md"></div>
                </div>
            </div>
        <?php endif; ?>
    </div-->




</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swipersSecciones = document.querySelectorAll('.swiper-seccion');
        if (swipersSecciones.length === 0) return;

        swipersSecciones.forEach(container => {
            const btnNext = container.querySelector('.swiper-button-next');
            const btnPrev = container.querySelector('.swiper-button-prev');

            new Swiper(container, {
                slidesPerView: 'auto',
                spaceBetween: 24,
                grabCursor: true,
                navigation: {
                    nextEl: btnNext,
                    prevEl: btnPrev,
                },
            });
        });
    });
</script>