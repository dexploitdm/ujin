<?php
/*
Template Name: Макет застройщики
Template Post Type: page
*/
get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-developers'); ?>

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
            <div class="swiper-container3">
                <div class="lists-services-layout swiper-wrapper">
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_brain_home.svg">
                            <p>Умная <br> квартира</p>
                        </div>
                        <ul>
                            <li>Управление освещением, питанием розеток, климатом в
                                автомати-ческом и
                                ручном (через web и мобильное приложение) режимах</li>
                            <li>Контроль и предотвращение протечек</li>
                            <li>Управление охранной сигнализацией</li>
                            <li>Возможноть интеграции любых IoT устройств и "умной" бытовой техники</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_electrum.svg">
                            <p>Коммунальные <br> услуги</p>
                        </div>
                        <ul>
                            <li>Автоматический учёт расхода ресурсов (тепло, электроэнергия, вода)</li>
                            <li> Мониторинг потребления  ресурсов в реальном времени</li>
                            <li>Удобная оплата и учет состояния л/с</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_electrum.svg">
                            <p>Услуги локальных <br> бизнесов</p>
                        </div>
                        <ul>
                            <li>Доставка еды, воды, продуктов</li>
                            <li>Вызов клининговой компании</li>
                            <li>Услуги няни</li>
                            <li>Выгул собак</li>
                            <li>Химчистка</li>
                            <li>Заказ такси</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_chates.png">
                            <p>Чаты и <br> уведомления</p>
                        </div>
                        <ul>
                            <li>Общий чат для жителей ЖК</li>
                            <li>Личные беседы</li>
                            <li>Оповещения от застройщика и УК</li>
                            <li>Общение с представителем застройщика и бизнесом, предоставленном на территории ЖК</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_insurance.svg">
                            <p>Страхование <br> Online</p>
                        </div>
                        <ul>
                            <li>Заключение договоров</li>
                            <li>Проверенные страховые компании</li>
                            <li>Выбор оптимальных вариантов страхования от различных компаний</li>
                            <li>Оперативное получение выгодных предложений</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_videocam.svg">
                            <p>Видеонаблюдениее <br> и домофония</p>
                        </div>
                        <ul>
                            <li>Удаленное управление домофоном или видео-домофоном</li>
                            <li>Обзор камер видеонаблюдения,
                                расположенных на территории
                                комплекса на всех этапах строительства</li>
                            <li>Обзор и управление  видеонаблюдением
                                внутри квартиры</li>
                        </ul>
                    </div>
                </div>

            </div>

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

        <div class="functional">
            <div class="functional-layout box">
                <div class="functional-desc">
                    <h2 class="title-h2">Функциональное приложение для ваших покупателей</h2>
                    <div class="functional-desc-content">
                        Текст о том, что мы предлагаем застройщикам функциональное приложение,
                        которое можем  забрендировать под них.
                    </div>
                    <div class="u-list">
                        <div class="u-list-item list-open">
                            <div class="u-list-head">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_set_home.svg">
                                <div class="u-list-head-block">
                                    <span>1 этап</span>
                                    <p class="js-open-list">Выбор квартиры</p>
                                </div>
                            </div>
                            <div class="u-list-content">
                                <ul>
                                    <li>Визуализация ЖК</li>
                                    <li>Преимущества ЖК</li>
                                    <li>Информация о застройщике</li>
                                    <li>Новости</li>
                                    <li>Подбор квартиры</li>
                                    <li>Выбор дополнительных опций</li>
                                    <li>Заявки на просмотр квартиры</li>
                                    <li>On-line бронирование</li>
                                    <li>Чат с менеджером отдела продаж</li>
                                    <li>Программа лояльности</li>
                                    <li>Демо-режимы интерфейсов следующих этапов и др.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-list-item">
                            <div class="u-list-head">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_set_home.svg">
                                <div class="u-list-head-block">
                                    <span>2 этап</span>
                                    <p class="js-open-list">Строительство</p>
                                </div>
                            </div>
                            <div class="u-list-content">
                                <ul>
                                    <li>Визуализация ЖК</li>
                                    <li>Преимущества ЖК</li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-list-item">
                            <div class="u-list-head">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_set_home.svg">
                                <div class="u-list-head-block">
                                    <span>3 этап</span>
                                    <p class="js-open-list">Эксплуатация</p>
                                </div>
                            </div>
                            <div class="u-list-content">
                                <ul>
                                    <li>Визуализация ЖК</li>
                                    <li>Преимущества ЖК</li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="functional-cover">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/iPhone2.png">
                </div>
            </div>
        </div>
        <div class="projects-slider">
            <div class="projects-slider-head box">
                <h2 class="title-h2">Реализованные проекты</h2>
                <div class="projects-all">
                    <a href="projects.html">
                        Все проекты
                    </a>
                </div>
            </div>



            <div class="p-slider box">
                <div class="swiper-container">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-slider-box">
                            <div class="p-slider-box-cover" style="background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/projects/pro1.png); ">

                            </div>
                            <div class="p-slider-box-desc">
                                <div class="p-slider-head">
                                    <div class="p-slider-head-arrow">
                                        <div class="box-btn">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="p-slider-head-title">
                                        <a href="#">ЖК “Гулливер”
                                            <span>г. Пермь — 2017</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-slider-body">
                                    <p>
                                        Гулливер - не просто жилой комплекс, это маленький город в самом центре Перми.

                                        6 сдвоенных домов комфорт-класса и 2 дома бизнес-класса
                                        объединяет собственная зеленая зона, детские и спортивные площадки, муниципальный детский сад.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide p-slider-box">
                            <div class="p-slider-box-cover" style="background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/demo/projects/pro2.jpg); ">
                                <!--                            <img src="images/demo/projects/pro2.jpg">-->
                            </div>
                            <div class="p-slider-box-desc">
                                <div class="p-slider-head">
                                    <div class="p-slider-head-arrow">
                                        <div class="box-btn">
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                            <div class="swiper-pagination"></div>
                                        </div>
                                    </div>
                                    <div class="p-slider-head-title">
                                        <a href="#">ЖК “Гулливер”
                                            <span>г. Пермь — 2017</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-slider-body">
                                    <p>
                                        Гулливер - не просто жилой комплекс, это маленький город в самом центре Перми.

                                        6 сдвоенных домов комфорт-класса и 2 дома бизнес-класса
                                        объединяет собственная зеленая зона, детские и спортивные площадки, муниципальный детский сад.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
<?php get_footer(); ?>