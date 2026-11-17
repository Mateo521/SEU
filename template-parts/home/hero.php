<?php

/**
 * Componente: Carruseles categorizados 
 */

$bg_query = new WP_Query(array(
    'post_type'      => array('post', 'capacitacion', 'evento_agenda'),
    'posts_per_page' => 1,
    'meta_key'       => '_thumbnail_id'
));
$bg_img = '';
if ($bg_query->have_posts()) {
    $bg_query->the_post();
    $bg_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
    wp_reset_postdata();
}

$query_noticias = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 8));
$query_formacion = new WP_Query(array('post_type' => array('capacitacion', 'diplomatura'), 'posts_per_page' => 8));
$query_agenda = new WP_Query(array('post_type' => 'evento_agenda', 'posts_per_page' => 8));
?>

<section class="relative bg-neutral-950 py-16 lg:py-24 text-white overflow-hidden">


    <?php if ($bg_img) : ?>
        <img src="<?php echo esc_url($bg_img); ?>" alt="" class="absolute inset-0 z-0 h-full w-full  object-cover opacity-20 blur-3xl" loading="lazy">
    <?php endif; ?>
    <div class="absolute inset-0 z-0 bg-gradient-to-b from-neutral-950/50 via-transparent to-neutral-950/80"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 space-y-16">


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
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover  transition-transform duration-500')); ?>
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
                                            <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover  transition-transform duration-500')); ?>
                                        <?php endif; ?>
                                        <div class="absolute top-3 left-3">
                                            <span class="rounded-sm bg-seu/90 px-2 py-1 text-xs font-bold uppercase tracking-wider text-white backdrop-blur-md shadow-sm">
                                                <?php echo $badge; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex flex-1 flex-col p-5">
                                        <h3 class="font-sans text-lg font-semibold leading-snug text-white group-hover:text-seu transition-colors line-clamp-2">
                                            <?php the_title(); ?>
                                        </h3>
                                        <div class="mt-4 flex items-center text-sm font-medium text-neutral-400 group-hover:text-white transition-colors">
                                            Inscripciones abiertas <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
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