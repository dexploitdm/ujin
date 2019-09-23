<?php
add_action('customize_register', function($customizer) {
    $customizer->add_section(
        'section_one', array(
            'title' => 'Настройки сайта',
            'description' => '',
            'priority' => 11,
        )
    );
    $customizer->add_setting('appApple',
        array('default' => '#')
    );
    $customizer->add_setting('appGoogle',
        array('default' => '#')
    );

    $customizer->add_control('appApple', array(
            'label' => 'Ссылка на приложение Apple',
            'section' => 'section_one',
            'type' => 'text',
        )
    );
    $customizer->add_control('appGoogle', array(
            'label' => 'Ссылка на приложение Google',
            'section' => 'section_one',
            'type' => 'text',
        )
    );
});