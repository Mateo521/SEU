<?php

function seu_unsl_theme_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'seu_unsl_theme_setup');

function seu_unsl_register_cpts()
{

    $labels_capacitacion = array(
        'name'                  => 'Capacitaciones',
        'singular_name'         => 'Capacitación',
        'menu_name'             => 'Capacitaciones',
        'add_new'               => 'Añadir nueva',
        'add_new_item'          => 'Añadir nueva capacitación',
        'edit_item'             => 'Editar capacitación',
        'all_items'             => 'Todas las capacitaciones',
    );
    $args_capacitacion = array(
        'labels'                => $labels_capacitacion,
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-welcome-learn-more',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'capacitaciones'),
    );
    register_post_type('capacitacion', $args_capacitacion);

    $labels_diplomatura = array(
        'name'                  => 'Diplomaturas',
        'singular_name'         => 'Diplomatura',
        'menu_name'             => 'Diplomaturas',
        'add_new'               => 'Añadir nueva',
        'add_new_item'          => 'Añadir nueva diplomatura',
        'edit_item'             => 'Editar diplomatura',
        'all_items'             => 'Todas las diplomaturas',
    );
    $args_diplomatura = array(
        'labels'                => $labels_diplomatura,
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-awards',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'          => true,
        'rewrite'               => array('slug' => 'diplomaturas'),
    );
    register_post_type('diplomatura', $args_diplomatura);

    $labels_tax_formacion = array(
        'name'              => 'Categorías de formación',
        'singular_name'     => 'Categoría de formación',
        'search_items'      => 'Buscar categorías',
        'all_items'         => 'Todas las categorías',
        'edit_item'         => 'Editar categoría',
        'add_new_item'      => 'Añadir Nueva categoría',
    );
    $args_tax_formacion = array(
        'hierarchical'      => true,
        'labels'            => $labels_tax_formacion,
        'show_ui'           => true,
        'show_in_rest'      => true,
    );
    register_taxonomy('categoria_formacion', array('capacitacion', 'diplomatura'), $args_tax_formacion);
}
add_action('init', 'seu_unsl_register_cpts');



$labels_proyecto = array(
    'name'                  => 'Proyectos',
    'singular_name'         => 'Proyecto',
    'menu_name'             => 'Proyectos',
    'add_new'               => 'Añadir nuevo',
    'add_new_item'          => 'Añadir nuevo proyecto',
    'edit_item'             => 'Editar proyecto',
    'all_items'             => 'Todos los proyectos',
);
$args_proyecto = array(
    'labels'                => $labels_proyecto,
    'public'                => true,
    'has_archive'           => true,
    'menu_icon'             => 'dashicons-portfolio',
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'show_in_rest'          => true,
    'rewrite'               => array('slug' => 'proyectos'),
);
register_post_type('proyecto', $args_proyecto);



register_taxonomy('tipo_proyecto', array('proyecto'), array(
    'hierarchical'      => true,
    'labels'            => array('name' => 'Tipos de Proyecto', 'singular_name' => 'Tipo de Proyecto'),
    'show_ui'           => true,
    'show_in_rest'      => true,
));


$labels_agenda = array(
    'name'                  => 'Eventos de agenda',
    'singular_name'         => 'Evento',
    'menu_name'             => 'Agendas',
    'add_new'               => 'Añadir evento',
    'add_new_item'          => 'Añadir nuevo evento',
    'edit_item'             => 'Editar evento',
    'all_items'             => 'Todos los eventos',
);
$args_agenda = array(
    'labels'                => $labels_agenda,
    'public'                => true,
    'has_archive'           => true,
    'menu_icon'             => 'dashicons-calendar-alt',
    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
    'show_in_rest'          => true,
    'rewrite'               => array('slug' => 'agendas'),
);
register_post_type('evento_agenda', $args_agenda);


register_taxonomy('tipo_agenda', array('evento_agenda'), array(
    'hierarchical'      => true,
    'labels'            => array('name' => 'Tipos de agenda', 'singular_name' => 'Tipo de agenda'),
    'show_ui'           => true,
    'show_in_rest'      => true,
));


$labels_reserva = array(
    'name'                  => 'Reservas',
    'singular_name'         => 'Reserva',
    'menu_name'             => 'Reservas espacios',
    'all_items'             => 'Todas las reservas',
    'edit_item'             => 'Ver reserva',
);
$args_reserva = array(
    'labels'                => $labels_reserva,
    'public'                => false,
    'show_ui'               => true,
    'has_archive'           => false,
    'menu_icon'             => 'dashicons-tickets-alt',
    'supports'              => array('title'),
    'capability_type'       => 'post',
);
register_post_type('reserva_cc', $args_reserva);



