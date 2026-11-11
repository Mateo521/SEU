<?php
/**
 * Template Name: Agenda de eventos
 * 
 */
get_header(); 

function obtener_query_agenda($tipo_slug, $es_historico = false) {
    $hoy = date('Ymd');
    return new WP_Query(array(
        'post_type'      => 'evento_agenda',
        'posts_per_page' => $es_historico ? 20 : -1, 
        'tax_query'      => array(
            array(
                'taxonomy' => 'tipo_agenda',
                'field'    => 'slug',
                'terms'    => $tipo_slug,
            ),
        ),
        'meta_key'       => 'fecha_evento',
        'orderby'        => 'meta_value',
        'order'          => $es_historico ? 'DESC' : 'ASC', 
        'meta_query'     => array(
            array(
                'key'     => 'fecha_evento',
                'value'   => $hoy,
                'compare' => $es_historico ? '<' : '>=',
                'type'    => 'DATE'
            )
        )
    ));
}


$query_cultural_proximos = obtener_query_agenda('cultural', false);
$query_cultural_pasados = obtener_query_agenda('cultural', true);


$query_institucional_proximos = obtener_query_agenda('institucional', false);
$query_institucional_pasados = obtener_query_agenda('institucional', true);


function imprimir_tarjeta_evento() {
    $fecha_raw = get_field('fecha_evento');
    $hora = get_field('hora_evento');
    $lugar = get_field('lugar_evento');

    if ($fecha_raw) {
        $timestamp = strtotime($fecha_raw);
        $dia = date_i18n('j', $timestamp);
        $mes = date_i18n('M', $timestamp);
    }
    ?>
    <article class="flex flex-col sm:flex-row gap-4 sm:gap-6 rounded-sm border border-neutral-200 bg-white p-4 transition hover:border-seu/50 hover:shadow-sm items-start sm:items-center">
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
            <a href="<?php the_permalink(); ?>" class="group">
                <h3 class="text-lg font-semibold text-ink leading-tight group-hover:text-seu transition"><?php the_title(); ?></h3>
            </a>
            <p class="text-sm text-neutral-600 mt-1 truncate">
                <?php echo esc_html($lugar); ?> <?php echo $hora ? '&bull; ' . esc_html($hora) : ''; ?>
            </p>
            <?php if (get_the_content()) : ?>
                <div class="text-sm text-neutral-500 mt-2 line-clamp-2"><?php echo wp_strip_all_tags(get_the_content()); ?></div>
            <?php endif; ?>
        </div>
    </article>
    <?php
}
?>

<main id="contenido" class="py-20 bg-paper">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
    
        <header class="mb-12 border-b border-neutral-200 pb-8 flex flex-wrap items-end justify-between gap-4">
            <div>
                <span class="inline-block rounded-sm border border-seu px-3 py-1 text-xs font-semibold uppercase tracking-wider text-seu mb-4">
                    Secretaría de Extensión Universitaria
                </span>
                <h1 class="font-sans text-3xl font-semibold sm:text-4xl text-ink leading-tight">
                    Agenda de Eventos
                </h1>
            </div>
            <button id="btn-onesignal" class="flex items-center gap-2 rounded-sm border-2 border-seu px-5 py-2.5 text-sm font-semibold text-seu hover:bg-seu hover:text-white transition">
                <svg class="size-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                Activar notificaciones
            </button>
        </header>

        
        <div role="tablist" class="flex gap-8 border-b border-neutral-200 mb-8">
            <button id="tab-cultural" class="tab-btn active -mb-px border-b-2 border-seu pb-4 text-lg font-semibold text-ink transition" aria-selected="true">
                Agenda Cultural
            </button>
            <button id="tab-institucional" class="tab-btn -mb-px border-b-2 border-transparent pb-4 text-lg font-semibold text-neutral-500 hover:text-ink transition" aria-selected="false">
                Agenda Institucional
            </button>
        </div>

    
        <div id="panel-cultural" class="space-y-12">
            
            
            <section>
                <h2 class="text-xl font-semibold text-ink mb-6 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-seu"></span> Próximos eventos
                </h2>
                <div class="space-y-4">
                    <?php 
                    if ($query_cultural_proximos->have_posts()) : 
                        while ($query_cultural_proximos->have_posts()) : $query_cultural_proximos->the_post();
                            imprimir_tarjeta_evento();
                        endwhile; wp_reset_postdata();
                    else : 
                        echo '<p class="py-6 px-4 bg-white border border-neutral-200 rounded-sm text-sm text-neutral-500 italic">No hay eventos culturales programados próximamente.</p>';
                    endif; 
                    ?>
                </div>
            </section>

        
            <?php if ($query_cultural_pasados->have_posts()) : ?>
            <details class="group bg-neutral-50 border border-neutral-200 rounded-sm [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between p-4 font-semibold text-ink hover:text-seu transition">
                    Eventos anteriores 
                    <svg class="size-5 transition group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="p-4 border-t border-neutral-200 space-y-4 bg-white opacity-75">
                    <?php 
                    while ($query_cultural_pasados->have_posts()) : $query_cultural_pasados->the_post();
                        imprimir_tarjeta_evento();
                    endwhile; wp_reset_postdata(); 
                    ?>
                </div>
            </details>
            <?php endif; ?>
        </div>

    
        <div id="panel-institucional" class="space-y-12 hidden">
            
        
            <section>
                <h2 class="text-xl font-semibold text-ink mb-6 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-seu"></span> Próximos eventos
                </h2>
                <div class="space-y-4">
                    <?php 
                    if ($query_institucional_proximos->have_posts()) : 
                        while ($query_institucional_proximos->have_posts()) : $query_institucional_proximos->the_post();
                            imprimir_tarjeta_evento();
                        endwhile; wp_reset_postdata();
                    else : 
                        echo '<p class="py-6 px-4 bg-white border border-neutral-200 rounded-sm text-sm text-neutral-500 italic">No hay eventos institucionales programados próximamente.</p>';
                    endif; 
                    ?>
                </div>
            </section>

            
            <?php if ($query_institucional_pasados->have_posts()) : ?>
            <details class="group bg-neutral-50 border border-neutral-200 rounded-sm [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between p-4 font-semibold text-ink hover:text-seu transition">
                    Eventos Anteriores (Histórico)
                    <svg class="size-5 transition group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                </summary>
                <div class="p-4 border-t border-neutral-200 space-y-4 bg-white opacity-75">
                    <?php 
                    while ($query_institucional_pasados->have_posts()) : $query_institucional_pasados->the_post();
                        imprimir_tarjeta_evento();
                    endwhile; wp_reset_postdata(); 
                    ?>
                </div>
            </details>
            <?php endif; ?>
        </div>

    </div>
</main>

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

        
            tabCultural.classList.toggle('border-seu', mostrarCultural);
            tabCultural.classList.toggle('border-transparent', !mostrarCultural);
            tabCultural.classList.toggle('text-ink', mostrarCultural);
            tabCultural.classList.toggle('text-neutral-500', !mostrarCultural);

        
            tabInstitucional.classList.toggle('border-seu', !mostrarCultural);
            tabInstitucional.classList.toggle('border-transparent', mostrarCultural);
            tabInstitucional.classList.toggle('text-ink', !mostrarCultural);
            tabInstitucional.classList.toggle('text-neutral-500', mostrarCultural);
        }

        tabCultural.addEventListener('click', () => mostrarAgenda('cultural'));
        tabInstitucional.addEventListener('click', () => mostrarAgenda('institucional'));

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

<?php get_footer(); ?>