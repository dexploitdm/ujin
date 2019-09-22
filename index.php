<?php get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-home'); ?>
        <div class="opportunities box">
            <div class="opportunities-layout">
                <div class="opportunities-desc">
                    <h2 class="title-h2">Возможности Ujin</h2>
                    <p>Подключение комерческих объектов к платформе Ujin позволяет
                        делать их действительно умными с минимальными издержками.</p>
                </div>
                <div class="opportunities-tabs">
                    <ul class="tabs">
                        <li class="active" rel="tab1">Коммерческое использование</li>
                        <li rel="tab2" class="tab_last">Частное использование</li>
                    </ul>
                    <div class="tab_container">
                        <div id="tab1" class="tab_content" style="display: block;">
                            <p>Каждый объект  - это уникальная комбинация
                                технологических функций и сервисов, реализованных на базе платформы Ujin.</p>
                        </div>
                        <div id="tab2" class="tab_content" style="display: none;">
                            <p>Nunc dui velit, scelerisque eu placerat volutpat, dapibus eu nisi. Vivamus eleifend vestibulum odio non vulputate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="opportunities-icons grid-three">
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_video.svg">
                    <span>Управление видеонаблюдением</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_notkey.svg">
                    <span>Управление бесключевым доступом, СКУД, домофоном.</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_alarm.svg">
                    <span>Автоматическая система оповещений об аварийных ситуациях</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_electrum.svg">
                    <span>Автоматический учёт расхода ресурсов на объекте (тепло, электроэнергия, вода)</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_tasks.svg">
                    <span>Автоматизация сценариев работы оборудования  по заданому расписанию</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_box.svg">
                    <span>Собственная линейка оборудования Ujin</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_po.svg">
                    <span>Интеграцию ПО с предустановленным аппаратным решением</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_mobile.png">
                    <span>Функциональное приложение для управления зданиями</span>
                </div>
                <div class="opportunities-icons_item">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_hand.svg">
                    <span>Программа лояльности для клиентов</span>
                </div>
            </div>
            <div class="opportunities-app">
                <div class="mobile-app">
                    <p>Доступно на платформах</p>
                    <div class="mobile-app-layout">
                        <a class="mobile-app-layout_item">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/apple.png">
                            <span>Apps Store</span>
                        </a>
                        <a class="mobile-app-layout_item">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/google.png">
                            <span>Google Play</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="solutions">
            <div class="solutions-layout box">
                <div class="swiper-container2">
                    <div class="solutions-header">
                        <h2 class="title-h2">Наши решения</h2>
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
                                        <li>Мобильное приложение</li>
                                        <li>Видеонаблюдение и домофония</li>
                                        <li>Умные квартиры</li>
                                        <li>Автоматизированный мониторинг и учет потребляемых ресурсов</li>
                                        <li>Страхование Online</li>
                                        <li>Маркетплейс</li>
                                        <li>Чаты и уведомления</li>
                                    </ul>
                                </div>
                                <div class="btn-link">
                                    <a href="#">Подробнее</a>
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
                                        <li>Автоматизация сценариев работы гостиницы</li>
                                        <li>Автоматизированый мониторинг и учет потребляемых ресурсов</li>
                                        <li>Комунальные услуги</li>
                                        <li>Видеонаблюдение и домофония</li>
                                        <li>Маркетплейс</li>
                                        <li>Программа лояльности</li>
                                    </ul>
                                </div>
                                <div class="btn-link">
                                    <a href="#">Подробнее</a>
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
                                        <li>Маркетплейс</li>
                                        <li>Работа с собственниками</li>
                                    </ul>
                                </div>
                                <div class="btn-link">
                                    <a href="#">Подробнее</a>
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
                        <button class="u-btn">
                            Оставить заявку
                        </button>
                    </div>
                    <div class="solutions-boxes-desc">
                        Наш менеджер свяжется с Вами в течении 5 минут
                    </div>
                </div>
            </div>
        </div>

        <div class="product-preview box">
            <h2 class="title-h2">Собственная линейка товаров</h2>
            <div class="product-preview-layout grid-three">
                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Мультисенсор</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/multisensor.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">5 000 руб.</div>
                            <div class="product-box-desc_content">
                                <strong>Удаленное управление:</strong>
                                <ul>
                                    <li>Кондиционерами</li>
                                    <li>Рекуператорами  Valliant recoVair 60</li>
                                    <li>Термоголовками Danfoss с Bluetooth</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Термостат</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/termostat.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">3 500 руб.</div>
                            <div class="product-box-desc_content">
                                <strong>Управление:</strong>
                                <ul>
                                    <li>Электрический теплый пол</li>
                                    <li>Приводы Danfos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-box">
                    <div class="product-box-layout">
                        <div class="product-box-header">
                            <div class="product-box-header__title">Реле</div>
                            <a href="#" class="product-box-header__icon"></a>
                        </div>
                        <div class="product-box-cover">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/rele.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">1 500 руб.</div>
                            <div class="product-box-desc_content">
                                <strong>Управление:</strong>
                                <ul class="two">
                                    <li>Насосное оборудование</li>
                                    <li>Электрокотлы</li>
                                    <li>Защита котельной</li>
                                    <li>Автоматический полив</li>
                                    <li>2х и 3х-ходовые клапаны</li>
                                </ul>
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
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/rele.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">7 500 руб.</div>
                            <div class="product-box-desc_content">
                                <strong>Возможности::</strong>
                                <ul>
                                    <li>Счетчики воды с импульсным выходом</li>
                                    <li>Теплосчетчики с импульсным выходом</li>
                                </ul>
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
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/rele.png">
                        </div>
                        <div class="product-box-desc">
                            <div class="product-box-desc_price">3 500 руб.</div>
                            <div class="product-box-desc_content">
                                <strong>Возможности:</strong>
                                <ul>
                                    <li>Удаленное управление любым электроприбором</li>
                                    <li>Защита от замыкания</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-box mobile-hidden">
                    <div class="product-box-bg">
                        <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/products.png">
                        <a href="#" class="product-box-link">
                            <span>Перейти в каталог</span>
                        </a>
                    </div>
                </div>
                <a href="#" class="btn-link-mobile">Перейти в каталог<span></span></a>
            </div>
        </div>

    </main>
<?php get_footer(); ?>`