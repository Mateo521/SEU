<?php

/**
 *  individual para cada Capacitación
 */
get_header();
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <?php while (have_posts()) : the_post();

            $sede = get_field('sede');
            $destinatarios = get_field('destinatarios');
            $fecha_inicio = get_field('fecha_inicio');
            $arancel = get_field('arancel');
            $duracion = get_field('duracion');
            $responsable = get_field('responsable');
            $correo_consultas = get_field('correo_consultas');
            $sin_inscripciones = get_field('sin_inscripciones');
        ?>
            <article class="bg-white rounded-sm shadow-sm border border-neutral-200 overflow-hidden">

                <div class="p-8 border-b border-neutral-200">
                    <div>
                        <span class="inline-block rounded-sm border border-seu px-2 py-0.5 text-xs font-semibold uppercase tracking-wider text-seu mb-4">Capacitación</span>
                        <h1 class="font-sans text-2xl font-semibold sm:text-3xl text-ink leading-tight mb-4"><?php the_title(); ?></h1>

                        <?php if ($sin_inscripciones) : ?>
                            <span class="inline-flex items-center rounded-sm bg-neutral-200 px-4 py-2 text-sm font-semibold text-neutral-500 cursor-not-allowed">Cupo lleno</span>
                        <?php else : ?>
                            <button data-open="modalCapacitacion" class="inline-flex items-center rounded-sm bg-seu px-6 py-3 text-sm font-semibold text-white hover:bg-seu-dark transition">Inscribirse ahora</button>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="grid <?php echo $sin_inscripciones ? 'lg:grid-cols-2' : 'lg:grid-cols-3'; ?> gap-8 p-8">

                    <div class="<?php echo $sin_inscripciones ? '' : 'lg:col-span-2'; ?> prose prose-neutral max-w-none text-neutral-700">
                        <h2 class="text-xl font-semibold font-sans text-ink mb-4">Sobre esta capacitación</h2>
                        <?php the_content(); ?>


                        <div class="mt-12">
                            <?php if ($sin_inscripciones) : ?>
                                <div class="rounded-sm border border-neutral-200 bg-neutral-50 p-6" role="status">
                                    <h3 class="text-lg font-semibold text-ink mb-2">Inscripciones cerradas</h3>
                                    <p class="text-sm text-neutral-600">En este momento no hay inscripciones disponibles para esta capacitación.</p>
                                </div>
                            <?php else : ?>
                                <?php get_template_part('template-parts/components/form-inscripcion'); ?>
                            <?php endif; ?>
                        </div>
                    </div>



                    <aside>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="aspect-[497/621] bg-neutral-100 rounded-sm overflow-hidden relative mb-6">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-contain absolute inset-0')); ?>
                            </div>
                        <?php endif; ?>
                        <div class="bg-neutral-50 rounded-sm border border-neutral-200 p-6">
                            <h3 class="text-lg font-semibold text-ink mb-4 border-b border-neutral-200 pb-2">Detalles</h3>
                            <dl class="space-y-4 text-sm">
                                <?php if ($responsable): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Responsable</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($responsable); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <?php if ($sede): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Sede</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($sede); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <?php if ($destinatarios): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Destinatarios</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($destinatarios); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <?php if ($fecha_inicio): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Inicio</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($fecha_inicio); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <?php if ($arancel): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Arancel</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($arancel); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <?php if ($duracion): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Duración</dt>
                                        <dd class="text-neutral-600 mt-1"><?php echo esc_html($duracion); ?></dd>
                                    </div>
                                <?php endif; ?>
                                <?php if ($correo_consultas): ?>
                                    <div>
                                        <dt class="font-medium text-ink">Consultas</dt>
                                        <dd class="mt-1"><a href="mailto:<?php echo esc_attr($correo_consultas); ?>" class="text-seu font-medium hover:underline"><?php echo esc_html($correo_consultas); ?></a></dd>
                                    </div>
                                <?php endif; ?>
                            </dl>
                        </div>
                    </aside>
                </div>
            </article>
        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>