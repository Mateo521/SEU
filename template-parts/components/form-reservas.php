<?php

/**
 * Componente: Formulario de Reservas
 */
?>
<form class="grid gap-12 lg:grid-cols-12">

    <fieldset class="lg:col-span-12">
        <legend class="mb-4 text-xl font-semibold">1: Seleccioná un espacio</legend>
        <div class="grid gap-6 md:grid-cols-3">
            <label class="cursor-pointer">
                <input type="radio" name="espacio" class="peer sr-only" checked>
                <div class="h-full rounded-sm border border-neutral-300 p-6 transition peer-checked:border-seu peer-checked:ring-1 peer-checked:ring-seu">
                    <h4 class="text-lg font-semibold">Auditorio Mauricio López</h4>
                    <p class="mt-1 text-sm font-medium text-seu">Capacidad: 440 personas</p>
                    <ul class="mt-4 space-y-1 text-sm text-neutral-600">
                        <li>Escenario: 12m x 6m x 5m</li>
                        <li>Sistema de aro magnético</li>
                        <li>Audio e iluminación</li>
                        <li>Pantalla gigante y proyector</li>
                    </ul>
                </div>
            </label>
            <label class="cursor-pointer">
                <input type="radio" name="espacio" class="peer sr-only">
                <div class="h-full rounded-sm border border-neutral-300 p-6 transition peer-checked:border-seu peer-checked:ring-1 peer-checked:ring-seu">
                    <h4 class="text-lg font-semibold">Microcine</h4>
                    <p class="mt-1 text-sm font-medium text-seu">Capacidad: 100 personas</p>
                    <ul class="mt-4 space-y-1 text-sm text-neutral-600">
                        <li>Equipos de proyección</li>
                        <li>Ambiente climatizado</li>
                        <li>Equipo técnico</li>
                    </ul>
                </div>
            </label>
            <label class="cursor-pointer">
                <input type="radio" name="espacio" class="peer sr-only">
                <div class="h-full rounded-sm border border-neutral-300 p-6 transition peer-checked:border-seu peer-checked:ring-1 peer-checked:ring-seu">
                    <h4 class="text-lg font-semibold">Sala de Exposiciones</h4>
                    <p class="mt-1 text-sm font-medium text-seu">Dimensiones: 14 x 21m</p>
                    <ul class="mt-4 space-y-1 text-sm text-neutral-600">
                        <li>5 módulos fijos de 6m</li>
                        <li>Grilla de luces a los 3m</li>
                        <li>Paneles movibles</li>
                    </ul>
                </div>
            </label>
        </div>
    </fieldset>


    <div class="lg:col-span-5">
        <h3 class="mb-4 text-xl font-semibold">2: Elegí la fecha</h3>
        <div class="rounded-sm border border-neutral-200 bg-paper p-6">
            <div class="flex items-center justify-between pb-4">
                <button type="button" class="font-bold text-neutral-500 hover:text-seu">&lt;</button>
                <span class="font-semibold capitalize">Noviembre 2026</span>
                <button type="button" class="font-bold text-neutral-500 hover:text-seu">&gt;</button>
            </div>
            <div class="grid grid-cols-7 gap-2 text-center text-xs font-medium text-neutral-500">
                <span>Lu</span><span>Ma</span><span>Mi</span><span>Ju</span><span>Vi</span><span>Sá</span><span>Do</span>
            </div>
            <div class="mt-2 grid grid-cols-7 gap-2 text-sm">
                <span></span><span></span><span></span><span></span><span></span><span></span>
                <button type="button" class="aspect-square rounded-sm bg-neutral-200 text-neutral-400 line-through" disabled>1</button>
                <button type="button" class="aspect-square rounded-sm border border-neutral-300 hover:border-seu">2</button>
                <button type="button" class="aspect-square rounded-sm border border-neutral-300 hover:border-seu">3</button>
                <button type="button" class="aspect-square rounded-sm bg-seu text-white font-semibold">4</button>
                <button type="button" class="aspect-square rounded-sm border border-neutral-300 hover:border-seu">5</button>
            </div>
        </div>
    </div>


    <div class="lg:col-span-7">
        <h3 class="mb-4 text-xl font-semibold">3: Datos de contacto</h3>
        <div class="grid gap-4 sm:grid-cols-2">
            <div><label class="lbl">Nombre y Apellido</label><input type="text" class="fld" required></div>
            <div><label class="lbl">Correo electrónico</label><input type="email" class="fld" required></div>
            <div><label class="lbl">Teléfono</label><input type="tel" class="fld" required></div>
            <div><label class="lbl">Institución / Organización</label><input type="text" class="fld"></div>
            <div class="sm:col-span-2"><label class="lbl">Detalle del evento y requerimientos</label><textarea class="fld" rows="4"></textarea></div>
            <div class="sm:col-span-2">
                <button type="submit" class="w-full rounded-sm bg-seu py-3 font-semibold text-white hover:bg-seu-dark">Solicitar reserva</button>
            </div>
        </div>
    </div>
</form>