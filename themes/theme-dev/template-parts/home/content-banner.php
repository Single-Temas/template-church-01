<?php if (isset(get_field('banners')[0])): ?>
    <section class="relative">

        <div class="swiper js-swiper">

            <div class="swiper-wrapper">

                <!-- slide -->
                <?php foreach (get_field('banners') as $banner): ?>
                    <div class="swiper-slide">
                        <?php if (!empty($banner['link'])): ?>
                            <a href="<?php echo $banner['link']['url'] ? $banner['link']['url'] : '#'; ?>"
                                title="<?php echo $banner['link']['title'] ? $banner['link']['title'] : ''; ?>"
                                target="<?php echo $banner['link']['target'] ? $banner['link']['target'] : ''; ?>"
                                rel="noreferrer noopener">
                                <img class="w-full h-[400px] object-cover" src="<?php echo $banner['imagem']; ?>"
                                    alt="<?php echo get_the_title(); ?>" />
                            </a>
                        <?php else: ?>
                            <img class="w-full h-[400px] object-cover" src="<?php echo $banner['imagem']; ?>"
                                alt="<?php echo get_the_title(); ?>" />
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                <!-- end slide -->
            </div>

            <div class="swiper-pagination js-swiper-pagination"></div>
        </div>

        <!-- navigations -->
        <div class="swiper-button-prev swiper-button-pattern swiper-button-prev-pattern js-swiper-button-prev"></div>
        <div class="swiper-button-next swiper-button-pattern swiper-button-next-pattern js-swiper-button-next"></div>
        <!-- end navigations -->
    </section>
<?php endif; ?>