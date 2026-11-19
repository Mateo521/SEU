<?php

/**
 * Plantilla individual: Noticia institucional
 */
get_header();
?>

<main id="contenido" class="bg-paper py-6 text-ink " style="font-family: 'Poppins', sans-serif;">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <?php while (have_posts()) : the_post();
            $terminos   = get_the_terms(get_the_ID(), 'categoria_noticia');
            $cat_nombre = ($terminos && !is_wp_error($terminos)) ? $terminos[0]->name : '';
        ?>


            <div class="mb-6 flex items-center justify-between">
                <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="group inline-flex items-center gap-2 text-xs font-medium uppercase tracking-[0.18em] text-neutral-500 transition hover:text-seu">
                    <span class="material-symbols-outlined text-[16px] transition-transform group-hover:-translate-x-0.5 [font-variation-settings:'wght'_300]">west</span>
                    <span>Volver a Noticias</span>
                </a>
            </div>

            <article class="overflow-clip border border-neutral-200 bg-white">


                <header class="border-b border-neutral-200 bg-svg-politicas p-8 sm:p-12 lg:p-14">
                    <div class="mb-5 flex flex-wrap items-center gap-3 text-xs font-medium uppercase tracking-[0.2em]">
                        <span class="text-seu">Noticia Institucional</span>
                        <?php if ($cat_nombre) : ?>
                            <span class="text-neutral-300">/</span>
                            <span class="bg-neutral-950 px-2.5 py-1 text-[10px] tracking-wider text-white">
                                <?php echo esc_html($cat_nombre); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <h1 class="max-w-4xl font-sans text-3xl font-light leading-[1.12] tracking-tight text-ink sm:text-4xl lg:text-5xl">
                        <?php the_title(); ?>
                    </h1>

                    <div class="mt-6 flex items-center gap-2 text-sm text-neutral-500">
                        <span class="material-symbols-outlined text-[18px] text-neutral-400 [font-variation-settings:'wght'_200]">calendar_today</span>
                        <span>
                            Publicado el <time datetime="<?php echo esc_attr(get_the_date('c')); ?>" class="font-medium text-ink"><?php echo esc_html(get_the_date('d \d\e F \d\e Y')); ?></time>
                        </span>
                    </div>
                </header>


                <div class="grid grid-cols-1 lg:grid-cols-12">


                    <div class="border-b border-neutral-200 p-8 sm:p-12 lg:col-span-8 lg:border-b-0 lg:border-r lg:p-14">
                        <div class="prose prose-neutral max-w-none text-neutral-700 leading-relaxed
                            [&_a]:font-medium [&_a]:text-seu [&_a]:underline [&_a]:underline-offset-4 [&_a:hover]:text-ink
                            [&_h2]:mt-8 [&_h2]:mb-3 [&_h2]:font-sans [&_h2]:text-2xl [&_h2]:font-normal [&_h2]:tracking-tight [&_h2]:text-ink
                            [&_h3]:mt-6 [&_h3]:mb-2 [&_h3]:font-sans [&_h3]:text-lg [&_h3]:font-medium [&_h3]:text-ink
                            [&_blockquote]:border-l-2 [&_blockquote]:border-neutral-950 [&_blockquote]:pl-5 [&_blockquote]:italic [&_blockquote]:text-neutral-600
                            [&_table]:my-6 [&_table]:w-full [&_table]:border-collapse [&_table]:border [&_table]:border-neutral-200 [&_table]:text-left [&_table]:text-sm [&_table]:text-neutral-600
                            [&_thead]:bg-neutral-50 [&_thead]:text-ink
                            [&_th]:border-b [&_th]:border-neutral-200 [&_th]:px-4 [&_th]:py-3 [&_th]:font-medium
                            [&_td]:border-b [&_td]:border-neutral-100 [&_td]:px-4 [&_td]:py-3
                            [&_tr:hover]:bg-neutral-50/70 [&_tr]:transition">
                            <?php the_content(); ?>
                        </div>


                        <div class="mt-14 flex items-center justify-between border-t border-neutral-200 pt-8">
                            <a href="<?php echo esc_url(home_url('/noticias')); ?>" class="group inline-flex items-center gap-2 border-b border-neutral-950 pb-0.5 text-sm font-medium text-ink transition hover:border-seu hover:text-seu">
                                <span class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-0.5 [font-variation-settings:'wght'_300]">west</span>
                                <span>Volver al archivo de noticias</span>
                            </a>
                        </div>
                    </div>

                    <aside class="bg-neutral-50/60 lg:col-span-4">
                        <div class="lg:sticky lg:top-28">

                            <?php if (has_post_thumbnail()) : ?>
                                <div class=" w-full h-auto overflow-hidden border-b border-neutral-200 bg-neutral-100">
                                    <?php the_post_thumbnail('large', array('class' => 'h-full w-full object-cover')); ?>
                                </div>
                            <?php endif; ?>

                            <div class="bg-seu p-8 text-white sm:p-10">
                                

                                <dl class="divide-y divide-white/10 text-sm">
                                    <div class="py-3.5 first:pt-0">
                                        <dt class="text-[11px] font-medium uppercase tracking-wider text-neutral-400">Fecha de publicación</dt>
                                        <dd class="mt-1 tabular-nums text-neutral-100"><?php echo esc_html(get_the_date('d/m/Y')); ?></dd>
                                    </div>

                                    <?php if ($cat_nombre) : ?>
                                        <div class="py-3.5">
                                            <dt class="text-[11px] font-medium uppercase tracking-wider text-neutral-400">Categoría</dt>
                                            <dd class="mt-1 text-neutral-100"><?php echo esc_html($cat_nombre); ?></dd>
                                        </div>
                                    <?php endif; ?>

                                    <div class="pt-5">
                                        <dd class="mt-3">
                                            <button type="button" id="btn-copiar-enlace" class="group flex w-full items-center justify-between border border-white/25 bg-white/5 px-4 py-3 text-left text-xs font-medium uppercase tracking-wider text-white transition hover:border-white hover:bg-white hover:text-neutral-950">
                                                <span id="texto-copiar-enlace">Copiar enlace</span>
                                                <span class="material-symbols-outlined text-[18px] [font-variation-settings:'wght'_300]">content_copy</span>
                                            </button>
                                        </dd>
                                    </div>
                                </dl>
                            </div>

                        </div>
                    </aside>

                </div>

            </article>
        <?php endwhile; ?>

    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnCopiar = document.getElementById('btn-copiar-enlace');
        const textoCopiar = document.getElementById('texto-copiar-enlace');

        if (!btnCopiar || !textoCopiar) return;

        btnCopiar.addEventListener('click', async function() {
            try {
                await navigator.clipboard.writeText(window.location.href);
                textoCopiar.textContent = 'Enlace copiado';
                setTimeout(() => {
                    textoCopiar.textContent = 'Copiar enlace';
                }, 2500);
            } catch (e) {
                textoCopiar.textContent = 'Copiá desde la barra';
            }
        });
    });
</script>

<?php get_footer(); ?>