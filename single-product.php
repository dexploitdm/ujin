<?php
get_header(); ?>
    <main>
        <div class="empty-block"></div>

        <?php while ( have_posts() ) : the_post(); ?><?php endwhile; // end of the loop. ?>
        <div class="product-item box">
            <h2 class="title-h2"><?php the_title(); ?></h2>

            <div class="product-item-layout grid-three">

                <div class="product-item-box">
                    <div class="product-item-images">
                        <div class="product-item-images-alpha">
                            <img class="js-cover-product" src="<?php the_post_thumbnail_url(); ?>">
                        </div>
                        <div class="product-item-images-boxes">
                            <div class="product-item-img">
                                <div class="gallery-product">
                                    <?php do_action( 'woocommerce_product_thumbnails' ); ?>
                                </div>
<!--                                <div class="img-cover js-img-cover active">-->
<!--                                    <img src="--><?php // echo get_template_directory_uri() ?><!--/assets/build/images/demo/r2.png">-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="product-item-cools">
                        <div class="product-item-cools-icon">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/device.png">
                        </div>
                        <div class="product-item-cools-icon">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/box.png">
                        </div>
                        <div class="product-item-cools-icon">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/lam.png">
                        </div>
                        <div class="product-item-cools-icon">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/box2.png">
                        </div>
                        <div class="product-item-cools-icon">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/tv.png">
                        </div>
                    </div>
                </div>

                <div class="product-item-box">
                    <div class="tabs-all">
                        <div class="tabs-all_lists">
                            <div class="tab active">
                                Характеристики
                            </div>
                            <div class="tab">
                                Описание
                            </div>
                        </div>

                        <div class="tabContent">
                            <div class="product-item-box-content">
                                <?php global $product;
                                echo $product->list_attributes(); ?>
                            </div>
                        </div>
                        <div class="tabContent">
                            <div class="product-item-box-content">
                                <div class="product-info not-border" style="display: block;">
                                    <p> <?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="product-item-download">
                        <div class="product-item-download-block">
                            <a href="#" class="download">Скачать инструкцию
                                <span>1,5 Mb, PDF</span></a>
                        </div>
                    </div>
                </div>

                <div class="product-item-box">
                    <div class="product-item-form">
                        <div class="product-form">
                            <div class="product-form-head">
                                <div class="product-form-head_item">
                                    <div class="pr-title">Доставка</div>
                                    <div class="pr-icon">?</div>
                                </div>
                                <div class="product-form-head_item">
                                    <div class="pr-title">Оплата </div>
                                    <div class="pr-icon">?</div>
                                </div>
                            </div>
                            <div class="product-form-price-old">
                                4 500 руб.
                            </div>
                            <div class="product-form-info">
                                <div class="product-form-info-price">
                                    <div class="product-form-info_item">Стоимость</div>
                                    <div class="product-form-info_item">3 500 руб.</div>
                                </div>
                                <div class="product-form-info-price">
                                    <div class="product-form-info_item">Количество</div>
                                    <div class="product-form-info_item">
                                        xxx

                                    </div>
                                </div>
                                <div class="product-form-info-price">
                                    <div class="product-form-info_item">Сумма заказа</div>
                                    <div class="product-form-info_item">17 500 руб.</div>
                                </div>
                                <div class="info-text">Дорого?</div>
                                <form method="post" class="u-form">
                                    <div class="u-controls">
                                        <input type="text" class="u-input" name="fio" placeholder="Ф.И.О. контактного лица">
                                    </div>
                                    <div class="u-controls">
                                        <input type="text" class="u-input" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="u-controls">
                                        <input type="text" class="u-input" name="сщььуте" placeholder="Комментарий">
                                    </div>
                                    <div class="u-form-btn">
                                        <button class="u-btn u-btn-white" type="submit">
                                            Оформить заказ
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="product-item-msg">
                            Наш менеджер свяжется с вами в течении 15 минут для оформления заказа
                        </div>


                    </div>
                </div>

                <div class="block-mobile">
                    <div class="product-head">
                        <div class="product-head_item">
                            <div class="pr-title">Доставка</div>
                            <div class="pr-icon">?</div>
                        </div>
                        <div class="product-head_item">
                            <div class="pr-title">Оплата </div>
                            <div class="pr-icon">?</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <div class="product-preview full-list box mobile-hidden">
            <h2 class="title-h2">С эти товаром покупают</h2>
            <div class="product-preview-layout grid-three">

                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Комплект защиты от протечек</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/complect_sec.png">
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

                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Умная розетка</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/brain_r.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">3 500 руб.</div>
                            <div class="product-box-desc_content">
                                <div class="product-box-desc_content_box">
                                    <p>Управляет электрической розеткой</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Комплект защиты от протечек</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/complect_sec.png">
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


        <div class="functional functional-small">
            <div class="functional-layout box">
                <div class="functional-desc block-big">
                    <h2 class="title-h2">Функциональное приложение для ваших жильцов</h2>
                    <div class="functional-tabs full-tabs">
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
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_microphone.svg">
                                                <span>Управление всеми <br> устройствами с помощью <br> голосовых команд:</span>
                                            </div>
                                            <ul>
                                                <li>Автоматический учёт расхода ресурсов (тепло, электроэнергия, вода)</li>
                                                <li>Создание сценариев работы оборудования по заданному расписанию</li>
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
                                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_microphone.svg">
                                                <span>Управление всеми <br> устройствами с помощью <br> голосовых команд:</span>
                                            </div>
                                            <ul>
                                                <li>Автоматический учёт расхода ресурсов (тепло, электроэнергия, вода)</li>
                                                <li>Создание сценариев работы оборудования по заданному расписанию</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="functional-cover position-two">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/ban_cover_bg.svg">
                </div>
            </div>
        </div>

        <?php get_template_part( 'components/partnerForm'); ?>

    </main>
<?php get_footer(); ?>