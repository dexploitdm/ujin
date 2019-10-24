<?php
/*
Template Name: Макет Разное 2
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="empty-block"></div>
<?php while( have_posts() ) : the_post(); ?>
        <div class="content box">
           <h1 class="title-h2">
			    <?php the_title(); ?>
			</h1>
			<?php the_content(); ?>
        </div>
<?php  endwhile; ?>

    <?php 
    if (mail("dexploitdm@yandex.ru", "Test - Проверка", "Текст 123 QWERTY")) {
	echo 'Отправлено!';
} else {
	echo 'Ошибка!';
}
    ?>

    </main>
<?php get_footer(); ?>