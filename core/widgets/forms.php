<?php
//Услуги на главной странице
function register_my_widgets_service_home(){
    register_sidebar( array(
        'name' => 'Форма: Онлайн заявка',
        'id' => 'homepage-sidebar',
        'description' => 'Используется для Contact Form',
        'before_widget' => '<div class="homepage-widget-block">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'register_my_widgets_service_home' );

//Задать вопрос
function register_my_widgets_questions(){
    register_sidebar( array(
        'name' => 'Форма: Задать вопрос',
        'id' => 'modal_questions',
        'description' => 'Используется для Contact Form',
        'before_widget' => '<div class="homepage-widget-block">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'register_my_widgets_questions' );

