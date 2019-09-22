<?php
/*
Template Name: Макет Каталог
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="head-box-two">
            <div class="head-box-two-layout box">
                <div class="head-box-two-layout-content">
                    <h1 class="title-h1">Линейка товаров “Ujin”</h1>
                    <div class="head-box-two-desc">
                        <p>
                            Общий текст о серии товаров, собственном производстве, надежности,
                            отличии от конкурентов,  масштабировании системы и возможности
                            построения единной системы с другими аппаратными решениями.
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <div class="product-preview full-list box">
            <div class="grid-three">
            <?php
            $loop = new WP_Query( array(
                'post_type' => 'product',
                'posts_per_page' => get_field('products_per_page'),
                'orderby' => 'menu_order',
                'order' => 'ASC',
            )); ?>
                <?php  while ( $loop->have_posts() ): $loop->the_post(); ?>
                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title"><?php the_title(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>); "></div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">
                                <span><?php echo $product->get_price();  ?> руб.</span>
                                <span class="old"><?php echo $product->regular_price; ?> руб. </span>
                            </div>
                            <div class="product-box-desc_content">
                                <div class="product-box-desc_content_box">
                                    <p><?php  the_excerpt(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>







                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Комплект защиты от протечек</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/rele.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">7 500 руб.</div>
                            <div class="product-box-desc_content">
                                <div class="product-box-desc_content_box">
                                    <p>Обнаруживает протечку или затоп, перекрывает воду
                                        и отправляет вам уведомление на смартфон.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="functional">
            <div class="functional-layout box">
                <div class="functional-desc block-big">
                    <h2 class="title-h2">Функциональное приложение для клиентов ЖКХ</h2>
                    <div class="functional-tabs">
                        <ul class="tabs">
                            <li class="active" rel="tab1">Мобильное приложение</li>
                            <li rel="tab2" class="tab_last">Яндекс.Станция</li>
                        </ul>
                        <div class="tab_container">
                            <div id="tab1" class="tab_content" style="display: block;">
                                <div class="functional-lists grid-two">
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_home_phone.svg">
                                                <span>Автоматизация <br> процессов</span>
                                            </div>
                                            <ul>
                                                <li>Автоматический учёт расхода ресурсов (тепло, электроэнергия, вода)</li>
                                                <li>Создание сценариев работы оборудования по заданному расписанию</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_controls.svg">
                                                <span>Удаленное управление <br> и контроль</span>
                                            </div>
                                            <ul>
                                                <li>Температурой воздуха</li>
                                                <li>Освещением</li>
                                                <li>Бытовыми приборами</li>
                                                <li>Видеонаблюдением</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_dash.svg">
                                                <span>Мониторинг <br> показателей</span>
                                            </div>
                                            <ul>
                                                <li>Мониторинг потребления  ресурсов в режиме реального времени</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_alarm.svg">
                                                <span>Система <br> оповещений</span>
                                            </div>
                                            <ul>
                                                <li>Оповещения о наличии протечек в квартире</li>
                                                <li>Оповещения о несанкционированном доступе в помещение при соответствующих настройках сценариев</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content" style="display: none;">
                                <div class="functional-lists grid-two">
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_home_phone.svg">
                                                <span>Автоматизация <br> процессов</span>
                                            </div>
                                            <ul>
                                                <li>Автоматический учёт расхода ресурсов (тепло, электроэнергия, вода)</li>
                                                <li>Создание сценариев работы оборудования по заданному расписанию</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_controls.svg">
                                                <span>Удаленное управление <br> и контроль</span>
                                            </div>
                                            <ul>
                                                <li>Температурой воздуха</li>
                                                <li>Освещением</li>
                                                <li>Бытовыми приборами</li>
                                                <li>Видеонаблюдением</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_dash.svg">
                                                <span>Мониторинг <br> показателей</span>
                                            </div>
                                            <ul>
                                                <li>Мониторинг потребления  ресурсов в режиме реального времени</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_alarm.svg">
                                                <span>Система <br> оповещений</span>
                                            </div>
                                            <ul>
                                                <li>Оповещения о наличии протечек в квартире</li>
                                                <li>Оповещения о несанкционированном доступе в помещение при соответствующих настройках сценариев</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="functional-app">
                        <div class="functional-app-layout">
                            <a href="#">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/apple-market.png">
                            </a>
                            <a href="#">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/google_market.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="functional-cover">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/iPhone2.png">
                </div>
            </div>
        </div>

        <?php get_template_part( 'components/partnerForm'); ?>

    </main>
<?php get_footer(); ?>