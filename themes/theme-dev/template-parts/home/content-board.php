<section class="py-20" id="diretoria">

    <div class="container flex flex-wrap justify-center gap-6">

        <div class="w-full">
            <h2 class="section-title">
                Diretoria
            </h2>
        </div>

        <?php
        $args = array(
            'post_type' => 'diretoria',
            'posts_per_page' => -1,
        );

        $members = new WP_Query($args);

        if ($members->have_posts()):
            while ($members->have_posts()):
                $members->the_post();
                ?>

                <!-- loop -->
                <div class="w-full md:w-6/12 lg:w-3/12 flex flex-col items-center gap-4">
                    <div class="w-48 h-48 shadow-lg rounded-full overflow-hidden bg-black/80">
                        <?php if (get_field('foto')): ?>
                            <img class="w-full h-full object-cover" src="<?php echo get_field('foto'); ?>" />
                        <?php endif; ?>
                    </div>

                    <div class="flex flex-col items-center">
                        <h6 class="text-lg font-medium">
                            <?php the_title(); ?>
                        </h6>

                        <p class="font-black">
                            <?php the_terms(get_the_ID(), 'cargo'); ?>
                        </p>

                        <ul class="flex gap-x-2 mt-4">
                            <?php if (get_field('instagram')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('instagram'); ?>" target="_blank"
                                        rel="noreferrer noopener">
                                        <?php echo get_template_part('template-parts/icons/content', 'instagram', get_icon_setting('w-6 h-6 fill-black/80 fill-color-primary-hover')); ?>

                                        <span style="font-size:0">
                                            Instagram
                                        </span>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if (get_field('facebook')): ?>
                                <li>
                                    <a class="flex items-center" href="<?php echo get_field('facebook'); ?>" target="_blank"
                                        rel="noreferrer noopener">
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
                <!-- end loop -->
                <?php
            endwhile;
        endif;

        wp_reset_query();
        ?>
    </div>
</section>