function seu_unsl_cpt_inscripciones()
{
    register_post_type('inscripcion_curso', array(
        'labels' => array(
            'name'          => 'Inscripciones',
            'singular_name' => 'Inscripción',
            'menu_name'     => 'Inscripciones',
            'all_items'     => 'Todas las Inscripciones',
        ),
        'public'          => false,
        'show_ui'         => true,
        'menu_icon'       => 'dashicons-clipboard',
        'menu_position'   => 26,
        'supports'        => array('title', 'custom-fields'),
        'capability_type' => 'post',
    ));
}
add_action('init', 'seu_unsl_cpt_inscripciones');



add_action('admin_post_procesar_inscripcion_capacitacion', 'seu_guardar_inscripcion_curso');
add_action('admin_post_nopriv_procesar_inscripcion_capacitacion', 'seu_guardar_inscripcion_curso');

function seu_guardar_inscripcion_curso()
{

    if (! isset($_POST['inscripcion_nonce_field']) || ! wp_verify_nonce($_POST['inscripcion_nonce_field'], 'inscripcion_nonce')) {
        wp_die('Error de seguridad. Por favor, recarga la página e intenta de nuevo.');
    }


    $capacitacion_id = intval($_POST['capacitacion_id']);
    $titulo_curso    = sanitize_text_field($_POST['capacitacion_titulo']);
    $nombre          = sanitize_text_field($_POST['nombre_completo']);
    $correo          = sanitize_email($_POST['correo']);
    $dni             = sanitize_text_field($_POST['dni']);
    $edad            = intval($_POST['edad']);
    $telefono        = sanitize_text_field($_POST['telefono']);
    $ocupacion       = sanitize_text_field($_POST['ocupacion']);
    $comentarios     = sanitize_textarea_field($_POST['comentarios']);


    $inscripcion_data = array(
        'post_title'   => $nombre . ' - ' . $titulo_curso,
        'post_type'    => 'inscripcion_curso',
        'post_status'  => 'publish',
    );
    $inscripcion_id = wp_insert_post($inscripcion_data);


    if ($inscripcion_id) {
        update_post_meta($inscripcion_id, 'curso_id', $capacitacion_id);
        update_post_meta($inscripcion_id, 'correo', $correo);
        update_post_meta($inscripcion_id, 'dni', $dni);
        update_post_meta($inscripcion_id, 'edad', $edad);
        update_post_meta($inscripcion_id, 'telefono', $telefono);
        update_post_meta($inscripcion_id, 'ocupacion', $ocupacion);
        update_post_meta($inscripcion_id, 'comentarios', $comentarios);


        if (! empty($_FILES['comprobante']['name'])) {
            $upload_dir = wp_upload_dir();
            $directorio_seguro = $upload_dir['basedir'] . '/comprobantes_seu';


            if (! file_exists($directorio_seguro)) {
                wp_mkdir_p($directorio_seguro);

                file_put_contents($directorio_seguro . '/.htaccess', "Require all denied\n");
                file_put_contents($directorio_seguro . '/index.php', "<?php // Silencio es oro.");
            }

            $archivo = $_FILES['comprobante'];
            $extension = pathinfo($archivo['name'], PATHINFO_EXTENSION);


            $nombre_archivo_seguro = 'comprobante_' . $inscripcion_id . '_' . wp_generate_password(8, false) . '.' . $extension;
            $destino = $directorio_seguro . '/' . $nombre_archivo_seguro;


            if (move_uploaded_file($archivo['tmp_name'], $destino)) {

                update_post_meta($inscripcion_id, 'comprobante_path', $nombre_archivo_seguro);
            }
        }




        //  wp_mail() para enviar el correo de confirmación al usuario
    }


    $url_redireccion = get_permalink($capacitacion_id);
    $url_redireccion = add_query_arg('estado', 'exito', $url_redireccion);

    wp_redirect($url_redireccion);
    exit;
}



add_filter('manage_inscripcion_curso_posts_columns', 'seu_columnas_inscripciones');
function seu_columnas_inscripciones($columns)
{

    $nuevas_columnas = array(
        'cb'      => $columns['cb'],
        'title'   => 'Inscripto y Capacitación',
        'dni'     => 'DNI',
        'correo'  => 'Correo',
        'fecha'   => 'Fecha de Inscripción'
    );
    return $nuevas_columnas;
}


