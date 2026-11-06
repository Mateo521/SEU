<?php
/**
 * Componente: Carrusel Principal (100% Automático y Dinámico)
 */


$args_carrusel = array(
    'post_type'      => array( 'post', 'capacitacion', 'diplomatura', 'evento_agenda' ),
    'posts_per_page' => 5, 
    'orderby'        => 'date',
    'order'          => 'DESC'
);
$query_carrusel = new WP_Query( $args_carrusel );


if ( ! $query_carrusel->have_posts() ) return;

$total_slides = $query_carrusel->post_count;
$current_index = 1;
?>

<section aria-roledescription="carrusel" aria-label="Destacados" class="relative bg-neutral-950 text-white">
    <div id="carrusel-portada" class="relative mx-auto min-h-[32rem] max-w-7xl overflow-hidden lg:min-h-[36rem]">

        <?php while ( $query_carrusel->have_posts() ) : $query_carrusel->the_post(); 
            

            $tipo = get_post_type();
            
            if ( $tipo === 'capacitacion' ) {
                $badge_text = 'Capacitación';
                $btn_text = 'Inscribirse';
            } elseif ( $tipo === 'diplomatura' ) {
                $badge_text = 'Diplomatura';
                $btn_text = 'Ver programa';
            } elseif ( $tipo === 'evento_agenda' ) {
                $badge_text = 'Agenda';
                $btn_text = 'Ver evento';
            } else {
                $badge_text = 'Noticia Institucional';
                $btn_text = 'Leer más';
            }


            $img_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
            $is_hidden = ( $current_index === 1 ) ? '' : 'hidden';
        ?>
            
            <div class="slide absolute inset-0 grid items-end bg-neutral-900 transition-opacity duration-500" aria-label="<?php echo $current_index . ' de ' . $total_slides; ?>" <?php echo $is_hidden; ?>>
                
                <?php if ( $img_url ) : ?>
                    <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="absolute inset-0 h-full w-full object-cover opacity-40 mix-blend-overlay">
                <?php else : ?>
                    <div class="absolute inset-0 bg-gradient-to-br from-neutral-800 to-neutral-950"></div>
                <?php endif; ?>

                <div class="relative z-10 px-4 pb-20 pt-16 sm:px-6 lg:px-8 lg:pb-24">
                    <div class="max-w-2xl">
                        <span class="inline-block rounded-sm border border-white/50 bg-white/10 backdrop-blur-sm px-3 py-1 text-xs font-semibold uppercase tracking-wider text-white">
                            <?php echo esc_html( $badge_text ); ?>
                        </span>
                        
                        <h2 class="mt-4 font-sans text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">
                            <?php the_title(); ?>
                        </h2>
                        
                        <div class="mt-5 max-w-xl text-lg text-neutral-200 line-clamp-2">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <a href="<?php the_permalink(); ?>" class="mt-8 inline-flex items-center gap-2 rounded-sm bg-seu px-6 py-3 font-medium text-white transition hover:bg-seu-dark">
                            <?php echo esc_html( $btn_text ); ?> 
                            <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M5 12h14M13 6l6 6-6 6"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        <?php 
            $current_index++;
        endwhile; wp_reset_postdata(); ?>


        <?php if ( $total_slides > 1 ) : ?>
            <div class="absolute bottom-6 left-4 z-20 flex items-center gap-2 sm:left-6 lg:left-8">
                <button type="button" id="carrusel-prev" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 bg-black/20 backdrop-blur-sm transition hover:bg-white hover:text-ink">
                    <svg class="h-5 w-5 rotate-180" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
                </button>
                <button type="button" id="carrusel-next" class="grid h-10 w-10 place-items-center rounded-sm border border-white/40 bg-black/20 backdrop-blur-sm transition hover:bg-white hover:text-ink">
                    <svg class="h-5 w-5" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
                </button>
                <span class="ml-3 text-sm tabular-nums text-neutral-300 font-medium" id="carrusel-count">
                    1 / <?php echo $total_slides; ?>
                </span>
            </div>
        <?php endif; ?>
        
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('#carrusel-portada .slide');
    const btnNext = document.getElementById('carrusel-next');
    const btnPrev = document.getElementById('carrusel-prev');
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

    btnNext.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    });

    btnPrev.addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    });

    // Auto-play cada 6 segundos
    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    }, 6000);
});
</script>