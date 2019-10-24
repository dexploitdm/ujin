<?php get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-home'); ?>

        <?php get_template_part( 'components/home/opportunities'); ?>


        <div class="solutions">
            <div class="solutions-layout box">
                <div class="swiper-container2">
                    <div class="solutions-header">
                        <h2 class="title-h2">Наши решения1</h2>
                        <div class="box-btn">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="solutions-flex swiper-wrapper">
                        <div class="solutions-flex-item swiper-slide card12">
                            <style>
                                .card12:before {
                                    background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_build2.png);
                                }
                            </style>
                            <div class="solutions-block">
                                <div class="solutions-block_title">
                                    Для застройщиков
                                </div>
                                <div class="solutions-block-desc">
                                    <ul>
									<li>Умные квартиры</li>
									<li>Мобильное приложение</li>
									<li>Видеонаблюдение и домофония</li>
									<li>Система контроля и учета доступа</li>
									<li>Учет потребляемых ресурсов</li>
									<li>Маркетплейс</li>
									<li>Чаты и уведомления</li>
                                    </ul>
                                </div>
                                <div class="btn-link">
                                    <a href="/property-developers/">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="solutions-flex-item swiper-slide card13">
                            <style>
                                .card13:before {
                                    background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_cas2.png);
                                }
                            </style>
                            <div class="solutions-block">
                                <div class="solutions-block_title">
                                    Для гостиничного бизнеса
                                </div>
                                <div class="solutions-block-desc">
                                    <ul>
										<li>Умные номера</li>
                                        <li>Автоматизация сценариев работы гостиницы</li>
                                        <li>Автоматизированый мониторинг и учет потребляемых ресурсов</li>
                                        <li>Видеонаблюдение и домофония</li>
										<li>Система контроля управления доступом</li>
										<li>Коммунальные услуги</li>

                                    </ul>
                                </div>
                                <div class="btn-link">
                                    <a href="/hotels/">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="solutions-flex-item swiper-slide card14">
                            <style>
                                .card14:before {
                                    background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_home3.png);
                                }
                            </style>
                            <div class="solutions-block">
                                <div class="solutions-block_title">
                                    Для УК и ТСЖ
                                </div>
                                <div class="solutions-block-desc">
                                    <ul>
                                        <li>Автоматизация управления обьектами</li>
                                        <li>Автоматизированый мониторинг и учет потребляемых ресурсов</li>
                                        <li>Обзор платежей за коммунальные услуги</li>
                                        <li>Видеонаблюдение и домофония</li>
                                        <li>Система контроля управления доступом</li>
                                        <li>Прием и обработка заявок</li>
                                    </ul>
                                </div>
                                <div class="btn-link">
                                    <a href="/communal-services/">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="solutions-boxes">
                    <div class="solutions-boxes-title">
                        Не нашли что искали? <br>
                        Оставьте заявку
                    </div>
                    <div class="solutions-boxes-order">

                        <a href="#form-contact">
                            <button class="u-btn">
                                Оставить заявку
                            </button>
                        </a>
                    </div>
                    <div class="solutions-boxes-desc">
                        Наш менеджер свяжется с вами в течении 5 минут
                    </div>
                </div>
            </div>
        </div>

        <div class="product-preview box">
            <h2 class="title-h2">Собственная линейка товаров</h2>
            <div class="product-preview-layout grid-three">

                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'product',
                    'posts_per_page' => get_field('products_per_page'),
                    'orderby' => 'menu_order',
                    'posts_per_page' => '5',
                    'order' => 'ASC',
                )); ?>
                <?php  while ( $loop->have_posts() ): $loop->the_post(); ?>
                    <div class="product-box">
                        <div class="product-box-layout">
                            <div class="product-box-header">
                                <div class="product-box-header__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="product-box-header__icon"></a>
                            </div>
                            <div class="product-box-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>); "></div>
<!--                            <div class="product-box-desc">-->
<!--                                <div class="product-box-desc_price">-->
<!--                                    <span>--><?php //echo $product->get_price();  ?><!-- руб.</span>-->
<!--                                </div>-->
<!--                                <div class="product-box-desc_content">-->
<!--                                    <div class="product-box-desc_content_box">-->
<!--                                        <p>--><?php // the_excerpt(); ?><!--</p>-->
<!--                                    </div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="product-box-desc">
                                <div class="product-box-desc_price"><?php echo $product->get_price();  ?> руб.</div>
                                <div class="product-box-desc_content">
                                    <?php if( get_field("pr_cools_title") ): ?>
                                        <strong><?php the_field( "pr_cools_title" ); ?></strong>
                                        <?php the_field( "pr_cools_desc" ); ?>
                                    <?php else :?>
                                        <div class="product-box-desc_content_box">
                                            <p><?php  the_excerpt(); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

<!--                <div class="product-box">-->
<!--                    <div class="product-box-layout">-->
<!--                        <div class="product-box-header">-->
<!--                            <div class="product-box-header__title">Мультисенсор</div>-->
<!--                            <a href="#" class="product-box-header__icon"></a>-->
<!--                        </div>-->
<!--                        <div class="product-box-cover">-->
<!--                            <img src="--><?php // echo get_template_directory_uri() ?><!--/assets/build/images/covers/multisensor.png">-->
<!--                        </div>-->
<!--                        <div class="product-box-desc">-->
<!--                            <div class="product-box-desc_price">5 000 руб.</div>-->
<!--                            <div class="product-box-desc_content">-->
<!--                                <strong>Удаленное управление:</strong>-->
<!--                                <ul>-->
<!--                                    <li>Кондиционерами</li>-->
<!--                                    <li>Рекуператорами  Valliant recoVair 60</li>-->
<!--                                    <li>Термоголовками Danfoss с Bluetooth</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


                <div class="product-box mobile-hidden">
                    <div class="product-box-bg">
                        <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/products.png">
                        <a href="<?php echo get_site_url(); ?>/catalogs" class="product-box-link">
                            <span>Перейти в каталог</span>
                        </a>
                    </div>
                </div>
                <a href="<?php echo get_site_url(); ?>/catalogs" class="btn-link-mobile">Перейти в каталог<span></span></a>
            </div>
        </div>

    </main>
<?php get_footer(); ?>`