add_action('manage_inscripcion_curso_posts_custom_column', 'seu_datos_columnas_inscripciones', 10, 2);
function seu_datos_columnas_inscripciones($column, $post_id)
{
    if ($column === 'dni') {
        echo esc_html(get_post_meta($post_id, 'dni', true));
    }
    if ($column === 'correo') {
        echo esc_html(get_post_meta($post_id, 'correo', true));
    }
}


add_action('add_meta_boxes', 'seu_caja_detalles_inscripcion');
function seu_caja_detalles_inscripcion()
{
    add_meta_box(
        'detalles_inscripcion_meta',
        'Detalles de la Inscripción',
        'seu_imprimir_detalles_inscripcion',
        'inscripcion_curso',
        'normal',
        'high'
    );
}


function seu_imprimir_detalles_inscripcion($post)
{

    $curso_id    = get_post_meta($post->ID, 'curso_id', true);
    $correo      = get_post_meta($post->ID, 'correo', true);
    $dni         = get_post_meta($post->ID, 'dni', true);
    $edad        = get_post_meta($post->ID, 'edad', true);
    $telefono    = get_post_meta($post->ID, 'telefono', true);
    $ocupacion   = get_post_meta($post->ID, 'ocupacion', true);
    $comentarios = get_post_meta($post->ID, 'comentarios', true);
    $comprobante = get_post_meta($post->ID, 'comprobante_url', true);


    $nombre_curso = $curso_id ? '<a href="' . get_edit_post_link($curso_id) . '">' . get_the_title($curso_id) . '</a>' : 'No especificado';


    echo '<table class="form-table" style="width: 100%; max-width: 800px; text-align: left;">';
    echo '<tbody style="background: #f9f9f9; border: 1px solid #ddd;">';

    echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd; width: 25%;">Capacitación:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;"><strong>' . $nombre_curso . '</strong></td></tr>';
    echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd;">Correo Electrónico:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;"><a href="mailto:' . esc_attr($correo) . '">' . esc_html($correo) . '</a></td></tr>';
    echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd;">DNI:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;">' . esc_html($dni) . '</td></tr>';
    echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd;">Edad:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;">' . esc_html($edad) . ' años</td></tr>';
    echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd;">Teléfono:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;">' . esc_html($telefono) . '</td></tr>';
    echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd;">Ocupación:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;">' . esc_html($ocupacion) . '</td></tr>';

    if (! empty($comentarios)) {
        echo '<tr><th style="padding: 15px; border-bottom: 1px solid #ddd;">Comentarios:</th><td style="padding: 15px; border-bottom: 1px solid #ddd;">' . nl2br(esc_html($comentarios)) . '</td></tr>';
    }




    $comprobante_path = get_post_meta($post->ID, 'comprobante_path', true);

    if ($comprobante_path) {
        $download_url = admin_url('admin-post.php?action=descargar_comprobante&id=' . $post->ID . '&file=' . urlencode($comprobante_path));

        echo '<tr><th style="padding: 15px;">Comprobante de Pago:</th><td style="padding: 15px;">
            <a href="' . esc_url($download_url) . '" class="button button-primary" style="background: #8a0c18; border-color: #8a0c18;">Descargar Comprobante Seguro</a>
        </td></tr>';
    } else {
        echo '<tr><th style="padding: 15px;">Comprobante de Pago:</th><td style="padding: 15px;"><em style="color: #666;">No se adjuntó comprobante (Capacitación gratuita).</em></td></tr>';
    }




    echo '</tbody></table>';
}



add_action('admin_post_descargar_comprobante', 'seu_descargar_comprobante_seguro');

function seu_descargar_comprobante_seguro()
{

    if (! current_user_can('edit_posts')) {
        wp_die('No tienes permisos para ver este archivo.');
    }

    if (! isset($_GET['file']) || ! isset($_GET['id'])) {
        wp_die('Petición inválida.');
    }

    $filename = sanitize_file_name($_GET['file']);
    $post_id  = intval($_GET['id']);

    $archivo_guardado = get_post_meta($post_id, 'comprobante_path', true);
    if ($archivo_guardado !== $filename) {
        wp_die('Acceso denegado.');
    }

    $upload_dir = wp_upload_dir();
    $file_path = $upload_dir['basedir'] . '/comprobantes_seu/' . $filename;

    if (file_exists($file_path)) {
        $mime_type = wp_check_filetype($file_path)['type'];
        header('Content-Description: File Transfer');
        header('Content-Type: ' . $mime_type);
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);
        exit;
    } else {
        wp_die('El archivo no existe en el servidor.');
    }
}



add_action('admin_post_procesar_reserva_cc', 'seu_guardar_reserva_cc');
add_action('admin_post_nopriv_procesar_reserva_cc', 'seu_guardar_reserva_cc');

