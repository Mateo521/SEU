<?php

/**
 * Template Name: Página centro cultural
 */
get_header();
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <header class="mb-12 border-b border-neutral-200 pb-6">
            <h1 class="font-sans text-3xl font-semibold sm:text-5xl text-seu">Centro Cultural UNSL</h1>
            <p class="mt-4 text-lg text-neutral-600 max-w-3xl">La Universidad Nacional de San Luis (UNSL), a través de la Secretaría de Extensión Universitaria (SEU), aprobó la Normativa para el uso de los espacios del Centro Cultural UNSL, que exige el cumplimiento del siguiente formulario de solicitud.</p>
            <div class="mt-6 flex gap-4">
                <a href="http://seu.unsl.edu.ar/application/assets/doc/Ordenanza-USO-CENTRO-CULTURAL.pdf" target="_blank" class="inline-flex items-center gap-2 rounded-sm border border-neutral-300 bg-white px-4 py-2 text-sm font-medium text-ink hover:border-seu transition">
                    Leer normativa completa
                </a>
            </div>
        </header>


        <img src="<?php echo get_template_directory_uri(); ?>/images/dot.png" alt="Dot" class="mx-auto mb-16">


        <div class="grid grid-cols-[1fr_60%] pb-6">
            <div class="bg-white p-8 rounded-sm border border-neutral-200 shadow-sm border-t-4 border-t-seu">
                <h2 class="text-xl font-semibold font-sans mb-2">Auditorio Mauricio López</h2>
                <p class="text-sm text-neutral-600 mb-4">Inaugurado en 1987</p>
                <ul class="space-y-2 text-neutral-700">
                    <li><strong class="font-medium text-ink">Capacidad:</strong> 430 butacas.</li>
                    <li><strong class="font-medium text-ink">Escenario:</strong> 12m de boca x 6m de fondo x 5m de altura.</li>
                    <li><strong class="font-medium text-ink">Equipamiento:</strong> Sistema de Aro Magnético, ambiente climatizado, sonido e iluminación, pantalla gigante y camarines.</li>
                </ul>

            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/UNSL_-5-7.jpg" alt="Dot" class="mx-auto h-full">
        </div>
        <div class="grid grid-cols-[60%_1fr] pb-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/UNSL_-5-7.jpg" alt="Dot" class="mx-auto h-full">

            <div class="bg-white p-8 rounded-sm border border-neutral-200 shadow-sm border-t-4 border-t-ink">
                <h2 class="text-xl font-semibold font-sans mb-2">Microcine</h2>
                <p class="text-sm text-neutral-600 mb-4">Proyecciones y conferencias</p>
                <ul class="space-y-2 text-neutral-700">
                    <li><strong class="font-medium text-ink">Capacidad máxima:</strong> 75 personas (sillas movibles).</li>
                    <li><strong class="font-medium text-ink">Equipamiento:</strong> Ambiente climatizado, servicios de sonido, iluminación y proyección.</li>
                </ul>
            </div>


        </div>


        <div class="mb-16">
            <h3 class="text-xl font-semibold font-sans mb-6">Disponibilidad de salas</h3>
            <?php get_template_part('template-parts/components/calendario-centro-cultural'); ?>
        </div>

        <div class="bg-white p-8 sm:p-12 rounded-sm shadow-sm border border-neutral-200">
            <h3 class="text-xl font-semibold font-sans mb-6">Formulario de solicitud de reserva</h3>
            <?php get_template_part('template-parts/components/form-centro-cultural'); ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>