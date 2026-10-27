<?php
/**
 * Plantilla de la página de inicio (Front Page)
 */
get_header(); 
?>

<main id="contenido">
    
    <!-- 1. Carrusel Hero -->
    <?php get_template_part( 'template-parts/home/hero' ); ?>

    <!-- 2. Institucional y CAEX -->
    <?php get_template_part( 'template-parts/home/institucional' ); ?>

    <!-- 3. Noticias Destacadas -->
    <?php get_template_part( 'template-parts/home/noticias' ); ?>

    <!-- 4. Capacitaciones y Diplomaturas (Módulo reutilizable) -->
    <?php 
    // Pasamos un parámetro para que este template sepa que se está mostrando en el home
    get_template_part( 'template-parts/components/capacitaciones-diplomaturas', null, array( 'context' => 'home' ) ); 
    ?>

    <!-- 5. Proyectos -->
    <?php get_template_part( 'template-parts/home/proyectos' ); ?>

    <!-- 6. Agendas -->
    <?php get_template_part( 'template-parts/home/agendas' ); ?>

    <!-- 7. Reservas (Módulo reutilizable) -->
    <section id="reservas" class="py-20 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="mb-2 font-serif text-3xl font-semibold sm:text-4xl">Reserva de Espacios</h2>
            <p class="mb-10 text-neutral-600">Solicitá el espacio para tus actividades institucionales o culturales.</p>
            
            <?php 
            // Llamamos al componente que contiene SÓLO la lógica y el form de reserva
            get_template_part( 'template-parts/components/form-reservas' ); 
            ?>
        </div>
    </section>

    <!-- 8. Accesos Frecuentes (Bento) -->
    <?php get_template_part( 'template-parts/home/accesos' ); ?>

    <!-- 9. Sitios de Interés -->
    <?php get_template_part( 'template-parts/home/sitios' ); ?>

    <!-- 10. Políticas de Inclusión -->
    <?php get_template_part( 'template-parts/home/politicas' ); ?>

</main>

<?php get_footer(); ?>