function seu_guardar_reserva_cc()
{
    if (! isset($_POST['reserva_nonce']) || ! wp_verify_nonce($_POST['reserva_nonce'], 'reserva_cc_nonce')) {
        wp_die('Error de seguridad.');
    }


    $nombre    = sanitize_text_field($_POST['nombre']);
    $sala      = sanitize_text_field($_POST['sala']);
    $fecha     = sanitize_text_field($_POST['fecha_evento']);
    $actividad = sanitize_text_field($_POST['actividad_detalle']);


    $reserva_data = array(
        'post_title'   => $sala . ' - ' . $fecha . ' (' . $nombre . ')',
        'post_type'    => 'reserva_cc',
        'post_status'  => 'draft',
    );
    $reserva_id = wp_insert_post($reserva_data);

    if ($reserva_id) {

        update_post_meta($reserva_id, 'correo', sanitize_email($_POST['correo']));
        update_post_meta($reserva_id, 'nombre', $nombre);
        update_post_meta($reserva_id, 'domicilio', sanitize_text_field($_POST['domicilio']));
        update_post_meta($reserva_id, 'dni', sanitize_text_field($_POST['dni']));
        update_post_meta($reserva_id, 'telefono', sanitize_text_field($_POST['telefono']));
        update_post_meta($reserva_id, 'profesion', sanitize_text_field($_POST['profesion']));
        update_post_meta($reserva_id, 'sala', $sala);
        update_post_meta($reserva_id, 'actividad', $actividad);
        update_post_meta($reserva_id, 'fecha_evento', $fecha);
        update_post_meta($reserva_id, 'hora_armado', sanitize_text_field($_POST['hora_armado']));
        update_post_meta($reserva_id, 'hora_espectaculo', sanitize_text_field($_POST['hora_espectaculo']));
        update_post_meta($reserva_id, 'hora_fin', sanitize_text_field($_POST['hora_fin']));
        update_post_meta($reserva_id, 'entidad', sanitize_text_field($_POST['entidad']));
        update_post_meta($reserva_id, 'aval_unsl', sanitize_text_field($_POST['aval_unsl']));
        update_post_meta($reserva_id, 'aval_ajeno', sanitize_text_field($_POST['aval_ajeno']));
        update_post_meta($reserva_id, 'req_otro', sanitize_text_field($_POST['req_otro']));


        if (isset($_POST['req_tecnicos']) && is_array($_POST['req_tecnicos'])) {
            $req_tecnicos = array_map('sanitize_text_field', $_POST['req_tecnicos']);
            update_post_meta($reserva_id, 'req_tecnicos', $req_tecnicos);
        }
    }


    $url = add_query_arg('reserva', 'enviada', wp_get_referer());
    wp_redirect($url);
    exit;
}


add_filter('manage_reserva_cc_posts_columns', 'seu_columnas_reservas');
function seu_columnas_reservas($columns)
{
    $nuevas_columnas = array(
        'cb'      => $columns['cb'],
        'title'   => 'Reserva',
        'sala'    => 'Sala',
        'fecha'   => 'Fecha del Evento',
        'estado'  => 'Estado'
    );
    return $nuevas_columnas;
}

add_action('manage_reserva_cc_posts_custom_column', 'seu_datos_columnas_reservas', 10, 2);
function seu_datos_columnas_reservas($column, $post_id)
{
    if ($column === 'sala') {
        echo esc_html(get_post_meta($post_id, 'sala', true));
    }
    if ($column === 'fecha') {
        $fecha = get_post_meta($post_id, 'fecha_evento', true);
        echo $fecha ? date_i18n('d/m/Y', strtotime($fecha)) : '-';
    }
    if ($column === 'estado') {
        $status = get_post_status($post_id);
        if ($status === 'publish') {
            echo '<span style="color: green; font-weight: bold;">Confirmada</span>';
        } else {
            echo '<span style="color: #b32d2e; font-weight: bold;">Pendiente</span>';
        }
    }
}

