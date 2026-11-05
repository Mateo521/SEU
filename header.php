<?php

/**
 * Header SEU UNSL
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['"PT Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            serif: ['"Newsreader"', 'Georgia', 'serif'],
          },
          colors: {
            seu: {
              DEFAULT: '#39436f',
              dark: '#424e8b'
            },
            ink: '#1a1a1a',
            paper: '#fafaf9',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    @layer base {
        html { scroll-behavior: smooth; scroll-padding-top: 5rem; }
        body { @apply bg-white font-sans text-ink antialiased; }
        :focus-visible { @apply outline-2 outline-offset-2 outline-seu; }
        .dark-surface :focus-visible { @apply outline-white; }
      }
      @layer components {
        .fld { @apply block w-full rounded-sm border border-neutral-300 bg-white px-3 py-2.5 text-sm focus:border-seu focus:ring-1 focus:ring-seu; }
        .lbl { @apply mb-1.5 block text-sm font-medium text-neutral-900; }
      }
    </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <?php get_template_part('template-parts/svg-sprite'); ?>

  <a href="#contenido" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[100] focus:rounded-sm focus:bg-seu focus:px-4 focus:py-2 focus:text-white">Saltar al contenido</a>


  <header class="sticky top-0 z-40 border-b border-neutral-200 bg-white/95 backdrop-blur">
    <div class="mx-auto flex h-full  max-w-7xl items-center justify-between gap-6 px-4 sm:px-6 py-2 lg:px-8">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3" aria-label="SEU UNSL, ir al inicio">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/logo-seu.png'); ?>" alt="Logo SEU UNSL" class="h-16 w-auto">
      </a>


      <nav aria-label="Principal" class="hidden lg:block">
        <?php

        ?>
        <ul class="flex items-center gap-1 text-sm font-medium">
          <li><a class="rounded-sm px-3 py-2 hover:text-seu" href="<?php echo esc_url(home_url('/#institucional')); ?>">Institucional</a></li>
          <li class="relative">
            <button type="button" id="formBtn" class="flex items-center gap-1 rounded-sm px-3 py-2 hover:text-seu" aria-expanded="false">Formación <svg class="h-4 w-4" aria-hidden="true">
                <use href="#i-chev" />
              </svg></button>
            <ul id="formMenu" hidden class="absolute left-0 top-full w-48 rounded-sm border border-neutral-200 bg-white py-1 shadow-lg">
              <li><a class="block px-4 py-2 hover:bg-neutral-50 hover:text-seu" href="<?php echo esc_url(home_url('/diplomaturas')); ?>">Diplomaturas</a></li>
              <li><a class="block px-4 py-2 hover:bg-neutral-50 hover:text-seu" href="<?php echo esc_url(home_url('/capacitaciones')); ?>">Capacitaciones</a></li>
            </ul>
          </li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu" href="<?php echo esc_url(home_url('/proyectos')); ?>">Proyectos</a></li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu" href="<?php echo esc_url(home_url('/centro-cultural')); ?>">Reservas</a></li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu" href="<?php echo esc_url(home_url('/#agendas')); ?>">Agendas</a></li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu" href="<?php echo esc_url(home_url('/noticias')); ?>">Noticias</a></li>
        </ul>
      </nav>

      <div class="flex items-center gap-1">
        <ul class="hidden items-center sm:flex" aria-label="Redes sociales">
          <li><a href="#" class="grid h-10 w-10 place-items-center rounded-sm text-neutral-700 hover:text-seu" aria-label="Facebook"><svg class="h-5 w-5" aria-hidden="true">
                <use href="#i-fb" />
              </svg></a></li>
          <li><a href="#" class="grid h-10 w-10 place-items-center rounded-sm text-neutral-700 hover:text-seu" aria-label="Instagram"><svg class="h-5 w-5" aria-hidden="true">
                <use href="#i-ig" />
              </svg></a></li>
          <li><a href="#" class="grid h-10 w-10 place-items-center rounded-sm text-neutral-700 hover:text-seu" aria-label="YouTube"><svg class="h-5 w-5" aria-hidden="true">
                <use href="#i-yt" />
              </svg></a></li>
        </ul>
        <button type="button" id="menuBtn" class="grid h-10 w-10 place-items-center rounded-sm lg:hidden" aria-label="Menú"><svg class="h-6 w-6" aria-hidden="true">
            <use href="#i-menu" />
          </svg></button>
      </div>
    </div>
  </header>