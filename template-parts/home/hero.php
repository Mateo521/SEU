<?php

/**
 * Componente: Carrusel
 */


$args_carrusel = array(
    'post_type'      => array('post', 'capacitacion', 'diplomatura', 'evento_agenda'),
    'posts_per_page' => 5,
    'orderby'        => 'date',
    'order'          => 'DESC'
);
$query_carrusel = new WP_Query($args_carrusel);
if (! $query_carrusel->have_posts()) return;
$total_slides = $query_carrusel->post_count;
$current_index = 1;
?>

<section role="region" aria-roledescription="carrusel" aria-label="Destacados" class="relative bg-neutral-950 text-white">
    <div id="carrusel-portada" class="relative w-full min-h-[38rem] overflow-hidden lg:min-h-[40rem]">
        <?php while ($query_carrusel->have_posts()) : $query_carrusel->the_post();
            $tipo = get_post_type();
            if ($tipo === 'capacitacion') {
                $badge_text = 'Capacitación';
                $btn_text = 'Inscribirse';
            } elseif ($tipo === 'diplomatura') {
                $badge_text = 'Diplomatura';
                $btn_text = 'Ver programa';
            } elseif ($tipo === 'evento_agenda') {
                $badge_text = 'Agenda';
                $btn_text = 'Ver evento';
            } else {
                $badge_text = 'Noticia Institucional';
                $btn_text = 'Leer más';
            }
            $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $is_hidden = ($current_index === 1) ? '' : 'hidden';
        ?>

            <div class="slide absolute inset-0 bg-neutral-950 pt-20 transition-opacity duration-500 overflow-hidden" role="group" aria-roledescription="diapositiva" aria-label="<?php echo esc_attr($current_index . ' de ' . $total_slides); ?>" <?php echo $is_hidden; ?>>

                <?php if ($img_url) : ?>
                    <img src="<?php echo esc_url($img_url); ?>" alt="" class="absolute inset-0 z-0 h-full w-full scale-125 object-cover opacity-30 blur-3xl" loading="lazy">
                <?php else : ?>
                    <div class="absolute inset-0 z-0 bg-gradient-to-br from-neutral-800 to-neutral-950"></div>
                <?php endif; ?>

                <div class="relative z-10 mx-auto flex h-full w-full max-w-7xl flex-col lg:flex-row">
                    
                    <div aria-hidden="true" class="relative flex aspect-video min-h-56 w-full shrink-0 items-center justify-center sm:min-h-64 lg:order-2 lg:h-full lg:min-h-0 lg:w-2/5 lg:aspect-auto">
                        <?php if ($img_url) : ?>
                            <img src="<?php echo esc_url($img_url); ?>" alt="" class="relative z-10 h-full w-full object-contain p-2 sm:p-4">
                        <?php endif; ?>
                    </div>

                    <div class="relative flex-1 px-4 pb-20 pt-6 sm:px-6 sm:pt-8 lg:flex lg:w-3/5 lg:items-center lg:px-12 lg:pb-24">
                        <div class="max-w-2xl">
                            <span class="inline-block rounded-sm border border-white/50 bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white">
                                <?php echo esc_html($badge_text); ?>
                            </span>

                            <h2 class="mt-3 font-sans text-2xl font-semibold leading-tight sm:text-3xl lg:text-5xl">
                                <?php the_title(); ?>
                            </h2>

                            <div class="mt-5 max-w-xl text-lg text-neutral-200 line-clamp-2">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="mt-8 inline-flex items-center gap-2 rounded-sm bg-seu px-6 py-3 font-medium text-white transition hover:bg-seu-dark">
                                <?php echo esc_html($btn_text); ?>
                                <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M13 6l6 6-6 6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div> 
            </div>

        <?php
            $current_index++;
        endwhile;
        wp_reset_postdata(); ?>


        <?php if ($total_slides > 1) : ?>
            <!-- 3. Controles: Los envolvemos en un contenedor max-w-7xl para que queden alineados con el texto -->
            <div class="absolute inset-x-0 bottom-6 z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-12 pointer-events-none">
                <div class="flex items-center gap-2 pointer-events-auto">
                    <button type="button" id="carrusel-prev" aria-label="Destacado anterior" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 bg-black/20 backdrop-blur-sm transition hover:bg-white hover:text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        <svg class="h-5 w-5 rotate-180" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6"></path>
                        </svg>
                    </button>
                    <button type="button" id="carrusel-next" aria-label="Siguiente destacado" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 bg-black/20 backdrop-blur-sm transition hover:bg-white hover:text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M13 6l6 6-6 6"></path>
                        </svg>
                    </button>
                    <button type="button" id="carrusel-toggle" aria-label="Pausar carrusel" aria-pressed="false" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 bg-black/20 text-xs font-semibold backdrop-blur-sm transition hover:bg-white hover:text-ink focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        <span aria-hidden="true">Ⅱ</span>
                    </button>
                    <span class="ml-3 text-sm tabular-nums text-neutral-300 font-medium" id="carrusel-count">
                        1 / <?php echo $total_slides; ?>
                    </span>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('#carrusel-portada .slide');
        const btnNext = document.getElementById('carrusel-next');
        const btnPrev = document.getElementById('carrusel-prev');
        const btnToggle = document.getElementById('carrusel-toggle');
        const counter = document.getElementById('carrusel-count');

        if (!slides.length || !btnNext || !btnPrev) return;

        let currentSlide = 0;
        const totalSlides = slides.length;

        function updateSlider() {
            slides.forEach((slide, index) => {
                if (index === currentSlide) {
                    slide.removeAttribute('hidden');
                    setTimeout(() => slide.style.opacity = '1', 50);
                } else {
                    slide.setAttribute('hidden', '');
                    slide.style.opacity = '0';
                }
            });
            if (counter) {
                counter.textContent = `${currentSlide + 1} / ${totalSlides}`;
            }
        }

        updateSlider();

        btnNext.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        });

        btnPrev.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateSlider();
        });

        let isPaused = false;
        const rotation = setInterval(() => {
            if (isPaused) return;
            currentSlide = (currentSlide + 1) % totalSlides;
            updateSlider();
        }, 6000);

        if (btnToggle) {
            btnToggle.addEventListener('click', () => {
                isPaused = !isPaused;
                btnToggle.setAttribute('aria-pressed', String(isPaused));
                btnToggle.setAttribute('aria-label', isPaused ? 'Reanudar carrusel' : 'Pausar carrusel');
                btnToggle.querySelector('span').textContent = isPaused ? '▶' : 'Ⅱ';
            });
        }
    });
</script>