<?php

/**
 * Header SEU UNSL
 */

$is_front = is_front_page();

$header_classes = $is_front
  ? 'fixed inset-x-0 top-0 z-50 border-b border-white/20 bg-white/10 backdrop-blur-md text-white transition-all duration-300'
  : 'sticky top-0 z-40 border-b border-neutral-200 bg-white/95 backdrop-blur text-ink transition-all duration-300';
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

  <header id="main-header" class="<?php echo esc_attr($header_classes); ?>">
    <div class="mx-auto flex h-full max-w-7xl items-center justify-between gap-6 px-4 sm:px-6 py-2 lg:px-8">

      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3" aria-label="SEU UNSL, ir al inicio">

        <img id="logo-light"
          src="<?php echo esc_url(get_template_directory_uri() . '/logo-seu-blanco.png'); ?>"
          alt="Logo SEU UNSL"
          class="h-16 w-auto <?php echo $is_front ? 'block' : 'hidden'; ?>">

        <img id="logo-dark"
          src="<?php echo esc_url(get_template_directory_uri() . '/logo-seu.png'); ?>"
          alt="Logo SEU UNSL"
          class="h-16 w-auto <?php echo $is_front ? 'hidden' : 'block'; ?>">

      </a>

      <nav aria-label="Principal" class="hidden lg:block">
        <ul class="flex items-center gap-1 text-sm font-medium">
          <li><a class="rounded-sm px-3 py-2 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/#institucional')); ?>">Institucional</a></li>
          <li class="relative">
            <button type="button" id="formBtn" class="flex items-center gap-1 rounded-sm px-3 py-2 hover:text-seu transition-colors" aria-expanded="false">Formación <svg class="h-4 w-4" aria-hidden="true">
                <use href="#i-chev" />
              </svg></button>
            <ul id="formMenu" hidden class="absolute  z-10  left-0 top-full w-48 rounded-sm border border-neutral-200 bg-white py-1 shadow-lg text-ink">
              <li><a class="block px-4 py-2 hover:bg-neutral-50 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/diplomaturas')); ?>">Diplomaturas</a></li>
              <li><a class="block px-4 py-2 hover:bg-neutral-50 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/capacitaciones')); ?>">Capacitaciones</a></li>
            </ul>
          </li>
          <li><a class="block px-4 py-2 hover:bg-neutral-50 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/becas-y-pasantias')); ?>">Becas y Pasantías</a></li>

          <li><a class="rounded-sm px-3 py-2 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/proyectos')); ?>">Proyectos</a></li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/centro-cultural')); ?>">Reservas</a></li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/agenda-eventos')); ?>">Agendas</a></li>
          <li><a class="rounded-sm px-3 py-2 hover:text-seu transition-colors" href="<?php echo esc_url(home_url('/noticias')); ?>">Noticias</a></li>
        </ul>
      </nav>

      <div class="flex items-center gap-1">
        <ul class="hidden items-center sm:flex" aria-label="Redes sociales">
          <li><a href="#" class="grid h-10 w-10 place-items-center rounded-sm hover:text-seu transition-colors" aria-label="Facebook"><svg class="h-5 w-5" aria-hidden="true">
                <use href="#i-fb" />
              </svg></a></li>
          <li><a href="#" class="grid h-10 w-10 place-items-center rounded-sm hover:text-seu transition-colors" aria-label="Instagram"><svg class="h-5 w-5" aria-hidden="true">
                <use href="#i-ig" />
              </svg></a></li>
          <li><a href="#" class="grid h-10 w-10 place-items-center rounded-sm hover:text-seu transition-colors" aria-label="YouTube"><svg class="h-5 w-5" aria-hidden="true">
                <use href="#i-yt" />
              </svg></a></li>
        </ul>
        <button type="button" id="menuBtn" class="grid h-10 w-10 place-items-center rounded-sm lg:hidden hover:text-seu transition-colors" aria-label="Menú"><svg class="h-6 w-6" aria-hidden="true">
            <use href="#i-menu" />
          </svg></button>
      </div>
    </div>
    <?php if (function_exists('seu_breadcrumbs')) seu_breadcrumbs(); ?>
  </header>

  <?php
  if ($is_front) : ?>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const header = document.getElementById('main-header');
        const logoLight = document.getElementById('logo-light');
        const logoDark = document.getElementById('logo-dark');

        function handleScroll() {
          if (window.scrollY > 50) {
            header.classList.remove('bg-white/10', 'border-white/20', 'text-white', 'backdrop-blur-md');
            header.classList.add('bg-white/95', 'border-neutral-200', 'text-ink', 'backdrop-blur');
            logoLight.classList.add('hidden');
            logoLight.classList.remove('block');
            logoDark.classList.remove('hidden');
            logoDark.classList.add('block');
          } else {
            header.classList.add('bg-white/10', 'border-white/20', 'text-white', 'backdrop-blur-md');
            header.classList.remove('bg-white/95', 'border-neutral-200', 'text-ink', 'backdrop-blur');
            logoLight.classList.remove('hidden');
            logoLight.classList.add('block');
            logoDark.classList.add('hidden');
            logoDark.classList.remove('block');
          }
        }

        handleScroll();
        window.addEventListener('scroll', handleScroll);
      });
    </script>
  <?php endif; ?>