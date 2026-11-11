<?php

/**
 * Componente: Agendas 
 */

$hoy = date('Ymd');

function get_agenda_args($tipo_slug, $hoy)
{
    return array(
        'post_type'      => 'evento_agenda',
        'posts_per_page' => 5,
        'tax_query'      => array(
            array(
                'taxonomy' => 'tipo_agenda',
                'field'    => 'slug',
                'terms'    => $tipo_slug,
            ),
        ),
        'meta_key'       => 'fecha_evento',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'meta_query'     => array(
            array(
                'key'     => 'fecha_evento',
                'value'   => $hoy,
                'compare' => '>=',
                'type'    => 'DATE'
            )
        )
    );
}

$query_cultural = new WP_Query(get_agenda_args('cultural', $hoy));
$query_institucional = new WP_Query(get_agenda_args('institucional', $hoy));
?>
<section id="agendas" class="bg-paper py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap items-end justify-between gap-4 border-b border-neutral-200 pb-4">
            <h2 class="font-sans text-2xl font-semibold sm:text-3xl">Agendas</h2>
            <button id="btn-onesignal" class="flex items-center gap-2 rounded-sm border border-seu px-4 py-2 text-sm font-semibold text-seu hover:bg-seu hover:text-white transition">
                Activar notificaciones
            </button>
        </div>
        <div class="mt-8">
            <div class="flex gap-6 border-b border-neutral-200" role="tablist">
                <button id="tab-cultural" class="tab-btn active -mb-px border-b-2 border-seu pb-3 font-semibold text-ink" aria-selected="true">Agenda Cultural</button>
                <button id="tab-institucional" class="tab-btn -mb-px border-b-2 border-transparent pb-3 font-semibold text-neutral-500 hover:text-ink" aria-selected="false">Agenda Institucional</button>
            </div>
            <div id="panel-cultural" class="mt-6 divide-y divide-neutral-200">
                <?php if ($query_cultural->have_posts()) : while ($query_cultural->have_posts()) : $query_cultural->the_post();
                        $fecha_raw = get_field('fecha_evento');
                        $hora = get_field('hora_evento');
                        $lugar = get_field('lugar_evento');
                        if ($fecha_raw) {
                            $timestamp = strtotime($fecha_raw);
                            $dia = date_i18n('j', $timestamp);
                            $mes = date_i18n('M', $timestamp);
                        }
                ?>
                        <article class="flex flex-col sm:flex-row gap-4 sm:gap-6 rounded-sm border border-neutral-200 bg-white p-4 transition hover:border-seu/30 hover:shadow-sm items-start sm:items-center">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="h-24 w-24 sm:h-28 sm:w-28 shrink-0 overflow-hidden rounded-sm bg-neutral-100">
                                    <?php the_post_thumbnail('medium', array('class' => 'h-full w-full object-cover')); ?>
                                </div>
                            <?php endif; ?>
                            
                            <time class="flex h-24 w-16 sm:h-28 shrink-0 flex-col items-center justify-center rounded-sm bg-neutral-50 text-center border border-neutral-100">
                                <span class="text-2xl font-semibold text-seu"><?php echo esc_html($dia); ?></span>
                                <span class="text-sm font-medium uppercase text-neutral-600"><?php echo esc_html($mes); ?></span>
                            </time>
                            
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-ink leading-tight"><?php the_title(); ?></h3>
                                <p class="text-sm text-neutral-600 mt-1 truncate">
                                    <?php echo esc_html($lugar); ?> <?php echo $hora ? '· ' . esc_html($hora) : ''; ?>
                                </p>
                                <?php if (get_the_content()) : ?>
                                    <div class="text-sm text-neutral-500 mt-2 line-clamp-2"><?php echo wp_strip_all_tags(get_the_content()); ?></div>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p class="py-5 text-sm text-neutral-500">No hay eventos culturales programados próximamente.</p>
                <?php endif; ?>
            </div>
            <div id="panel-institucional" class="mt-6 divide-y divide-neutral-200 hidden">
                <?php if ($query_institucional->have_posts()) : while ($query_institucional->have_posts()) : $query_institucional->the_post();
                        $fecha_raw = get_field('fecha_evento');
                        $hora = get_field('hora_evento');
                        $lugar = get_field('lugar_evento');
                        if ($fecha_raw) {
                            $timestamp = strtotime($fecha_raw);
                            $dia = date_i18n('j', $timestamp);
                            $mes = date_i18n('M', $timestamp);
                        }
                ?>
                        <article class="flex flex-col sm:flex-row gap-4 sm:gap-6 rounded-sm border border-neutral-200 bg-white p-4 transition hover:border-seu/30 hover:shadow-sm items-start sm:items-center">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="h-24 w-24 sm:h-28 sm:w-28 shrink-0 overflow-hidden rounded-sm bg-neutral-100">
                                    <?php the_post_thumbnail('medium', array('class' => 'h-full w-full object-cover')); ?>
                                </div>
                            <?php endif; ?>
                            
                            <time class="flex h-24 w-16 sm:h-28 shrink-0 flex-col items-center justify-center rounded-sm bg-neutral-50 text-center border border-neutral-100">
                                <span class="text-2xl font-semibold text-seu"><?php echo esc_html($dia); ?></span>
                                <span class="text-sm font-medium uppercase text-neutral-600"><?php echo esc_html($mes); ?></span>
                            </time>
                            
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-ink leading-tight"><?php the_title(); ?></h3>
                                <p class="text-sm text-neutral-600 mt-1 truncate">
                                    <?php echo esc_html($lugar); ?> <?php echo $hora ? '· ' . esc_html($hora) : ''; ?>
                                </p>
                                <?php if (get_the_content()) : ?>
                                    <div class="text-sm text-neutral-500 mt-2 line-clamp-2"><?php echo wp_strip_all_tags(get_the_content()); ?></div>
                                <?php endif; ?>
                            </div>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p class="py-5 text-sm text-neutral-500">No hay eventos institucionales programados próximamente.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabCultural = document.getElementById('tab-cultural');
        const tabInstitucional = document.getElementById('tab-institucional');
        const panelCultural = document.getElementById('panel-cultural');
        const panelInstitucional = document.getElementById('panel-institucional');

        function mostrarAgenda(tipo) {
            const mostrarCultural = tipo === 'cultural';

            panelCultural.classList.toggle('hidden', !mostrarCultural);
            panelInstitucional.classList.toggle('hidden', mostrarCultural);
            tabCultural.setAttribute('aria-selected', mostrarCultural);
            tabInstitucional.setAttribute('aria-selected', !mostrarCultural);

            tabCultural.classList.toggle('active', mostrarCultural);
            tabCultural.classList.toggle('border-seu', mostrarCultural);
            tabCultural.classList.toggle('border-transparent', !mostrarCultural);
            tabCultural.classList.toggle('text-ink', mostrarCultural);
            tabCultural.classList.toggle('text-neutral-500', !mostrarCultural);

            tabInstitucional.classList.toggle('active', !mostrarCultural);
            tabInstitucional.classList.toggle('border-seu', !mostrarCultural);
            tabInstitucional.classList.toggle('border-transparent', mostrarCultural);
            tabInstitucional.classList.toggle('text-ink', !mostrarCultural);
            tabInstitucional.classList.toggle('text-neutral-500', mostrarCultural);
        }

        tabCultural.addEventListener('click', function() {
            mostrarAgenda('cultural');
        });
        tabInstitucional.addEventListener('click', function() {
            mostrarAgenda('institucional');
        });

        const btnOneSignal = document.getElementById('btn-onesignal');
        if (btnOneSignal) {
            btnOneSignal.addEventListener('click', function(e) {
                e.preventDefault();
                if (window.OneSignal) {
                    window.OneSignal.push(function() {
                        OneSignal.showSlidedownPrompt();
                    });
                }
            });
        }
    });
</script>