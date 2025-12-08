<section class="py-20" id="ministerios">

    <div class="grid grid-cols-4 gap-6">

        <div class="col-span-full">
            <h2 class="section-title">
                Ministérios
            </h2>
        </div>

        <div class="col-span-full relative">

            <div class="swiper js-swiper-ministries">

                <div class="swiper-wrapper">

                    <?php
                    $args = array(
                        'post_type' => 'ministerio',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                    );

                    $ministeries = new WP_Query($args);

                    if ($ministeries->have_posts()):
                        while ($ministeries->have_posts()):
                            $ministeries->the_post();
                            ?>
                            <!-- loop -->
                            <div class="swiper-slide">
                                <div class="flex flex-col items-center gap-4">
                                    <div
                                        class="w-48 h-48 shadow-lg rounded-full overflow-hidden flex justify-center items-center bg-black/80">
                                        <?php if (get_field('foto')): ?>
                                            <img class="w-full h-full object-cover" src="<?php echo get_field('foto'); ?>"
                                                alt="<?php echo get_bloginfo() . ' - ' . get_the_title(); ?>" />
                                        <?php else: ?>
                                            <p class="font-black text-center text-white">
                                                <?php the_title() ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>

                                    <div class="flex flex-col items-center">
                                        <h6 class="text-lg font-medium">
                                            <?php the_title(); ?>
                                        </h6>

                                        <ul class="flex gap-x-2 mt-4">
                                            <?php if (get_field('instagram')): ?>
                                                <li>
                                                    <a class="flex items-center" href="<?php echo get_field('instagram'); ?>"
                                                        target="_blank" rel="noreferrer noopener">
                                                        <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-black/80 fill-color-primary-hover')); ?>

                                                        <span style="font-size:0">
                                                            Instagram
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php endif; ?>

                                            <?php if (get_field('facebook')): ?>
                                                <li>
                                                    <a class="flex items-center" href="<?php echo get_field('facebook'); ?>"
                                                        target="_blank" rel="noreferrer noopener">
                                                        <?php echo get_template_part('template-parts/icons/content', 'facebook', get_icon_setting('w-6 h-6 fill-black/80 fill-color-primary-hover')); ?>

                                                        <span style="font-size:0">
                                                            Facebook
                                                        </span>
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end loop -->
                            <?php
                        endwhile;
                    endif;

                    wp_reset_postdata();
                    ?>
                </div>
            </div>

            <!-- navigations -->
            <div
                class="swiper-button-prev swiper-button-pattern swiper-button-prev-pattern js-swiper-button-prev-ministries">
            </div>
            <div
                class="swiper-button-next swiper-button-pattern swiper-button-next-pattern js-swiper-button-next-ministries">
            </div>
            <!-- end navigations -->
        </div>
    </div>
</section>