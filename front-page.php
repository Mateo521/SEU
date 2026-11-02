<?php
/**
 * Plantilla de la página de inicio 
 */
get_header(); 
?>

<main id="contenido">
    

    <?php get_template_part( 'template-parts/home/hero' ); ?>


    <?php get_template_part( 'template-parts/home/institucional' ); ?>


    <?php get_template_part( 'template-parts/home/noticias' ); ?>


    <?php 

    get_template_part( 'template-parts/components/capacitaciones-diplomaturas', null, array( 'context' => 'home' ) ); 
    ?>


    <?php get_template_part( 'template-parts/home/proyectos' ); ?>


    <?php get_template_part( 'template-parts/home/agendas' ); ?>


    <section id="reservas" class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-2 font-sans text-3xl font-semibold sm:text-4xl">Reserva de Espacios</h2>
            <p class="mb-10 text-neutral-600">Solicitá el espacio para tus actividades institucionales o culturales.</p>
            
            <?php 

            get_template_part( 'template-parts/components/form-reservas' ); 
            ?>
        </div>
    </section>


    <?php get_template_part( 'template-parts/home/accesos' ); ?>


    <?php get_template_part( 'template-parts/home/sitios' ); ?>


    <?php get_template_part( 'template-parts/home/politicas' ); ?>

</main>

<?php get_footer(); ?>