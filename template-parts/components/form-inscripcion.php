<?php
/**
 * Componente: formulario dinámico de Inscripción para Capacitaciones
 */

$post_id = get_the_ID();
$titulo_curso = get_the_title( $post_id );
$arancel = get_field( 'arancel', $post_id );


$es_gratuito = false;
if ( empty($arancel) || strpos( strtolower($arancel), 'gratuito' ) !== false || strpos( strtolower($arancel), 'sin costo' ) !== false ) {
    $es_gratuito = true;
}
?>

<?php if ( isset($_GET['estado']) && $_GET['estado'] === 'exito' ) : ?>
    <div class="mb-8 rounded-sm bg-emerald-50 border border-emerald-200 p-6 text-emerald-800">
        <h4 class="font-sans font-semibold text-xl mb-2">¡Inscripción enviada con éxito!</h4>
        <p class="text-sm">Registramos tus datos correctamente. A la brevedad vas a recibír un correo de confirmación con los detalles de la capacitación.</p>
    </div>
<?php endif; ?>
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" enctype="multipart/form-data" class="grid gap-8">

    <input type="hidden" name="action" value="procesar_inscripcion_capacitacion">
    <input type="hidden" name="capacitacion_id" value="<?php echo esc_attr( $post_id ); ?>">
    <input type="hidden" name="capacitacion_titulo" value="<?php echo esc_attr( $titulo_curso ); ?>">
    <?php wp_nonce_field('inscripcion_nonce', 'inscripcion_nonce_field'); ?>


    <div class="border-b border-neutral-200 pb-4">
        <h3 class="font-sans text-xl font-semibold mb-2">
            Inscripción: <span class="text-seu"><?php echo esc_html( $titulo_curso ); ?></span>
        </h3>
        
        <?php if ( ! $es_gratuito ) : ?>
            
            <div class="bg-neutral-50 p-4 rounded-sm border border-neutral-200 text-sm text-neutral-700 mt-4">
                <h4 class="font-semibold text-ink mb-2">Datos para abonar y subir el comprobante:</h4>
                <p><strong>Arancel de este curso:</strong> <?php echo esc_html( $arancel ); ?></p>
                <hr class="my-2 border-neutral-200">
                <p>Fundación Universidad Nacional de San Luis<br>
                CUIT: 30-64873112-0 | IVA: Exento<br>
                CBU Nº 0720282920000000267722 | Cta. Cte. N° 2677/2<br>
                Alias: GRINGO.CACTUS.TIMON<br>
                Banco Santander (Sucursal N° 0282 – San Luis)</p>
                <p class="text-xs text-neutral-500 mt-2">* Gastos bancarios a cargo del cliente. Recomendado pago como Transferencia.</p>
            </div>
        <?php else : ?>
            
            <div class="bg-emerald-50 p-4 rounded-sm border border-emerald-200 text-sm text-emerald-800 mt-4 font-medium">
                Esta capacitación es de carácter gratuito. Completá tus datos para asegurar tu lugar.
            </div>
        <?php endif; ?>
    </div>

    
    <div class="grid gap-6 sm:grid-cols-2">
        <div>
            <label class="lbl">Correo electrónico *</label>
            <input type="email" name="correo" class="fld" required>
        </div>
        
        <?php if ( ! $es_gratuito ) : ?>
        
            <div>
                <label class="lbl">Comprobante de pago * (Max 10MB)</label>
                <input type="file" name="comprobante" accept=".pdf, .jpg, .jpeg, .png" class="fld file:mr-3 file:rounded-sm file:border-0 file:bg-neutral-200 file:px-3 file:py-1" required>
            </div>
        <?php else: ?>
            
            <div class="hidden sm:block"></div>
        <?php endif; ?>

        <div>
            <label class="lbl">Apellido/s y Nombre/s *</label>
            <input type="text" name="nombre_completo" class="fld" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="lbl">DNI *</label>
                <input type="text" name="dni" class="fld" required>
            </div>
            <div>
                <label class="lbl">Edad *</label>
                <input type="number" name="edad" min="16" class="fld" required>
            </div>
        </div>

        <div>
            <label class="lbl">Número de teléfono *</label>
            <input type="tel" name="telefono" class="fld" required>
        </div>

        <fieldset>
            <legend class="lbl">Ocupación *</legend>
            <div class="grid grid-cols-2 gap-2 text-sm mt-2">
                <label class="flex items-center gap-2"><input type="radio" name="ocupacion" value="Docente UNSL" class="text-seu focus:ring-seu" required> Docente UNSL</label>
                <label class="flex items-center gap-2"><input type="radio" name="ocupacion" value="Nodocente UNSL" class="text-seu focus:ring-seu" required> Nodocente UNSL</label>
                <label class="flex items-center gap-2"><input type="radio" name="ocupacion" value="Estudiante UNSL" class="text-seu focus:ring-seu" required> Estudiante UNSL</label>
                <label class="flex items-center gap-2"><input type="radio" name="ocupacion" value="Otro" class="text-seu focus:ring-seu" required> Otro</label>
            </div>
        </fieldset>

        <div class="sm:col-span-2">
            <label class="lbl">Comentarios</label>
            <textarea name="comentarios" rows="3" class="fld"></textarea>
        </div>
    </div>

    <div>
        <button type="submit" class="w-full sm:w-auto rounded-sm bg-seu px-8 py-4 font-semibold text-white hover:bg-seu-dark transition">
            Enviar inscripción
        </button>
        <p class="text-xs text-neutral-500 mt-3">Se enviará una copia de tus respuestas por correo electrónico a la dirección proporcionada.</p>
    </div>
</form>