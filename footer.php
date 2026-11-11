<?php
/**
 * Footer SEU UNSL
 */
?>

<section class="w-full bg-svg-politicas" aria-labelledby="politicas-inclusion-title">
  <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
    <h2 id="politicas-inclusion-title" class="mb-6 text-xl font-semibold">Políticas de inclusión, género y cuidado integral</h2>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/images/500x150discapacidad.jpg'); ?>" alt="Políticas de inclusión" class="h-26 w-full rounded-sm object-contain ">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/images/500x150prevencionconsumos.jpg'); ?>" alt="Políticas de género" class="h-26 w-full rounded-sm object-contain ">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/images/500x150protocolo.jpg'); ?>" alt="Cuidado integral" class="h-26 w-full rounded-sm object-contain ">
    </div>
  </div>
</section>

<footer class="border-t border-neutral-200 bg-paper">
  <div class="mx-auto grid max-w-7xl gap-12 px-4 py-16 sm:grid-cols-2 lg:grid-cols-4 sm:px-6 lg:px-8">

    <div>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/logo-unsl.png'); ?>" alt="Logo UNSL" class="h-16 w-auto">
      <h2 class="font-semibold">Información Institucional</h2>
      <address class="mt-4 text-sm not-italic text-neutral-600 space-y-2">
        <p>Ejército de los Andes 950, San Luis</p>
        <p>Tel: +54 (0266) 4520300</p>
        <a href="#" class="text-seu font-medium hover:underline">Ver en Google Maps</a>
      </address>
    </div>
    

    <div>
      <img src="<?php echo esc_url(get_template_directory_uri() . '/logo-seu.png'); ?>" alt="Logo SEU" class="h-18 w-auto">
      <h2 class="font-semibold">Contactos Frecuentes</h2>
      <ul class="mt-4 text-sm text-neutral-600 space-y-2">
        <li>Interno: 5123 - 5321</li>
        <li>2° Piso Edificio Rectorado - Ala A</li>
        <li><a href="mailto:seu.unsl@gmail.com" class="text-seu hover:underline">seu.unsl@gmail.com</a></li>
      </ul>
    </div>
    

    <div>
      <h2 class="font-semibold">Redes Sociales</h2>
      <ul class="mt-4 space-y-3 text-sm text-neutral-600">
        <li><a href="#" class="flex items-center gap-2 hover:text-seu"><svg class="h-5 w-5" aria-hidden="true"><use href="#i-fb"/></svg>Facebook</a></li>
        <li><a href="#" class="flex items-center gap-2 hover:text-seu"><svg class="h-5 w-5" aria-hidden="true"><use href="#i-ig"/></svg>Instagram</a></li>
        <li><a href="#" class="flex items-center gap-2 hover:text-seu"><svg class="h-5 w-5" aria-hidden="true"><use href="#i-yt"/></svg>YouTube</a></li>
      </ul>
    </div>
    

    <div>
      <h2 class="font-semibold">Mapa de Sitio</h2>
      <ul class="mt-4 space-y-2 text-sm text-neutral-600">
        <li><a href="#" class="hover:text-seu">Institucional</a></li>
        <li><a href="#" class="hover:text-seu">Proyectos</a></li>
        <li><a href="#" class="hover:text-seu">Gestión Cultural</a></li>
      </ul>
      <div class="mt-6 flex gap-3 border-t border-neutral-200 pt-6 text-sm font-medium">
        <button type="button" data-open="modalLogin" class="rounded-sm border border-ink px-4 py-2 hover:bg-ink hover:text-white transition">Ingreso</button>
        <button type="button" data-open="modalRegistro" class="rounded-sm bg-seu px-4 py-2 text-white hover:bg-seu-dark transition">Registrarse</button>
      </div>
    </div>
  </div>
  <div class="border-t border-neutral-200 py-6 text-center text-sm text-neutral-600">© <?php echo date('Y'); ?> Secretaría de Extensión Universitaria · Universidad Nacional de San Luis</div>
</footer>


<?php get_template_part( 'template-parts/modals/capacitacion' ); ?>
<?php get_template_part( 'template-parts/modals/login' ); ?>
<?php get_template_part( 'template-parts/modals/registro' ); ?>


<script>
document.addEventListener('DOMContentLoaded', () => {

  const btnForm = document.getElementById('formBtn');
  const menuForm = document.getElementById('formMenu');

  if(btnForm && menuForm) {
      btnForm.addEventListener('click', () => {
        const isHidden = menuForm.hidden;
        menuForm.hidden = !isHidden;
        btnForm.setAttribute('aria-expanded', !isHidden);
      });

      document.addEventListener('click', (e) => {
        if (!btnForm.contains(e.target) && !menuForm.contains(e.target)) {
          menuForm.hidden = true;
          btnForm.setAttribute('aria-expanded', 'false');
        }
      });
  }

  // Modals Logic
  const modals = document.querySelectorAll('dialog');
  const triggers = document.querySelectorAll('[data-open]');
  const closers = document.querySelectorAll('[data-close]');

  triggers.forEach(btn => {
    btn.addEventListener('click', () => {
      const modalId = btn.getAttribute('data-open');
      const dialog = document.getElementById(modalId);
      if(dialog) dialog.showModal();
    });
  });

  closers.forEach(btn => {
    btn.addEventListener('click', () => {
      btn.closest('dialog').close();
    });
  });

  modals.forEach(dialog => {
    dialog.addEventListener('click', (e) => {
      if (e.target === dialog) dialog.close();
    });
  });
});
</script>

<?php wp_footer(); ?>
</body>
</html>