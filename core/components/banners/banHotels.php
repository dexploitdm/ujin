<?php

add_action( 'init', 'true_register_post_type_init_banHotels' ); // Использовать функцию только внутри хука init

function true_register_post_type_init_banHotels() {
    $labels = array(
        'name' => 'Гостиницы - элементы баннера',
        'singular_name' => 'элемент', // админ панель Добавить->Функцию
        'add_new' => 'Добавить элемент',
        'add_new_item' => 'Добавить новый элемент', // заголовок тега <title>
        'edit_item' => 'Редактировать элемент',
        'new_item' => 'Новый элемент',
        'all_items' => 'Все элементы',
        'view_item' => 'Просмотр элемента на сайте',
        'search_items' => 'Искать элемент',
        'not_found' =>  'элементов не найдено.',
        'not_found_in_trash' => 'В корзине нет элементов.',
        'menu_name' => 'Гост. баннер' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'thumbnail')
    );
    register_post_type('banHotels', $args);
}
