<?php

/**
 * Componente: Calendario dinámico semanal
 */


$fechas_semana = array();
$hoy = current_time('timestamp');
for ($i = 0; $i < 7; $i++) {
    $fechas_semana[] = date('Y-m-d', strtotime("+$i days", $hoy));
}


$args = array(
    'post_type'      => 'reserva_cc',
    'post_status'    => 'publish', 
    'posts_per_page' => -1,
    'meta_query'     => array(
        array(
            'key'     => 'fecha_evento',
            'value'   => array($fechas_semana[0], $fechas_semana[6]),
            'compare' => 'BETWEEN',
            'type'    => 'DATE'
        )
    )
);
$query_reservas = new WP_Query($args);


$mapa_ocupacion = array();
if ($query_reservas->have_posts()) {
    while ($query_reservas->have_posts()) {
        $query_reservas->the_post();
        $fecha  = get_post_meta(get_the_ID(), 'fecha_evento', true);
        $h_ini  = intval(substr(get_post_meta(get_the_ID(), 'hora_armado', true), 0, 2));
        $h_fin  = intval(substr(get_post_meta(get_the_ID(), 'hora_fin', true), 0, 2));

    
        for ($h = $h_ini; $h <= $h_fin; $h++) {
            $hora_str = sprintf("%02d:00", $h);
            $mapa_ocupacion[$fecha][$hora_str] = true;
        }
    }
    wp_reset_postdata();
}

$horas_dia = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'];
?>

<div class="overflow-x-auto rounded-sm border border-neutral-200">
    <table class="w-full text-left text-sm whitespace-nowrap">
        <thead class="bg-neutral-100 text-ink border-b border-neutral-200">
            <tr>
                <th class="px-4 py-3 font-semibold border-r border-neutral-200">Hora</th>
                <?php foreach ($fechas_semana as $fecha) : ?>
                    <th class="px-4 py-3 font-semibold text-center">

                        <?php echo date_i18n('D j/n', strtotime($fecha)); ?>
                    </th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody class="divide-y divide-neutral-200 bg-white">
            <?php foreach ($horas_dia as $hora) : ?>
                <tr class="hover:bg-neutral-50 transition">
                    <td class="px-4 py-2 font-medium text-neutral-600 border-r border-neutral-200"><?php echo $hora; ?></td>

                    <?php
                    foreach ($fechas_semana as $fecha) {

                        $is_ocupado = isset($mapa_ocupacion[$fecha][$hora]);

                        if ($is_ocupado) {
                            echo '<td class="px-2 py-2 text-center"><span class="block rounded-sm bg-red-100 px-2 py-1 text-xs font-semibold text-seu">Ocupado</span></td>';
                        } else {
                            echo '<td class="px-2 py-2 text-center"><span class="block rounded-sm bg-emerald-100 px-2 py-1 text-xs font-semibold text-emerald-800">Libre</span></td>';
                        }
                    }
                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>