<?php
/**
 * Template Name: Página de Reservas
 */
get_header(); 
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <header class="mb-12 border-b border-neutral-200 pb-6">
            <h1 class="font-sans text-3xl font-semibold sm:text-5xl text-seu">Reserva de Espacios Culturales</h1>
            <p class="mt-4 text-lg text-neutral-600 max-w-3xl">Bienvenido al sistema de reservas de la UNSL. Por favor, selecciona el espacio deseado, verifica la disponibilidad en el calendario y completa tus datos.</p>
        </header>

        <div class="bg-white p-8 rounded-sm shadow-sm border border-neutral-200">
            <?php get_template_part( 'template-parts/components/form-reservas' ); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>