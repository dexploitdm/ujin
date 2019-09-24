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

    <?php $pportunities = new WP_Query(array(
        'post_type' => 'opportunities',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'checkOpp',
                'value' => 'homeA',
                'compare' => 'LIKE'
            )
        )
    )) ?>
    <?php if ($pportunities->have_posts() ): ?>
    <div class="opportunities-icons grid-three js-content-tab1 active" data-show="commerce">
        <?php while ($pportunities->have_posts()) : $pportunities->the_post(); ?>
        <div class="opportunities-icons_item">
            <img src="<?php the_post_thumbnail_url(); ?>">
            <span><?php the_title(); ?></span>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

<!--    Вторая вкладка-->
    <?php $pportunities = new WP_Query(array(
        'post_type' => 'opportunities',
        'order' => 'ASC',
        'meta_query' => array(
            array(
                'key' => 'checkOpp',
                'value' => 'homeB',
                'compare' => 'LIKE'
            )
        )
    )) ?>
    <?php if ($pportunities->have_posts() ): ?>
    <div class="opportunities-icons grid-three js-content-tab2">
        <?php while ($pportunities->have_posts()) : $pportunities->the_post(); ?>
            <div class="opportunities-icons_item">
                <img src="<?php the_post_thumbnail_url(); ?>">
                <span><?php the_title(); ?></span>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
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