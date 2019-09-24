<?php
define( 'ACF_LITE', false );
include_once('advanced-custom-fields/acf.php');
//Убираем теги <p> у изображений
include_once('components/non_tag_p-image.php');
//Перевод ссылок
include_once('components/rus-to-lat.php');
//Оключаем Emoji
include_once('components/unlock_emoji.php');
//Настройки
include_once('components/setting.php');
include_once('components/settingsTwo.php');
//Редиректы
include_once('components/wp-simple-301-redirects.php');
//Классы меню
include_once('components/menu.php');
//Вывод аттрибутов
include_once('components/attr.php');

//Баннеры
include_once('components/banners/banHome.php');
include_once('components/banners/banDevelopers.php');
include_once('components/banners/banJkh.php');
include_once('components/banners/banHotels.php');

//Возможности
include_once('components/opportunities/opportunities.php');
