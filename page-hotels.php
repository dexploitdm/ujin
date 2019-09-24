<?php
/*
Template Name: Макет Гостиницы
Template Post Type: page
*/
get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-hotels'); ?>
        <?php while( have_posts() ) : the_post(); ?>
            <div class="boxes-desc">
                <h2 class="title-h2 box"><?php echo get_field( "title_opp" ); ?></h2>
                <div class="boxes-desc-layout">
                    <div class="boxes-desc-content box">
                        <div class="boxes-title"><?php echo get_field( "content_opp" ); ?></div>
                        <div class="boxes-mini"><?php echo get_field( "minitext_opp" ); ?></div>
                    </div>
                    <div class="boxes-desc-download">
                        <div class="boxes-desc-download-layout">
                            <div class="download-title">
                                Узнайте подробнее о наших решениях из презентации
                            </div>
                            <div class="download-link">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/download.png">
                                <div class="download-link-box">
                                    <a href="<?php echo get_field( "link_present" ); ?>" class="download-pull">Скачать презентацию</a>
                                    <span class="download-info">15 Mb, pptx</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php  endwhile; ?>
        <div class="lists-services box">
            <div class="action-btn">
                <div class="action-btn-tr">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <?php $pportunities = new WP_Query(array(
                'post_type' => 'opportunities',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'checkOpp',
                        'value' => 'hostelCheck',
                        'compare' => 'LIKE'
                    )
                )
            )) ?>
            <?php if ($pportunities->have_posts() ): ?>
                <div class="swiper-container3">
                    <div class="lists-services-layout swiper-wrapper">
                        <?php while ($pportunities->have_posts()) : $pportunities->the_post(); ?>
                            <div class="lists-services-box swiper-slide">
                                <div class="services-head">
                                    <img src="<?php the_post_thumbnail_url(); ?>">
                                    <p><?php the_title(); ?></p>
                                </div>
                                <?php the_content();  ?>
                            </div>
                        <?php endwhile; ?>
                    </div>

                </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

            <div class="lists-services-text">Мы помогаем строить жилье будущего</div>

            <div class="lists-services-load block-mobile ">
                <div class="download-title">
                    Узнайте подробнее о наших решениях из презентации
                </div>
                <div class="download-link">
                    <a class="u-btn u-btn-download" type="submit">
                        Скачать презентацию
                    </a>
                    <div class="download-info">15 Mb, pptx</div>
                </div>
            </div>
        </div>
        <div class="functional min-block">
            <div class="functional-layout box">
                <div class="functional-desc block-full">
                    <h2 class="title-h2">Функциональное приложение для ваших гостей</h2>
                    <div class="functional-desc-content">
                        Текст о том, что мы предлагаем застройщикам функциональное приложение,
                        которое можем  забрендировать под них.
                    </div>
                    <div class="functional-box grid-two">
                        <div class="functional-box-item">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_acces.svg">
                            <span class="text-neon">Бесключевой доступ в номер</span>
                        </div>
                        <div class="functional-box-item">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_microphone.svg">
                            <span class="text-neon">Голосовое управление номером</span>
                        </div>
                        <div class="functional-box-item">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_control_neon.svg">
                            <span class="text-neon">Удаленное управление аппаратурой,
                            микроклиматом, бытовыми приборами, шторами и освещением</span>
                        </div>
                        <div class="functional-box-item">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_brone.svg">
                            <span class="text-neon">Бронирование/продление  номеров и заказ дополнительных услуг</span>
                        </div>
                    </div>

                </div>


                <div class="functional-cover">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/iPhone2.png">
                </div>
            </div>
        </div>

        <?php get_template_part( 'components/partners'); ?>

    </main>
<?php get_footer(); ?>