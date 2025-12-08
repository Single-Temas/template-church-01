<section class="py-20" id="calendario">

    <div class="container">

        <div>
            <h2 class="section-title">
                Calendário
            </h2>
        </div>

        <div>

            <div class="flex lg:hidden justify-center">
                <div class="w-6/12 relative mb-8">
                    <div class="swiper-button-prev swiper-button-pattern js-swiper-button-prev-calendar"></div>
                    <div class="swiper-button-next swiper-button-pattern js-swiper-button-next-calendar"></div>
                </div>
            </div>

            <div class="swiper js-swiper-calendar">

                <div class="swiper-wrapper">

                    <?php
                    $days = [
                        'Domingo',
                        'Segunda',
                        'Terça',
                        'Quarta',
                        'Quinta',
                        'Sexta',
                        'Sábado',
                    ];

                    foreach ($days as $day):
                        ?>
                        <div class="swiper-slide">
                            <div>
                                <div class="shadow-lg rounded-md bg-color-primary mb-4 py-2">
                                    <h6 class="text-sm font-bold text-center text-white">
                                        <?php echo $day; ?>
                                    </h6>
                                </div>

                                <div class="flex flex-col gap-y-4">

                                    <!-- loop -->
                                    <?php
                                    $args = array(
                                        'post_type' => 'calendario',
                                        'posts_per_page' => -1,
                                        'meta_query' => array(
                                            array(
                                                'key' => 'dia_da_semana',
                                                'value' => $day,
                                                'compare' => '=',
                                            ),
                                        ),
                                        'meta_key' => 'horario_de_inicio',
                                        'orderby' => 'meta_value',
                                        'order' => 'ASC'
                                    );

                                    $calendars = new WP_Query($args);

                                    if ($calendars->have_posts()):
                                        while ($calendars->have_posts()):
                                            $calendars->the_post();
                                            echo get_template_part('template-parts/components/content', 'calendar-item', get_calendar_item_setting(get_field('horario_de_inicio'), get_field('horario_de_termino'), get_the_title(), get_field('descricao')));
                                        endwhile;
                                    endif;

                                    wp_reset_query();
                                    ?>
                                    <!-- end loop -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>