/*
add_action( 'add_meta_boxes', 'seu_caja_detalles_reserva' );
function seu_caja_detalles_reserva() {
    add_meta_box(
        'detalles_reserva_meta', 
        'Detalles de la Solicitud de Reserva', 
        'seu_imprimir_detalles_reserva', 
        'reserva_cc', 
        'normal', 
        'high' 
    );
}
*/
/*
function seu_imprimir_detalles_reserva( $post ) {

    $correo      = get_post_meta( $post->ID, 'correo', true );
    $nombre      = get_post_meta( $post->ID, 'nombre', true );
    $domicilio   = get_post_meta( $post->ID, 'domicilio', true );
    $dni         = get_post_meta( $post->ID, 'dni', true );
    $telefono    = get_post_meta( $post->ID, 'telefono', true );
    $profesion   = get_post_meta( $post->ID, 'profesion', true );
    $sala        = get_post_meta( $post->ID, 'sala', true );
    $actividad   = get_post_meta( $post->ID, 'actividad', true );
    $fecha       = get_post_meta( $post->ID, 'fecha_evento', true );
    $h_armado    = get_post_meta( $post->ID, 'hora_armado', true );
    $h_espectaculo = get_post_meta( $post->ID, 'hora_espectaculo', true );
    $h_fin       = get_post_meta( $post->ID, 'hora_fin', true );
    $entidad     = get_post_meta( $post->ID, 'entidad', true );
    $aval_unsl   = get_post_meta( $post->ID, 'aval_unsl', true );
    $aval_ajeno  = get_post_meta( $post->ID, 'aval_ajeno', true );
    $req_tecnicos = get_post_meta( $post->ID, 'req_tecnicos', true );
    $req_otro    = get_post_meta( $post->ID, 'req_otro', true );


    echo '<table class="form-table" style="width: 100%; text-align: left;">';
    echo '<tbody style="background: #f9f9f9; border: 1px solid #ddd;">';
    

    echo '<tr><th colspan="2" style="background:#e5e5e5; padding: 10px;">1. Datos del Solicitante</th></tr>';
    echo '<tr><th style="padding: 10px; width: 30%;">Nombre:</th><td style="padding: 10px;">' . esc_html($nombre) . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Correo:</th><td style="padding: 10px;"><a href="mailto:'.esc_attr($correo).'">' . esc_html($correo) . '</a></td></tr>';
    echo '<tr><th style="padding: 10px;">DNI:</th><td style="padding: 10px;">' . esc_html($dni) . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Teléfono:</th><td style="padding: 10px;">' . esc_html($telefono) . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Domicilio:</th><td style="padding: 10px;">' . esc_html($domicilio) . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Profesión/Rol:</th><td style="padding: 10px;">' . esc_html($profesion) . '</td></tr>';


    echo '<tr><th colspan="2" style="background:#e5e5e5; padding: 10px;">2. Detalles de la Actividad</th></tr>';
    echo '<tr><th style="padding: 10px;">Sala:</th><td style="padding: 10px; font-weight:bold; color:#8a0c18;">' . esc_html($sala) . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Fecha:</th><td style="padding: 10px;">' . ($fecha ? date_i18n('d de F de Y', strtotime($fecha)) : '') . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Horarios:</th><td style="padding: 10px;">Armado: <strong>' . esc_html($h_armado) . '</strong> | Espectáculo: <strong>' . esc_html($h_espectaculo) . '</strong> | Fin: <strong>' . esc_html($h_fin) . '</strong></td></tr>';
    echo '<tr><th style="padding: 10px;">Actividad:</th><td style="padding: 10px;">' . nl2br(esc_html($actividad)) . '</td></tr>';
    echo '<tr><th style="padding: 10px;">Entidad/Grupo:</th><td style="padding: 10px;">' . esc_html($entidad) . '</td></tr>';
    
    if($aval_unsl) echo '<tr><th style="padding: 10px;">Aval UNSL:</th><td style="padding: 10px;">' . esc_html($aval_unsl) . '</td></tr>';
    if($aval_ajeno) echo '<tr><th style="padding: 10px;">Aval Ajeno:</th><td style="padding: 10px;">' . esc_html($aval_ajeno) . '</td></tr>';


    echo '<tr><th colspan="2" style="background:#e5e5e5; padding: 10px;">3. Requerimientos Técnicos</th></tr>';
    if ( ! empty( $req_tecnicos ) && is_array( $req_tecnicos ) ) {
        echo '<tr><th style="padding: 10px;">Técnica:</th><td style="padding: 10px;"><ul style="margin:0; padding-left:15px; list-style:disc;">';
        foreach ( $req_tecnicos as $req ) {
            echo '<li>' . esc_html($req) . '</li>';
        }
        echo '</ul></td></tr>';
    } else {
        echo '<tr><th style="padding: 10px;">Técnica:</th><td style="padding: 10px;"><em>Ninguno seleccionado</em></td></tr>';
    }
    
    if($req_otro) echo '<tr><th style="padding: 10px;">Otros Requerimientos:</th><td style="padding: 10px;">' . esc_html($req_otro) . '</td></tr>';

    echo '</tbody></table>';
}*/