<?php
/**
 * Componente: Calendario dinámico
 * 
 */
$sala_activa  = isset($_GET['sala']) ? sanitize_text_field($_GET['sala']) : 'AUDITORIO';
$vista_activa = isset($_GET['vista']) ? sanitize_text_field($_GET['vista']) : 'semana';
$fecha_base   = isset($_GET['fecha']) ? sanitize_text_field($_GET['fecha']) : date('Y-m-d', current_time('timestamp'));
$fechas_mostrar = array();
if ($vista_activa === 'dia') {
    $fechas_mostrar[] = $fecha_base;
} else {
    for ($i = 0; $i < 7; $i++) {
        $fechas_mostrar[] = date('Y-m-d', strtotime("+$i days", strtotime($fecha_base)));
    }
}
$meta_query = array(
    'relation' => 'AND',
    array(
        'key'     => 'sala',
        'value'   => $sala_activa,
        'compare' => '='
    )
);
if ($vista_activa === 'dia') {
    $meta_query[] = array(
        'key'     => 'fecha_evento',
        'value'   => $fechas_mostrar[0],
        'compare' => '=',
        'type'    => 'DATE'
    );
} else {
    $meta_query[] = array(
        'key'     => 'fecha_evento',
        'value'   => array($fechas_mostrar[0], $fechas_mostrar[6]),
        'compare' => 'BETWEEN',
        'type'    => 'DATE'
    );
}
$args = array(
    'post_type'      => 'reserva_cc', 
    'post_status'    => 'publish', 
    'posts_per_page' => -1,
    'meta_query'     => $meta_query
);
$query_reservas = new WP_Query($args);
$mapa_ocupacion = array();
if ($query_reservas->have_posts()) {
    while ($query_reservas->have_posts()) {
        $query_reservas->the_post();
        $fecha = get_post_meta(get_the_ID(), 'fecha_evento', true);
        
        $h_ini = intval(substr(get_post_meta(get_the_ID(), 'hora_armado', true), 0, 2));
        $h_fin = intval(substr(get_post_meta(get_the_ID(), 'hora_fin', true), 0, 2));
        
        if (!$h_ini) {
            $hora_exacta = get_post_meta(get_the_ID(), 'hora', true); 
            $h_ini = intval(substr($hora_exacta, 0, 2));
            $h_fin = $h_ini;
        }
        for ($h = $h_ini; $h <= $h_fin; $h++) {
            $hora_str = sprintf("%02d:00", $h);
            $mapa_ocupacion[$fecha][$hora_str] = true;
        }
    }
    wp_reset_postdata();
}

$horas_dia = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
?>

<section class="py-12">

    <form id="form-filtros-calendario" method="GET" class="mb-6 flex flex-wrap items-center gap-6 bg-white p-5 border border-neutral-200 rounded-sm shadow-sm">
        
        <div class="flex items-center gap-2">
            <label for="sala" class="text-sm font-semibold text-ink">Sala:</label>
            <select name="sala" id="sala" class="rounded-sm border-neutral-300 bg-neutral-50 px-3 py-2 text-sm text-neutral-700 focus:border-seu focus:ring-seu outline-none transition">
                <option value="AUDITORIO" <?php selected($sala_activa, 'AUDITORIO'); ?>>Auditorio Mauricio López</option>
                <option value="MICROCINE" <?php selected($sala_activa, 'MICROCINE'); ?>>Microcine</option>
            </select>
        </div>

        <div class="flex items-center gap-2">
            <label for="vista" class="text-sm font-semibold text-ink">Vista:</label>
            <select name="vista" id="vista" class="rounded-sm border-neutral-300 bg-neutral-50 px-3 py-2 text-sm text-neutral-700 focus:border-seu focus:ring-seu outline-none transition">
                <option value="dia" <?php selected($vista_activa, 'dia'); ?>>Día</option>
                <option value="semana" <?php selected($vista_activa, 'semana'); ?>>Semana</option>
            </select>
        </div>

        <div class="flex items-center gap-2">
            <label for="fecha" class="text-sm font-semibold text-ink">Fecha inicial:</label>
            <input type="date" name="fecha" id="fecha" value="<?php echo esc_attr($fecha_base); ?>" class="rounded-sm border-neutral-300 bg-neutral-50 px-3 py-2 text-sm text-neutral-700 focus:border-seu focus:ring-seu outline-none transition">
        </div>
    </form>


    <div class="overflow-x-auto rounded-sm border border-neutral-200 shadow-sm">
        <table class="w-full text-left text-sm whitespace-nowrap">
            <thead class="bg-neutral-100 text-ink border-b border-neutral-200">
                <tr>
                    <th class="px-4 py-3 font-semibold border-r border-neutral-200 w-24 text-center">Hora</th>
                    <?php foreach ($fechas_mostrar as $fecha) : ?>
                        <th class="px-4 py-3 font-semibold text-center uppercase tracking-wide">
                            <span class="block text-base text-neutral-500"><?php echo date_i18n('l', strtotime($fecha)); ?></span>
                            <span class="block text-base"><?php echo date_i18n('j/n', strtotime($fecha)); ?></span>
                        </th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-200 bg-white">
                <?php foreach ($horas_dia as $hora) : ?>
                    <tr class="hover:bg-neutral-50 transition">
                        <td class="px-4 py-3 font-medium text-neutral-600 border-r border-neutral-200 text-center bg-neutral-50/50"><?php echo $hora; ?></td>

                        <?php
                        foreach ($fechas_mostrar as $fecha) {
                            $is_ocupado = isset($mapa_ocupacion[$fecha][$hora]);

                            if ($is_ocupado) {
                                echo '<td class="px-2 py-3 text-center border-r border-neutral-100 last:border-0"><span class="inline-block rounded-sm bg-red-100 px-3 py-1 text-base font-bold uppercase tracking-wider text-seu border border-red-200">Ocupado</span></td>';
                            } else {
                                echo '<td class="px-2 py-3 text-center border-r border-neutral-100 last:border-0"><span class="inline-block rounded-sm bg-emerald-50 px-3 py-1 text-base font-semibold uppercase tracking-wider text-emerald-700 border border-emerald-100">Libre</span></td>';
                            }
                        }
                        ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('form-filtros-calendario');
        const controles = form.querySelectorAll('select, input');
        
        controles.forEach(control => {
            control.addEventListener('change', () => {
                form.submit(); 
            });
        });
    });
</script>