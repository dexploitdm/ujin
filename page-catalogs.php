<?php
/*
Template Name: Макет Каталог
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="head-box-two" style="background-image: url(<?php the_post_thumbnail_url(); ?>">
            <div class="head-box-two-layout box">
                <div class="head-box-two-layout-content">
                    <h1 class="title-h1"><?php echo get_field( "title_bannner" ); ?></h1>
                    <div class="head-box-two-desc">
                        <p>
Умные устройства на базе концепции интернета вещей с искусственным интеллектом. Дистанционное управление светом и отоплением, контроль движений, тепла, влажности, предотвращение протечек. Все это в комплекте с удобным и понятным приложением для вашего смартфона.

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
                            <div class="product-box-header__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>); "></div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">
                                <span><?php echo $product->get_price();  ?> руб.</span>
                                <?php if($product->is_on_sale()):  ?>
							  	<span class="old"><?php echo $product->regular_price; ?> руб. </span>
								<?php endif; ?>
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

            </div>
        </div>

        <div class="functional">
            <div class="functional-layout box js-bg-block">
                <div class="functional-desc block-big">
                    <h2 class="title-h2">Функциональное управление</h2>
                    <div class="functional-tabs">
                        <ul class="tabs">
                            <li class="active js-change-bg" rel="tab1">Мобильное приложение</li>
                            <li rel="tab2" class="tab_last  js-change-bg">Яндекс.Станция</li>
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
                                <div class="functional-app">
                                    <div class="functional-app-layout">
                                        <a href="<?php echo get_theme_mod('appApple'); ?>" target="_blank">
                                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/apple-market.png">
                                        </a>
                                        <a href="<?php echo get_theme_mod('appGoogle'); ?>" target="_blank">
                                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/google_market.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="tab2" class="tab_content" style="display: none;">
                                <div class="functional-lists grid-two">
                                    <div class="functional-lists_item">
                                        <div class="functional-lists-layout">
                                            <div class="functional-lists-head">
                                                <img src="https://dexploitdm.ru/projects/ujin.io/wp-content/uploads/2019/09/microphone-1-e1569823072606.png">
                                                <span>Управление устройствами с помощью голосовых команд:</span>
                                            </div>
                                            <ul>
												<li>Управлять электроприборами</li>
												<li>Поставить таймер на нужное время</li>
                                                <li>Включить\выключить свет</li>
                                                <li>Включить\выключить заданый сценарий работы</li>
												<li>Перекрыть воду </li>
												<li>Управление сотнями других устройств от партнеров Яндекса</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="functional-cover js-cover">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/iPhone2.png">
                </div>
				<div class="functional-cover cover-2 fade js-cover-two">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/ban_cover_bg.svg">
                </div>
				<style>
					.cover-2 {
						width: 40%;
					}
					.functional-cover.fade {
						display: none;
					}
				</style>
            </div>
        </div>

        <?php get_template_part( 'components/partnerForm'); ?>

    </main>
<?php get_footer(); ?>