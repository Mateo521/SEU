<?php

/**
 * Plantilla de la página de inicio 
 */
get_header();
?>

<main id="contenido">


    <?php get_template_part('template-parts/home/hero'); ?>


    <?php get_template_part('template-parts/home/institucional'); ?>


    <?php get_template_part('template-parts/home/noticias'); ?>


    <?php

    get_template_part('template-parts/components/capacitaciones-diplomaturas', null, array('context' => 'home'));
    ?>


    <?php get_template_part('template-parts/home/proyectos'); ?>


    <?php get_template_part('template-parts/home/agendas'); ?>


    <section id="reservas" class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-2 font-sans text-3xl font-semibold sm:text-4xl">Reserva de espacios</h2>
            <p class="mb-8 text-neutral-600">Consultá la disponibilidad del Auditorio Mauricio López y el Microcine, y gestioná tu solicitud de reserva en línea.</p>

            <a href="<?php echo esc_url(home_url('/centro-cultural')); ?>" class="inline-flex rounded-sm bg-seu px-6 py-3 font-semibold text-white hover:bg-seu-dark transition">
                Ver calendario y reservar
            </a>
        </div>
    </section>


    <?php get_template_part('template-parts/home/accesos'); ?>


    <?php get_template_part('template-parts/home/sitios'); ?>


    <?php get_template_part('template-parts/home/politicas'); ?>

</main>

<?php get_footer(); ?>