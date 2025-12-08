<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoluta
 */

?>

</div><!-- #content -->

</div><!-- #page -->

<!-- contact -->
<?php echo get_template_part('template-parts/components/content', 'form'); ?>
<!-- end contact -->

<!-- footer -->
<footer class="bg-black/80 py-8">

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-y-20 gap-x-4">

        <?php if (get_field('sobre', 'option')): ?>
            <div>
                <h3 class="text-xl font-black text-white">
                    Sobre
                </h3>

                <p class="text-xs font-medium text-white/80 mt-4">
                    <?php echo get_field('sobre', 'option'); ?>
                </p>
            </div>
        <?php endif; ?>

        <div class="flex lg:justify-center">
            <div>
                <h3 class="text-xl font-black text-white">
                    Redes sociais
                </h3>

                <ul class="flex gap-x-4 mt-4">
                    <?php if (get_field('instagram', 'option')): ?>
                        <li>
                            <a class="flex items-center" href="<?php echo get_field('instagram', 'option'); ?>"
                                target="_blank" rel="noreferrer noopener">
                                <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-white fill-color-primary-hover')); ?>

                                <span style="font-size:0">
                                    Instagram
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_field('facebook', 'option')): ?>
                        <li>
                            <a class="flex items-center" href="<?php echo get_field('facebook', 'option'); ?>"
                                target="_blank" rel="noreferrer noopener">
                                <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-6 h-6 fill-white fill-color-primary-hover')); ?>

                                <span style="font-size:0">
                                    Facebook
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (get_field('youtube', 'option')): ?>
                        <li>
                            <a class="flex items-center" href="<?php echo get_field('youtube', 'option'); ?>"
                                target="_blank" rel="noreferrer noopener">
                                <?php echo get_template_part('template-parts/icons/content', 'youtube', get_icon_setting('w-6 h-6 fill-white fill-color-primary-hover')); ?>

                                <span style="font-size:0">
                                    Youtube
                                </span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <div class="flex lg:justify-end items-end">
            <a class="text-xs lg:text-sm text-white" href="https://singletemas.com.br" target="_blank"
                rel="noreferrer noopener">
                Desenvolvido por <span class="font-black">Single Temas</span>
            </a>
        </div>

        <div class="col-span-full">
            <h3 class="text-xs font-medium text-center text-white">
                <?php echo get_bloginfo() . ' - ' . date('Y'); ?>
            </h3>
        </div>
    </div>
</footer>
<!-- end footer -->

<?php wp_footer(); ?>

</body>

</html>