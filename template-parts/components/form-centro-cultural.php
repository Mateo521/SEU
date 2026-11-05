<?php
/**
 * Componente: Formulario del centro cultural
 */
?>
<form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" class="grid gap-10">
    <input type="hidden" name="action" value="procesar_reserva_cc">
    <?php wp_nonce_field('reserva_cc_nonce', 'reserva_nonce'); ?>


    <fieldset>
        <legend class="mb-4 text-xl font-semibold border-b border-neutral-200 pb-2 w-full">1. Datos del solicitante</legend>
        <div class="grid gap-6 sm:grid-cols-2">
            <div><label class="lbl">Correo electrónico *</label><input type="email" name="correo" class="fld" required></div>
            <div><label class="lbl">Nombre y Apellido *</label><input type="text" name="nombre" class="fld" required></div>
            <div class="sm:col-span-2"><label class="lbl">Domicilio físico *</label><input type="text" name="domicilio" class="fld" required></div>
            <div><label class="lbl">DNI *</label><input type="text" name="dni" class="fld" required></div>
            <div><label class="lbl">Teléfono *</label><input type="tel" name="telefono" class="fld" required></div>
            <div><label class="lbl">Profesión / rol *</label><input type="text" name="profesion" class="fld" required></div>
            <div>
                <label class="lbl">Sala que solicita *</label>
                <select name="sala" class="fld" required>
                    <option value="" disabled selected>Seleccione una sala</option>
                    <option value="Auditorio">Auditorio Mauricio López</option>
                    <option value="Microcine">Microcine</option>
                </select>
            </div>
        </div>
    </fieldset>


    <fieldset>
        <legend class="mb-4 text-xl font-semibold border-b border-neutral-200 pb-2 w-full">2. Detalles de la actividad</legend>
        <div class="grid gap-6 sm:grid-cols-3">
            <div class="sm:col-span-3">
                <label class="lbl">Actividad a desarrollar *</label>
                <p class="text-xs text-neutral-500 mb-2">Detalle espectáculo, nombre de elenco, características.</p>
                <textarea name="actividad_detalle" class="fld" rows="3" required></textarea>
            </div>
            
            <div><label class="lbl">Fecha *</label><input type="date" name="fecha_evento" class="fld" required></div>
            
            <div><label class="lbl">Horario (de armado) *</label><input type="time" name="hora_armado" class="fld" required></div>
            <div><label class="lbl">Horario (del espectáculo) *</label><input type="time" name="hora_espectaculo" class="fld" required></div>
            <div><label class="lbl">Horario de finalización *</label><input type="time" name="hora_fin" class="fld" required></div>
            
            <div class="sm:col-span-2">
                <label class="lbl">Entidad que representa / grupo *</label>
                <input type="text" name="entidad" class="fld" required>
            </div>
            
            <div class="sm:col-span-3 grid sm:grid-cols-2 gap-6">
                <div>
                    <label class="lbl">Actividad de la UNSL (Autoridad que avala)</label>
                    <input type="text" name="aval_unsl" class="fld">
                </div>
                <div>
                    <label class="lbl">Actividad ajena a la UNSL (Explicitar)</label>
                    <input type="text" name="aval_ajeno" class="fld">
                </div>
            </div>
        </div>
    </fieldset>


    <fieldset>
        <legend class="mb-4 text-xl font-semibold border-b border-neutral-200 pb-2 w-full">3. Requerimientos técnicos</legend>
        <div class="grid sm:grid-cols-2 gap-4 text-sm text-ink">
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="1 mic atril" class="text-seu focus:ring-seu"> 1 mic en el atril</label>
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="1 mic mesa" class="text-seu focus:ring-seu"> 1 mic en la mesa</label>
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="Proyección imágenes" class="text-seu focus:ring-seu"> Proyección de imágenes</label>
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="Proyección videos" class="text-seu focus:ring-seu"> Proyección de videos</label>
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="Reunión híbrida" class="text-seu focus:ring-seu"> Reunión híbrida (Zoom/Meet)</label>
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="1 Mic preguntas" class="text-seu focus:ring-seu"> 1 Mic para preguntas</label>
            <label class="flex items-center gap-2"><input type="checkbox" name="req_tecnicos[]" value="Espectáculo artístico" class="text-seu focus:ring-seu"> Espectáculo artístico (Comunicarse con técnicos)</label>
        </div>
        <div class="mt-4">
            <label class="lbl">Otro requerimiento</label>
            <input type="text" name="req_otro" class="fld">
        </div>
    </fieldset>

    <div class="bg-neutral-50 p-6 rounded-sm border border-neutral-200 text-sm text-neutral-700 space-y-3">
        <h4 class="font-semibold text-ink text-base">NOTAS IMPORTANTES:</h4>
        <ul class="list-disc pl-5 space-y-2">
            <li>La <strong class="text-ink">CONFIRMACIÓN</strong> de la reserva se comunica por correo electrónico dentro de las 75 hs.</li>
            <li>El <strong class="text-ink">ARANCEL</strong> de sala será actualizado 30 días antes de la fecha solicitada. Solicitar instructivo de pago a <a href="mailto:seu.unsl@gmail.com" class="text-seu font-medium hover:underline">seu.unsl@gmail.com</a>.</li>
            <li>Tras confirmarse, debe comunicarse con el equipo técnico (Tel: +54 0266 4520300 interno 5560).</li>
            <li>20 días antes se debe firmar el contrato.</li>
            <li>En caso de <strong class="text-ink">SUSPENSIÓN</strong>, comunicar a la brevedad a la SEU (interno 5321).</li>
        </ul>
    </div>

    <div>
        <button type="submit" class="w-full sm:w-auto rounded-sm bg-seu px-8 py-4 font-semibold text-white hover:bg-seu-dark transition">
            Enviar solicitud de reserva
        </button>
    </div>
</form>