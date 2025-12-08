<section class="py-20">

    <div class="container">

        <div class="swiper js-swiper-informative">

            <div class="swiper-wrapper">

                <?php

                $args = array(
                    'post_type' => 'informativo',
                    'posts_per_page' => -1,
                );

                $banners = new WP_Query($args);

                if ($banners->have_posts()):
                    while ($banners->have_posts()):
                        $banners->the_post();
                        ?>
                        <div class="swiper-slide">
                            <?php if (get_field('link')): ?>
                                <a href="<?php echo get_field('link'); ?>" target="_blank" rel="noreferrer noopener">
                                    <img class="w-full h-[400px] object-cover rounded-2xl" src="<?php echo get_field('imagem'); ?>"
                                        alt="<?php echo get_bloginfo() . ' - ' . get_the_title(); ?>" />
                                </a>
                            <?php else: ?>
                                <img class="w-full h-[400px] object-cover rounded-2xl" src="<?php echo get_field('imagem'); ?>"
                                    alt="<?php echo get_bloginfo() . ' - ' . get_the_title(); ?>" />
                            <?php endif; ?>
                        </div>
                        <?php
                    endwhile;
                endif;

                wp_reset_query();
                ?>
            </div>
        </div>

        <div class="relative mt-10">
            <div class="swiper-pagination js-swiper-pagination-informative"></div>
        </div>
    </div>
</section>