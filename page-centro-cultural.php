<?php

/**
 * Template Name: Página centro cultural
 */
get_header();
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <header class="mb-16 border-b border-neutral-200 pb-8">
            <h1 class="font-sans text-3xl font-semibold sm:text-5xl text-seu tracking-tight">Centro Cultural UNSL</h1>
            <p class="mt-4 text-lg text-neutral-600 max-w-3xl leading-relaxed">
                La Universidad Nacional de San Luis (UNSL), a través de la Secretaría de Extensión Universitaria (SEU), aprobó la Normativa para el uso de los espacios del Centro Cultural UNSL, que exige el cumplimiento del siguiente formulario de solicitud.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="http://seu.unsl.edu.ar/application/assets/doc/Ordenanza-USO-CENTRO-CULTURAL.pdf" target="_blank" class="inline-flex items-center gap-2 rounded-sm bg-ink px-5 py-2.5 text-sm font-semibold text-white hover:bg-neutral-800 transition shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">description</span>
                    Leer normativa completa
                </a>
            </div>
        </header>

        <div class="space-y-12 mb-20">


            <div class="grid grid-cols-1 lg:grid-cols-2 overflow-hidden rounded-sm border border-neutral-200 bg-white shadow-sm">

                <div class="flex flex-col justify-center p-8 sm:p-12 lg:order-1 border-b lg:border-b-0 lg:border-r border-neutral-200">
                    <div class="mb-2 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-seu">
                        Inaugurado en 1987
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-semibold font-sans mb-6 text-ink">Auditorio Mauricio López</h2>

                    <ul class="space-y-4 text-neutral-700 mt-2">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">groups</span>
                            <div>
                                <strong class="block font-semibold text-ink">Capacidad</strong>
                                <span class="text-sm">430 butacas.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">architecture</span>
                            <div>
                                <strong class="block font-semibold text-ink">Escenario</strong>
                                <span class="text-sm">12m de boca x 6m de fondo x 5m de altura.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">speaker</span>
                            <div>
                                <strong class="block font-semibold text-ink">Equipamiento</strong>
                                <span class="text-sm">Sistema de Aro Magnético, ambiente climatizado, sonido e iluminación, pantalla gigante y camarines.</span>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="relative h-64 sm:h-96 lg:h-full lg:order-2 bg-neutral-100">
                    <div class="swiper galeria-espacio h-full w-full">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/auditorio-1.jpg" alt="Auditorio Mauricio López" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/auditorio-2.jpg" alt="Escenario Auditorio" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/auditorio-3.jpg" alt="Butacas Auditorio" class="h-full w-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-pagination !bottom-4"></div>
                        <div class="swiper-button-prev !text-gray-500 !left-4 after:!text-2xl drop-shadow-md"></div>
                        <div class="swiper-button-next !text-gray-500 !right-4 after:!text-2xl drop-shadow-md"></div>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 lg:grid-cols-2 overflow-hidden rounded-sm border border-neutral-200 bg-white shadow-sm">

                <div class="relative h-64 sm:h-96 lg:h-full lg:order-1 bg-neutral-100 border-b lg:border-b-0 lg:border-r border-neutral-200">
                    <div class="swiper galeria-espacio h-full w-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/microcine-1.jpg" alt="Microcine UNSL" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/microcine-2.jpg" alt="Pantalla Microcine" class="h-full w-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-pagination !bottom-4"></div>
                        <div class="swiper-button-prev !text-white !left-4 after:!text-2xl drop-shadow-md"></div>
                        <div class="swiper-button-next !text-white !right-4 after:!text-2xl drop-shadow-md"></div>
                    </div>
                </div>


                <div class="flex flex-col justify-center p-8 sm:p-12 lg:order-2">
                    <div class="mb-2 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-ink">
                        Proyecciones y conferencias
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-semibold font-sans mb-6 text-ink">Microcine</h2>

                    <ul class="space-y-4 text-neutral-700 mt-2">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">chair</span>
                            <div>
                                <strong class="block font-semibold text-ink">Capacidad máxima</strong>
                                <span class="text-sm">75 personas (sillas movibles).</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">settings_input_hdmi</span>
                            <div>
                                <strong class="block font-semibold text-ink">Equipamiento</strong>
                                <span class="text-sm">Ambiente climatizado, servicios de sonido, iluminación y proyección audiovisual.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-[30%_70%] overflow-hidden rounded-sm border border-neutral-200 bg-white shadow-sm">

                <div class="flex flex-col justify-center p-8 sm:p-12 lg:order-1 border-b lg:border-b-0 lg:border-r border-neutral-200">
                    <div class="mb-2 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-seu">
                        Arte y exhibiciones
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-semibold font-sans mb-6 text-ink">Sala de Exposiciones</h2>

                    <ul class="space-y-4 text-neutral-700 mt-2">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">square_foot</span>
                            <div>
                                <strong class="block font-semibold text-ink">Dimensiones</strong>
                                <span class="text-sm">14 x 21m.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">view_comfy</span>
                            <div>
                                <strong class="block font-semibold text-ink">Distribución</strong>
                                <span class="text-sm">Cinco módulos fijos de 6m.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">light_mode</span>
                            <div>
                                <strong class="block font-semibold text-ink">Iluminación</strong>
                                <span class="text-sm">Grilla de luces a los 3m.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-[24px] text-neutral-400 shrink-0">tune</span>
                            <div>
                                <strong class="block font-semibold text-ink">Mobiliario</strong>
                                <span class="text-sm">Paneles movibles.</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="relative h-64 sm:h-96 lg:h-full lg:order-2 bg-neutral-100">
                    <div class="swiper galeria-espacio h-full w-full">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_023_resultado.jpg" alt="Sala de Exposiciones UNSL 1" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_027_resultado.jpg" alt="Sala de Exposiciones UNSL 2" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_028_resultado.jpg" alt="Sala de Exposiciones UNSL 3" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_032_resultado.jpg" alt="Sala de Exposiciones UNSL 4" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_033_resultado.jpg" alt="Sala de Exposiciones UNSL 5" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_035_resultado.jpg" alt="Sala de Exposiciones UNSL 6" class="h-full w-full object-cover">
                            </div>
                            <div class="swiper-slide h-full w-full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/img_038_resultado.jpg" alt="Sala de Exposiciones UNSL 6" class="h-full w-full object-cover">
                            </div>
                        </div>
                        <div class="swiper-pagination !bottom-4"></div>
                        <div class="swiper-button-prev !text-white !left-4 after:!text-2xl drop-shadow-md"></div>
                        <div class="swiper-button-next !text-white !right-4 after:!text-2xl drop-shadow-md"></div>
                    </div>
                </div>
            </div>

        </div>


        <div class="mb-16">
            <h3 class="text-xl font-semibold font-sans mb-6 text-ink border-b border-neutral-200 pb-4">Disponibilidad de salas</h3>
            <?php get_template_part('template-parts/components/calendario-centro-cultural'); ?>
        </div>


        <div class="bg-white p-8 sm:p-12 rounded-sm shadow-sm border border-neutral-200">
            <h3 class="text-xl font-semibold font-sans mb-6 text-ink border-b border-neutral-200 pb-4">Formulario de solicitud de reserva</h3>
            <?php get_template_part('template-parts/components/form-centro-cultural'); ?>
        </div>

    </div>
</main>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galerias = document.querySelectorAll('.galeria-espacio');

        galerias.forEach(galeria => {
            const nextBtn = galeria.querySelector('.swiper-button-next');
            const prevBtn = galeria.querySelector('.swiper-button-prev');
            const pagination = galeria.querySelector('.swiper-pagination');

            new Swiper(galeria, {
                loop: true,
                grabCursor: true,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                pagination: {
                    el: pagination,
                    clickable: true,
                },
                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: true,
                }
            });
        });
    });
</script>

<?php get_footer(); ?>