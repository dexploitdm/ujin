<div class="opportunities box">
    <div class="opportunities-layout">
        <div class="opportunities-desc">
            <h2 class="title-h2">Возможности Ujin</h2>
            <p>Каждый объект  - это уникальная комбинация технологических функций и сервисов, реализованных на базе платформы Ujin.</p>
        </div>
        <div class="opportunities-tabs">
            <ul class="tabs">
                <li class="active js-show-content" rel="tab1" data-open="commerce">Коммерческое использование</li>
                <li rel="tab2" class="tab_last js-show-content" data-open="person">Частное использование</li>
            </ul>
            <div class="tab_container">
                <div id="tab1" class="tab_content" style="display: block;">
                    <p>Подключение коммерческих объектов к платформе Ujin позволяет
                делать их действительно умными с минимальными издержками.</p>
                </div>
                <div id="tab2" class="tab_content" style="display: none;">
                    <p>Система Ujin - это централизованное 
						управление всеми объектами, обеспечивающими ваше комфортное проживание в доме.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="opportunities-icons grid-three js-content-tab1 active" data-show="commerce">
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
<!--    Вторая вкладка-->
    <div class="opportunities-icons grid-three js-content-tab2">
        		 <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_mobile.png">
            <span>Централизованое управление. Мобильное приложение.</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_video.svg">
            <span>Управление видеонаблюдением</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_notkey.svg">
            <span>Управление домофонами и видео-домофонами.</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_alarm.svg">
            <span>Управление осещением</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_electrum.svg">
            <span>Управление климат-контролем</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_tasks.svg">
            <span>Управление тёплыми полами</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_box.svg">
            <span>Защита от протечек воды</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/ic_po.svg">
            <span>Управление и контроль работы электроприборов</span>
        </div>
        <div class="opportunities-icons_item">
            <img src="https://dexploitdm.ru/projects/ujin.io/wp-content/uploads/2019/09/Karniz.png">
            <span>Управление автоматическими шторами</span>
        </div>
    </div>
    <div class="opportunities-app">
        <div class="mobile-app">
            <p>Доступно на платформах</p>
            <div class="mobile-app-layout">
                <a href="<?php echo get_theme_mod('appApple'); ?>" class="mobile-app-layout_item" target="_blank">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/apple.png">
                    <span>Apps Store</span>
                </a>
                <a href="<?php echo get_theme_mod('appGoogle'); ?>" class="mobile-app-layout_item" target="_blank">
                    <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/google.png">
                    <span>Google Play</span>

                </a>
            </div>
        </div>
    </div>
</div>
<style>
    .opportunities-icons {
        display: none;
    }
    .opportunities-icons.active {
        display: grid;
    }
</style>