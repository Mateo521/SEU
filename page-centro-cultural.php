<?php

/**
 * Template Name: Página centro cultural
 */
get_header();
?>

<main id="contenido" class="bg-paper py-20 text-ink sm:py-28" style="font-family: 'Poppins', sans-serif;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">


        <header class="mb-16 border-b border-neutral-300 pb-10">
            <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
                <div class="max-w-3xl">
                    <span class="block text-base font-medium uppercase  text-seu">
                        Espacios institucionales
                    </span>
                    <h1 class="mt-2 font-sans text-4xl font-light tracking-tight text-ink sm:text-5xl lg:text-6xl">
                        Centro Cultural UNSL
                    </h1>
                    <p class="mt-5 text-base leading-relaxed text-neutral-600 sm:text-lg">
                        La Universidad Nacional de San Luis (UNSL), a través de la Secretaría de Extensión Universitaria (SEU), aprobó la Normativa para el uso de los espacios del Centro Cultural UNSL, que exige el cumplimiento del siguiente formulario de solicitud.
                    </p>
                </div>

                <div class="shrink-0">
                    <a href="http://seu.unsl.edu.ar/application/assets/doc/Ordenanza-USO-CENTRO-CULTURAL.pdf" target="_blank" rel="noopener noreferrer" class="group inline-flex items-center gap-3 bg-seu px-6 py-3.5 text-sm font-medium text-white transition hover:bg-seu">
                        <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">description</span>
                        <span>Leer normativa completa</span>
                        <span class="material-symbols-outlined text-[16px] transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">north_east</span>
                    </a>
                </div>
            </div>
        </header>


        <div class="mb-24 space-y-12">

            <article class="grid grid-cols-1 border border-neutral-200 bg-white lg:grid-cols-12">

                <div class="flex flex-col justify-between border-b border-neutral-200 p-8 sm:p-10 lg:order-1 lg:col-span-5 lg:border-b-0 lg:border-r">
                    <div>

                        <span class="text-seu">Inaugurado en 1987</span>


                        <h2 class="font-sans text-3xl font-light tracking-tight text-ink sm:text-4xl">
                            Auditorio Mauricio López
                        </h2>
                    </div>

                    <ul class="mt-8 divide-y divide-neutral-200 border-t border-neutral-200">
                        <li class="flex items-start gap-4 py-4">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">groups</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Capacidad</strong>
                                <span class="mt-0.5 block text-sm text-ink">430 butacas.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 py-4">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">architecture</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Escenario</strong>
                                <span class="mt-0.5 block text-sm text-ink">12m de boca x 6m de fondo x 5m de altura.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 pt-4">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">speaker</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Equipamiento</strong>
                                <span class="mt-0.5 block text-sm leading-relaxed text-ink">Sistema de Aro Magnético, ambiente climatizado, sonido e iluminación, pantalla gigante y camarines.</span>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="espacio-galeria-wrapper flex flex-col lg:order-2 lg:col-span-7">
                    <div class="relative h-72 w-full flex-1 bg-neutral-100 sm:h-96 lg:min-h-[26rem]">
                        <div class="swiper galeria-espacio h-full w-full">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/AML0.jpg" alt="Auditorio Mauricio López" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/AML1.jpg" alt="Escenario Auditorio" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/AML2.jpg" alt="Butacas Auditorio" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/AML3.jpg" alt="Butacas Auditorio" class="h-full w-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flex items-center justify-between border-t border-neutral-200 bg-white px-6 py-3.5">
                        <div class="espacio-pagination text-base font-medium tabular-nums tracking-widest text-neutral-500"></div>
                        <div class="flex items-center gap-2">
                            <button type="button" aria-label="Imagen anterior del Auditorio" class="espacio-prev flex size-10 items-center justify-center border border-neutral-200 text-ink transition hover:border-neutral-950 hover:bg-seu hover:text-white">
                                <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">west</span>
                            </button>
                            <button type="button" aria-label="Siguiente imagen del Auditorio" class="espacio-next flex size-10 items-center justify-center border border-neutral-200 text-ink transition hover:border-neutral-950 hover:bg-seu hover:text-white">
                                <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">east</span>
                            </button>
                        </div>
                    </div>
                </div>
            </article>


            <article class="grid grid-cols-1 border border-neutral-200 bg-seu text-white lg:grid-cols-12">

                <div class="espacio-galeria-wrapper flex flex-col border-b border-white/10 lg:order-1 lg:col-span-7 lg:border-b-0 lg:border-r">
                    <div class="relative h-72 w-full flex-1 bg-neutral-900 sm:h-96 lg:min-h-[26rem]">
                        <div class="swiper galeria-espacio h-full w-full">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/microcine.jpg" alt="Microcine UNSL" class="h-full w-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flex items-center justify-between border-t border-white/10 bg-seu px-6 py-3.5">
                        <div class="espacio-pagination text-base font-medium tabular-nums tracking-widest text-neutral-400"></div>
                        <div class="flex items-center gap-2">
                            <button type="button" aria-label="Imagen anterior del Microcine" class="espacio-prev flex size-10 items-center justify-center border border-white/20 text-white transition hover:border-white hover:bg-white hover:text-neutral-950">
                                <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">west</span>
                            </button>
                            <button type="button" aria-label="Siguiente imagen del Microcine" class="espacio-next flex size-10 items-center justify-center border border-white/20 text-white transition hover:border-white hover:bg-white hover:text-neutral-950">
                                <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">east</span>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col justify-between p-8 sm:p-10 lg:order-2 lg:col-span-5">
                    <div>

                        <span class="text-neutral-400">Proyecciones y conferencias</span>

                        <h2 class="font-sans text-3xl font-light tracking-tight text-white sm:text-4xl">
                            Microcine
                        </h2>
                    </div>

                    <ul class="mt-8 divide-y divide-white/10 border-t border-white/10">
                        <li class="flex items-start gap-4 py-4">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-400 [font-variation-settings:'wght'_200]">chair</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Capacidad máxima</strong>
                                <span class="mt-0.5 block text-sm text-neutral-100">75 personas (sillas movibles).</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 pt-4">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-400 [font-variation-settings:'wght'_200]">settings_input_hdmi</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Equipamiento</strong>
                                <span class="mt-0.5 block text-sm leading-relaxed text-neutral-100">Ambiente climatizado, servicios de sonido, iluminación y proyección audiovisual.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </article>


            <article class="grid grid-cols-1 border border-neutral-200 bg-white lg:grid-cols-12">

                <div class="flex flex-col justify-between border-b border-neutral-200 p-8 sm:p-10 lg:order-1 lg:col-span-5 lg:border-b-0 lg:border-r">
                    <div>

                        <span class="text-seu">Arte y exhibiciones</span>

                        <h2 class="font-sans text-3xl font-light tracking-tight text-ink sm:text-4xl">
                            Sala de Exposiciones
                        </h2>
                    </div>

                    <ul class="mt-8 divide-y divide-neutral-200 border-t border-neutral-200">
                        <li class="flex items-start gap-4 py-3.5">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">square_foot</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Dimensiones</strong>
                                <span class="mt-0.5 block text-sm text-ink">14 x 21m.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 py-3.5">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">view_comfy</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Distribución</strong>
                                <span class="mt-0.5 block text-sm text-ink">Cinco módulos fijos de 6m.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 py-3.5">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">light_mode</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Iluminación</strong>
                                <span class="mt-0.5 block text-sm text-ink">Grilla de luces a los 3m.</span>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 pt-3.5">
                            <span class="material-symbols-outlined mt-0.5 shrink-0 text-[22px] text-neutral-500 [font-variation-settings:'wght'_200]">tune</span>
                            <div>
                                <strong class="block text-base font-medium uppercase tracking-wider text-neutral-400">Mobiliario</strong>
                                <span class="mt-0.5 block text-sm text-ink">Paneles movibles.</span>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="espacio-galeria-wrapper flex flex-col lg:order-2 lg:col-span-7">
                    <div class="relative h-72 w-full flex-1 bg-neutral-100 sm:h-96 lg:min-h-[26rem]">
                        <div class="swiper galeria-espacio h-full w-full">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/Sala_expo1.jpeg" alt="Sala de Exposiciones UNSL 1" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/Sala_expo2.jpeg" alt="Sala de Exposiciones UNSL 2" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/Sala_expo3.jpeg" alt="Sala de Exposiciones UNSL 3" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/Sala_expo4.jpeg" alt="Sala de Exposiciones UNSL 4" class="h-full w-full object-cover">
                                </div>
                                <div class="swiper-slide h-full w-full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/espacios/Sala_expo5.jpeg" alt="Sala de Exposiciones UNSL 5" class="h-full w-full object-cover">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="flex items-center justify-between border-t border-neutral-200 bg-white px-6 py-3.5">
                        <div class="espacio-pagination text-base font-medium tabular-nums tracking-widest text-neutral-500"></div>
                        <div class="flex items-center gap-2">
                            <button type="button" aria-label="Imagen anterior de la Sala de Exposiciones" class="espacio-prev flex size-10 items-center justify-center border border-neutral-200 text-ink transition hover:border-neutral-950 hover:bg-seu hover:text-white">
                                <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">west</span>
                            </button>
                            <button type="button" aria-label="Siguiente imagen de la Sala de Exposiciones" class="espacio-next flex size-10 items-center justify-center border border-neutral-200 text-ink transition hover:border-neutral-950 hover:bg-seu hover:text-white">
                                <span class="material-symbols-outlined text-[20px] [font-variation-settings:'wght'_300]">east</span>
                            </button>
                        </div>
                    </div>
                </div>
            </article>

        </div>


        <section class="mb-20">
            <div class="mb-8 border-b border-neutral-300 pb-5">
                <span class="block text-base font-medium uppercase  text-seu">Agenda de ocupación</span>
                <h3 class="mt-1 font-sans text-2xl font-light tracking-tight text-ink sm:text-3xl">Disponibilidad de salas</h3>
            </div>
            <?php get_template_part('template-parts/components/calendario-centro-cultural'); ?>
        </section>


        <section class="border border-neutral-200 bg-white p-8 sm:p-12">
            <div class="mb-8 border-b border-neutral-200 pb-5">
                <span class="block text-base font-medium uppercase  text-seu">Trámite online</span>
                <h3 class="mt-1 font-sans text-2xl font-light tracking-tight text-ink sm:text-3xl">Formulario de solicitud de reserva</h3>
            </div>
            <?php get_template_part('template-parts/components/form-centro-cultural'); ?>
        </section>

    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const wrappers = document.querySelectorAll('.espacio-galeria-wrapper');

        wrappers.forEach(wrapper => {
            const galeria = wrapper.querySelector('.galeria-espacio');
            const nextBtn = wrapper.querySelector('.espacio-next');
            const prevBtn = wrapper.querySelector('.espacio-prev');
            const pagination = wrapper.querySelector('.espacio-pagination');

            if (!galeria) return;

            new Swiper(galeria, {
                loop: true,
                grabCursor: true,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                pagination: {
                    el: pagination,
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