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

        <div class="relative flex flex-1 flex-col  justify-end px-6 py-8 sm:px-10 lg:px-14 lg:py-10 min-h-[70vh]">


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


            <div class="relative max-w-7xl mx-auto w-full z-20 my-2 flex flex-col justify-between gap-10 lg:flex-row lg:items-end py-3">

                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="group w-full max-w-md">
                    <label for="hero-busqueda" class="mb-3 block text-xs font-semibold uppercase tracking-[0.22em] text-white/75">
                        Buscador
                    </label>
                    <div class="flex items-center rounded border border-white/25 bg-black/35 p-1.5 shadow-2xl backdrop-blur-md transition focus-within:border-white/70 focus-within:bg-black/55">
                        <span class="material-symbols-outlined ml-3 text-[22px] text-white/75" aria-hidden="true">search</span>
                        <input
                            id="hero-busqueda"
                            type="search"
                            name="s"
                            value="<?php echo esc_attr(get_search_query()); ?>"
                            placeholder="¿Qué estás buscando?"
                            autocomplete="off"
                            class="min-w-0 flex-1 bg-transparent px-3 py-2.5 text-base text-white outline-none placeholder:text-white/60">
                        <button type="submit" class="flex size-11 shrink-0 items-center justify-center rounded bg-white text-neutral-950 transition hover:bg-seu hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black" aria-label="Buscar">
                            <span class="material-symbols-outlined text-[21px]" aria-hidden="true">arrow_forward</span>
                        </button>
                    </div>
                </form>

                <div class="flex flex-col items-start gap-8 lg:items-end lg:text-right">
                    <nav aria-label="Accesos rápidos" class="flex flex-wrap gap-x-6 gap-y-2 text-sm font-medium text-neutral-200 lg:flex-col lg:gap-y-2.5">
                        <a href="#noticias" class="transition hover:text-white">Noticias</a>
                        <a href="<?php echo home_url('/capacitaciones'); ?>" class="transition hover:text-white">Formación</a>
                        <a href="<?php echo home_url('/agendas'); ?>" class="transition hover:text-white">Agendas</a>
                        <a href="<?php echo home_url('/centro-cultural'); ?>" class="transition hover:text-white">Centro Cultural</a>
                    </nav>

                    <a href="#noticias" class="group inline-flex items-center gap-3 text-sm font-medium text-white transition hover:text-seu">
                        <span>Explorá novedades</span>
                        <span class="flex size-9 items-center justify-center rounded bg-white text-neutral-950 transition group-hover:bg-seu group-hover:text-white">
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
                <div class="absolute inset-0 flex items-end justify-end p-3 bg-black/25 transition group-hover:bg-black/40">
                    <span class="flex size-12 items-center justify-center rounded border border-white/70 bg-black/40 text-white backdrop-blur-sm transition group-hover:scale-110">
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