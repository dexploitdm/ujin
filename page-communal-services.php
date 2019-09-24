<?php
/*
Template Name: Макет ЖКХ
Template Post Type: page
*/
get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-jkh'); ?>
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
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_peoples.svg">
                            <p>Управление <br> сотрудниками</p>
                        </div>
                        <ul>
                            <li>Добавление новых сотрудников</li>
                            <li>Редактирование информации о сотрудниках</li>
                            <li>Контроль работы сотрудников</li>
                            <li>Ведение БД, отчетность</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_setting.svg">
                            <p>Управление <br> объектами</p>
                        </div>
                        <ul>
                            <li>Добавление новых объектов</li>
                            <li>Редактирование информациии об объектах</li>
                            <li>Ведение БД, отчетность</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_sec_blue.svg">
                            <p>Управление <br> безопасностью</p>
                        </div>
                        <ul>
                            <li>Добавление камер видеонаблюдения</li>
                            <li>Просмотр камер общедомовых камер</li>
                            <li>Управление системой контроля доступа в помещения</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_clients.svg">
                            <p>Работа <br> с клиентами</p>
                        </div>
                        <ul>
                            <li>Загрузка квитанций ЖКХ, просмотр сведений и напоминания об оплате</li>
                            <li>Прием и обработка заявокк от жильцов</li>
                            <li>Коммуникации с жильцами с помощью чатов и онлайн-голосований</li>
                            <li>Информирование жильцов: новости, мер оприятия, проводимые работы</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_procces.svg">
                            <p>Автоматизация <br> процессов</p>
                        </div>
                        <ul>
                            <li>Просмотр информации по приборам учета</li>
                            <li>Контроль и оповещениу об авариях, при подключении и интеграции с инженерными системами здания</li>
                            <li>Удаленное управление системой контроля доступа, воротами, шлагбаумом</li>
                        </ul>
                    </div>
                    <div class="lists-services-box swiper-slide">
                        <div class="services-head">
                            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_money.svg">
                            <p>Монетизация <br> работы</p>
                        </div>
                        <ul>
                            <li>Возможность принимать заказы на дополнительные платные услуги</li>
                            <li>Добавление партеров в MarketPlace</li>
                            <li>Экономия на бумажных квитанциях и промо-материалах</li>
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
        <div class="functional functional-jkh">
            <div class="functional-layout box">
                <div class="functional-desc block-big">
                    <h2 class="title-h2">Функциональное приложение для ваших жильцов</h2>
                    <div class="functional-desc-content">
                        Текст о том, что мы предлагаем застройщикам функциональное приложение,
                        которое можем  забрендировать под них.
                    </div>
                    <div class="functional-lists grid-two">
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_automatisation.svg">
                                    <span>Автоматизированная система управления <br> и учета</span>
                                </div>
                                <ul>
                                    <li>Учет и мониторинг тепло-и энергопотребления</li>
                                    <li>Вызов диспетчерских служб или подача заявки в 1 клик</li>
                                    <li>Оповещение о несанкционированном доступе в квартиру</li>
                                    <li>Возможность построения графиков потребления энергии</li>
                                </ul>
                            </div>
                        </div>
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_acces.svg">
                                    <span>Управление системой контроля доступа</span>
                                </div>
                                <ul>
                                    <li>Доступ к видеокамерам</li>
                                    <li>Возможность открывать домофон и шлагбаумы</li>
                                    <li>Возможность выписать гостевой пропуск</li>
                                </ul>
                            </div>
                        </div>
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_msg_neon.png">
                                    <span>Быстрый способ коммуникаций и передачи данных</span>
                                </div>
                                <ul>
                                    <li>Считывание и передача данных со счетчиков</li>
                                    <li>Автоматическая рассылка квитанций</li>
                                    <li>Общение с жильцами в чате.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="functional-lists_item">
                            <div class="functional-lists-layout">
                                <div class="functional-lists-head">
                                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/icons/ic_tasks_neon.svg">
                                    <span>Разное</span>
                                </div>
                                <ul>
                                    <li>Возможность заказывать воду, продукты и необходимые товары из нашего Marketplace</li>
                                    <li>Возможность прокачать интеллект дома, добавив  "умные устройства"</li>
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
        <?php get_template_part( 'components/partners'); ?>

    </main>
<?php get_footer(); ?>